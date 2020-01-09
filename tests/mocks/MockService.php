<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 15:06
 */

namespace tests\mocks;

/**
 * Class MockService
 * @package tests\mocks
 */
class MockService implements MockServiceInterface
{

    /**
     * @var OtherMockServiceInterface
     */
    private $otherMockService;

    /**
     * MockService constructor.
     * @param OtherMockServiceInterface $otherMockService
     */
    public function __construct(OtherMockServiceInterface $otherMockService)
    {
        $this->otherMockService = $otherMockService;
    }

}
