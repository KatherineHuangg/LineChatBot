<?php
$connect = new PDO('mysql:host=localhost;dbname=line;charset=utf8mb4', 'yuting', '123456');
$sth = $connect->prepare('SELECT line_state FROM line_state WHERE line_id = 1');
$sth->execute();
$row = $sth->fetch();
/**
 * Copyright 2020 GoneTone
 *
 * Line Bot
 * 範例 Example Bot 執行主文件
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api/
 */
date_default_timezone_set("Asia/Taipei"); //設定時區為台北時區

require_once('LINEBotTiny.php');
$money = 20;
$channelAccessToken = '';
$channelSecret = '';
if (file_exists(__DIR__ . '/config.ini')) {
    $config = parse_ini_file("config.ini", true); //解析配置檔
    if ($config['Channel']['Token'] == null || $config['Channel']['Secret'] == null) {
        error_log("config.ini 配置檔未設定完全！", 0); //輸出錯誤
    } else {
        $channelAccessToken = $config['Channel']['Token'];
        $channelSecret = $config['Channel']['Secret'];
    }
} else {
    $configFile = fopen("config.ini", "w") or die("Unable to open file!");
    $configFileContent = '; Copyright 2019 GoneTone
;
; Line Bot
; 範例 Example Bot 配置文件
;
; 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
; 官方文檔：https://developers.line.biz/en/reference/messaging-api/

[Channel]
; 請在雙引號內輸入您的 Line Bot "Channel access token"
Token = ""

; 請在雙引號內輸入您的 Line Bot "Channel secret"
Secret = ""
';
    fwrite($configFile, $configFileContent); //建立文件並寫入
    fclose($configFile); //關閉文件
    error_log("config.ini 配置檔建立成功，請編輯檔案填入資料！", 0); //輸出錯誤
}
$money = 0;
global $income;
global $expense;
$income = 100;
$expense = 20;
$message = null;
$event = null;
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch($row[0]){
                case 'close':
                    require_once('data/close.php');
                    break; 
                case 'start':
                    require_once('data/start.php');
                    break;  
                case 'qrcode':
                    require_once('data/qrcode.php');
                    break;  
                case 'music':
                    require_once('data/music.php');
                    break;  
                case 'check':
                    require_once('data/check.php');
                    break;
                /*case 'list':
                    require_once('data/list.php');
                case 'search':
                    require_once('data/food.php');
                    require_once('data/goback_check.php');
                    break;
                case 'goback':
                    require_once('data/goback.php');
                    break;*/

            }
            break;
        case 'postback':
            //require_once('postback.php'); //postback
            break;
        case 'follow': //加為好友觸發

            break;
        case 'join': //加入群組觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => '大家好，這是一個範例 Bot OuO

範例程式開源至 GitHub (包含教學)：
https://github.com/GoneTone/line-example-bot-php'
                    )
                )
            ));
            break;
        default:
            //error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
}
