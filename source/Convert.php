<?php

/**
 * CodeMommy ConvertPHP
 * @author  Candison November <www.kandisheng.com>
 */

namespace CodeMommy\ConvertPHP;

/**
 * Class Convert
 * @package CodeMommy\ConvertPHP
 */
class Convert
{
    public static function arrayToJSON($array)
    {
        return json_encode($array);
    }
}