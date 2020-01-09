<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 14:46
 */

namespace housedi;

use Psr\Container\ContainerInterface as PsrContainerInterface;

/**
 * Interface ContainerInterface
 * @package housedi
 */
interface ContainerInterface extends PsrContainerInterface
{

    /**
     * @param string $key
     * @param $value
     * @param string $type
     * @return void
     */
    public function set(string $key, $value, string $type = Container::DEFINITION_TYPE);

    /**
     * @param string $key
     * @param $value
     * @param string $type
     * @return void
     */
    public function reset(string $key, $value, string $type = Container::DEFINITION_TYPE);

}
