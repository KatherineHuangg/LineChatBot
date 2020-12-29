<?php
if (strtolower($message['text']) == "qrcode") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => '請問您需要哪間教室的QRcode呢?' //回復訊息
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','qrcode');
    $sth->execute();
}
elseif (strtolower($message['text']) == "音樂" || $message['text'] == "music") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => '請問您想要聽什麼歌呢?目前有提供『英』、『韓』跟『中』各3首呦!都是我最近愛聽的歌嘿嘿~' //回復訊息
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','music');
    $sth->execute();
}
elseif (strtolower($message['text']) == "fsm") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', //訊息類型 (圖片)
                'originalContentUrl' => 'https://i.imgur.com/vsJHYMA.png', //回復圖片
                'previewImageUrl' => 'https://i.imgur.com/vsJHYMA.png' //回復的預覽圖片
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','start');
    $sth->execute();
}

