<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 15:07
 */

namespace tests\mocks;

/**
 * Class MockRepository
 * @package tests\mocks
 */
class MockRepository implements MockRepositoryInterface
{

    /**
     * @var array
     */
    private $a;

    /**
     * @var array
     */
    private $b;

    /**
     * @var int
     */
    private $c;

    /**
     * MockRepository constructor.
     * @param array $a
     * @param array $b
     * @param int $c
     */
    public function __construct(array $a, $b = ['key' => 'value'], $c = 1)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

}
