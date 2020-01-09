<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 15:40
 */

namespace tests\mocks;

/**
 * Interface MockSingletonInterface
 * @package tests\mocks
 */
interface MockSingletonInterface
{

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param $value
     * @return void
     */
    public function setValue($value);

}
