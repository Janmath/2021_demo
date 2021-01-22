<?php
namespace Demo;

class Test
{
    public static function getTomorrowTime()
    {
        return time() + 86400;
    }

    public static function hello()
    {
        return 'Hello Body';
    }
}
