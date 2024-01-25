<?php
/**
 * 処理の応答時間に関するクラス
 */
class ResponseTime
{
    public function __construct()
    {}

    /**
     * @param callable $func 計測する処理
     * 
     * @return float 応答時間を返す(単位: 秒)
     */
    public function measure(callable $func): float {
        $begin = microtime(true);

        $func();

        $end = microtime(true);
        return $end - $begin;
    }
}