<?php

set_include_path(dirname(__FILE__));

class db
{
    public static function test() {

        $flag=mysql_connect('localhost', 'xxxx', 'xxxx');

        echo $flag;
        echo mysql_query('show databases');


    }
}