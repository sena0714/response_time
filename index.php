<?php
require_once(__DIR__.'/ResponseTime.php');

main();

// DBからユーザーを取得し、その結果をExcelに出力するケース
function main(): void {
    $responseTime = new ResponseTime();

    $process = function() {
        $userData = findAllUser();
        exportUserListExcel($userData);
    };
    $time = $responseTime->measure($process);
    echo "応答時間: {$time}秒".PHP_EOL;
}

function findAllUser(): array {
    sleep(3);

    // DBからユーザーを取得する処理...
    return [];
}

function exportUserListExcel(array $userData): void {
    sleep(2);

    // ユーザー一覧をExcelに出力する処理...
}