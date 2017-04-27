<?php

namespace StenHigh\bxHelp;

class ajax
{
    /**
     * Check aJax request
     *
     * @return bool
     */
    public static function isAjax()
    {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }
}