<?php
/**
 * Created by PhpStorm.
 * User: fukairyo
 * Date: 20/02/02
 * Time: 12:30
 */
if ( ! function_exists('vd'))
{
    function vd($data, $isExit = false)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        if ($isExit) {
            exit;
        }
        return;
    }
}

