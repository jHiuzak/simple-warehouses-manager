<?php

use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('setControlCode')) {
    function setControlCode($controlCodeAttribute, $idAttribute, $modelPrefix)
    {
        $reformattedIdAttribute = str_pad($idAttribute, 3, '0', STR_PAD_LEFT);

        $controlCodeAttribute = $modelPrefix.$reformattedIdAttribute;

        return $controlCodeAttribute;
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
