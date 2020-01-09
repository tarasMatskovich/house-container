<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 15:03
 */

namespace tests\container;

use housedi\Container;
use Psr\Container\NotFoundExceptionInterface;
use tests\mocks\MockRepository;
use tests\mocks\MockRepositoryInterface;
use tests\mocks\MockService;
use tests\mocks\MockServiceInterface;
use tests\mocks\MockSingleton;
use tests\mocks\MockSingletonInterface;
use tests\mocks\OtherMockService;
use tests\mocks\OtherMockServiceInterface;

/**
 * Class ContainerTest
 * @package tests\container
 */
class ContainerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * method testContainer
     * @return void
     * @throws \housedi\exceptions\ContainerException
     * @throws \housedi\exceptions\NotFoundException
     */
    public function testContainer()
    {
        $definitions = [
            'definitions' => [
                MockServiceInterface::class => MockService::class
            ],
            'singletons' => []
        ];
        $container = new Container($definitions);
        $container->set(OtherMockServiceInterface::class, OtherMockService::class);
        $container->set(MockRepositoryInterface::class, MockRepository::class);
        $container->set('application:mockService', MockService::class);
        $mockService = $container->get(MockServiceInterface::class);
        $this->assertInstanceOf(MockService::class, $mockService);
        $mockService = $container->get('application:mockService');
        $this->assertInstanceOf(MockService::class, $mockService);
        $e = null;
        try {
            $container->get('dsadjasd');
        } catch (\Exception $exception) {
            $e = $exception;
        }
        $this->assertInstanceOf(NotFoundExceptionInterface::class, $e);
        $container->set(MockSingletonInterface::class, MockSingleton::class, Container::SINGLETON_TYPE);
        /**
         * @var MockSingletonInterface $singleton
         */
        $singleton = $container->get(MockSingletonInterface::class);
        $value = 123;
        $singleton->setValue($value);
        $otherSingleton = $container->get(MockSingletonInterface::class);
        $this->assertEquals($value, $otherSingleton->getValue());
    }

}
