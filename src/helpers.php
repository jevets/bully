<?php

if (!function_exists('active')) {
    /**
     * Return an active HTML class when given condition is met
     *
     * @param mixed $condition
     * @return string
     */
    function active($condition)
    {
        return $condition ? 'is-active' : '';
    }
}
