<?php
/**
 * Created by PhpStorm.
 * User: t.matskovich
 * Date: 09.01.2020
 * Time: 14:52
 */

namespace housedi\exceptions;


use Psr\Container\NotFoundExceptionInterface;

/**
 * Class NotFoundException
 * @package housedi\exceptions
 */
class NotFoundException extends \Exception implements NotFoundExceptionInterface
{

    const ERROR_MESSAGE = "Container error:";

    /**
     * NotFoundException constructor.
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        $message = static::ERROR_MESSAGE . " definition {$message} was not found.";
        parent::__construct($message, $code, $previous);
    }

}
