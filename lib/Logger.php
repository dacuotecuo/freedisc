<?php

date_default_timezone_set('Asia/Shanghai');

class Logger
{
    /**
     * 基础日志接口
	 * @param   $content    日志内容
     * @param   $filename   文件内容
     */
    static function log ($content, $filename='') {

        if (empty($filename)) {

            $filename = 'debugger';
        }

        if (empty($content)) {
            $content = '';
        }

        $content = date('Y-m-d').' '.date('H:m:s').'|'.$content.PHP_EOL;
        file_put_contents(dirname(__FILE__).'\..\\'.'\logs\\'.$filename.'_'.date('Ymd').'.log', $content, FILE_APPEND);
    }

    /**
     * 调试日志接口
	 * @param   $content    日志内容
     * @param   $filename   文件内容
     */
    public static function debugger ($content) {
        self::log($content, '');
    }

    /**
     * 调试日志接口
	 * @param   $content    日志内容
     * @param   $filename   文件内容
     */
    public static function test ($content) {
        self::log($content, 'test');
    }
}