<?php

/**
 * @package AlecaddPlugin
 */

namespace Inc\Base;

class Activate
{
    static function activation()
    {

        flush_rewrite_rules();
    }
}
