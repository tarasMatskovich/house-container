<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 15:06
 */

namespace tests\mocks;

/**
 * Class OtherMockService
 * @package tests\mocks
 */
class OtherMockService implements OtherMockServiceInterface
{

    /**
     * @var MockRepositoryInterface
     */
    private $mockRepository;

    /**
     * OtherMockService constructor.
     * @param MockRepositoryInterface $mockRepository
     */
    public function __construct(MockRepositoryInterface $mockRepository)
    {
        $this->mockRepository = $mockRepository;
    }

}
