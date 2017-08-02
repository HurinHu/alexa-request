<?php
namespace Weysan\Alexa\Exceptions;

/**
 * Class UnexpectedCardTypeException
 * @package Weysan\Alexa\Exceptions
 */
class UnexpectedCardTypeException extends \Exception
{
    public function __construct($unexpectedCardTypeName)
    {
        $message = "Unexpected $unexpectedCardTypeName card type.";
        parent::__construct($message);
    }
}