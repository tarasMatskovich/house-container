<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 15:40
 */

namespace tests\mocks;

/**
 * Class MockSingleton
 * @package tests\mocks
 */
class MockSingleton implements MockSingletonInterface
{

    /**
     * @var mixed
     */
    private $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
