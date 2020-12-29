<?php
if (strtolower($message['text']) == "65304") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "bubble",
                    "hero" => array(
                        "type" => "image",
                        "url" => "https://i.imgur.com/tYgJsmx.png",
                        "size" => "full",
                        "aspectRatio" => "20:13",
                        "aspectMode" => "cover"
                    ),
                    "body" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "text" => "65304",
                                "weight" => "bold",
                                "size" => "xl"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "margin" => "lg",
                                "spacing" => "sm",
                                "contents" => array(
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "教授",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "朱威達",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "課程",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "微算機主課 & 乙班實驗",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "主課",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "星期三09:00 - 12:00",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "實驗",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "星期四09:00 - 12:00",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    "footer" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "spacing" => "sm",
                        "contents" => array(
                            array(
                                "type" => "button",
                                "style" => "link",
                                "height" => "sm",
                                "action" => array(
                                    "type" => "uri",
                                    "label" => "WEBSITE",
                                    "uri" => "https://app.pers.ncku.edu.tw/ncov/index.php?c=fp&bid=B102&rid=B10203020&floor=3F"
                                )
                            ),
                            array(
                                "type" => "spacer",
                                "size" => "sm"
                            )
                        ),
                        "flex" => 0
                    )
                )
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','qrcode');
    $sth->execute();
}
elseif (strtolower($message['text']) == "65203") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "bubble",
                    "hero" => array(
                        "type" => "image",
                        "url" => "https://i.imgur.com/ro3h7UO.png",
                        "size" => "full",
                        "aspectRatio" => "20:13",
                        "aspectMode" => "cover"
                    ),
                    "body" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "text" => "65203",
                                "weight" => "bold",
                                "size" => "xl"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "margin" => "lg",
                                "spacing" => "sm",
                                "contents" => array(
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "授課",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "助教們",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "課程",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "微算機甲班實驗",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "Time",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "星期四15:00 - 18:00",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    "footer" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "spacing" => "sm",
                        "contents" => array(
                            array(
                                "type" => "button",
                                "style" => "link",
                                "height" => "sm",
                                "action" => array(
                                    "type" => "uri",
                                    "label" => "WEBSITE",
                                    "uri" => "https://app.pers.ncku.edu.tw/ncov/index.php?c=fp&bid=B102&rid=B10202021&floor=2F"
                                )
                            ),
                            array(
                                "type" => "spacer",
                                "size" => "sm"
                            )
                        ),
                        "flex" => 0
                    )
                )
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','qrcode');
    $sth->execute();
}
elseif (strtolower($message['text']) == "65405") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "bubble",
                    "hero" => array(
                        "type" => "image",
                        "url" => "https://i.imgur.com/SyXDs44.png",
                        "size" => "full",
                        "aspectRatio" => "20:13",
                        "aspectMode" => "cover"
                    ),
                    "body" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "text" => "65405",
                                "weight" => "bold",
                                "size" => "xl"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "margin" => "lg",
                                "spacing" => "sm",
                                "contents" => array(
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "教授",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "莊坤達",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "課程",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "計算理論",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "Time",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "星期三14:00 - 17:00",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    "footer" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "spacing" => "sm",
                        "contents" => array(
                            array(
                                "type" => "button",
                                "style" => "link",
                                "height" => "sm",
                                "action" => array(
                                    "type" => "uri",
                                    "label" => "WEBSITE",
                                    "uri" => "https://app.pers.ncku.edu.tw/ncov/index.php?c=fp&bid=B102&rid=B10204901CC&floor=4F"
                                )
                            ),
                            array(
                                "type" => "spacer",
                                "size" => "sm"
                            )
                        ),
                        "flex" => 0
                    )
                )
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','qrcode');
    $sth->execute();
}
elseif (strtolower($message['text']) == "4263") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "bubble",
                    "hero" => array(
                        "type" => "image",
                        "url" => "https://i.imgur.com/AEWaKvz.png",
                        "size" => "full",
                        "aspectRatio" => "20:13",
                        "aspectMode" => "cover"
                    ),
                    "body" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "text" => "4263",
                                "weight" => "bold",
                                "size" => "xl"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "margin" => "lg",
                                "spacing" => "sm",
                                "contents" => array(
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "教授",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "蕭宏章",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "課程",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "作業系統",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "baseline",
                                        "spacing" => "sm",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "Time",
                                                "color" => "#aaaaaa",
                                                "size" => "sm",
                                                "flex" => 1
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "星期一13:00 - 16:00",
                                                "wrap" => true,
                                                "color" => "#666666",
                                                "size" => "sm",
                                                "flex" => 5
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    ),
                    "footer" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "spacing" => "sm",
                        "contents" => array(
                            array(
                                "type" => "button",
                                "style" => "link",
                                "height" => "sm",
                                "action" => array(
                                    "type" => "uri",
                                    "label" => "WEBSITE",
                                    "uri" => "https://app.pers.ncku.edu.tw/ncov/index.php?c=fp&bid=B029&rid=B02902006&floor=2F"
                                )
                            ),
                            array(
                                "type" => "spacer",
                                "size" => "sm"
                            )
                        ),
                        "flex" => 0
                    )
                )
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','qrcode');
    $sth->execute();
}
elseif (strtolower($message['text']) == "goback") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => '您確定要離開嗎?確定的話請輸入"yes"' //回復訊息
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','check');
    $sth->execute();
}