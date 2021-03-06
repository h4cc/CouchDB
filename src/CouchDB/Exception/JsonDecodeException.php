<?php
namespace CouchDB\Exception;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class JsonDecodeException extends \Exception
{
    private static $errors = array(
        JSON_ERROR_NONE           => 'unknown error',
        JSON_ERROR_DEPTH          => 'The maximum stack depth has been exceeded',
        JSON_ERROR_SYNTAX         => 'Syntax error',
        JSON_ERROR_CTRL_CHAR      => 'Control character error',
        JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON',
        JSON_ERROR_UTF8           => 'Malformed UTF-8 characters'
    );

    public function __construct($json, $code = 0, $previous = null)
    {
        $message = sprintf('Json decode error [%s]: %s', self::$errors[json_last_error()], $json);

        parent::__construct($message, $code, $previous);
    }

}
