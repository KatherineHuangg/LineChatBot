<?php

global $client, $message, $event;
// if (strtolower($message['text']) == "start" || $message['text'] == "文字" || $message['text'] == "end") {
//     $client->replyMessage(array(
//         'replyToken' => $event['replyToken'],
//         'messages' => array(
//             array(
//                 'type' => 'text', //訊息類型 (文字)
//                 'text' => '想要不掃QRCode，就可以直接進到學校的防疫頁面點名嗎?輸入『qrcode』就可以囉!  想要上課時聽音樂嗎?，那麼就輸入『音樂』吧，我就會推薦給您我最近愛聽的歌呦!' //回復訊息
//             )
//         )
//     ));
// }

if (strtolower($message['text']) == "end" || $message['text'] == "文字") {
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
                        "url" => "https://i.imgur.com/BYfFVnn.png",
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
                                "text" => "目錄",
                                "weight" => "bold",
                                "size" => "xl"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "baseline",
                                "margin" => "md",
                                "contents" => array()
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
                                                "text" => "歡迎回來!請問您這次想要輸入『qrcode』還是『音樂』呢?",
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
                                "type" => "text",
                                "text" => "qrcode",
                                "align" => "center",
                                "style" => "normal",
                                "weight" => "bold",
                                "decoration" => "none",
                                "position" => "relative",
                                "gravity" => "bottom"
                            ),
                            array(
                                "type" => "text",
                                "text" => "音樂",
                                "align" => "center",
                                "gravity" => "bottom",
                                "weight" => "bold"
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
}
elseif (strtolower($message['text']) == "qrcode") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => '請問您需要哪間教室的QRcode呢?' //回復訊息
            )
        )
    ));
}
elseif (strtolower($message['text']) == "65304") {
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
}
elseif (strtolower($message['text']) == "英") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "carousel",
                    "contents" => array(
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/JNzGshN.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "Run Back to You",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "Hoang - feat. Alisa",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/h6BSKFAZ37E"
                                        )
                                    ),
                                    array(
                                        "type" => "spacer",
                                        "size" => "sm"
                                    )
                                ),
                                "flex" => 0
                            )
                        ),
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/DW3vL7f.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "The ocean",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "Mike Perry - feat. Shy Martin",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/mGQFZxIuURE"
                                        )
                                    ),
                                    array(
                                        "type" => "spacer",
                                        "size" => "sm"
                                    )
                                ),
                                "flex" => 0
                            )
                        ),
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/AX4zZoG.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "Way Back Home",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "SHAUN - feat. Conor Maynard",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/1kehqCLudyg"
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
            )
            
        )
    ));
}
elseif (strtolower($message['text']) == "韓") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "carousel",
                    "contents" => array(
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/wKuUJHO.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "11:11",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "TAEYEON",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/ulr0muQKjk0"
                                        )
                                    ),
                                    array(
                                        "type" => "spacer",
                                        "size" => "sm"
                                    )
                                ),
                                "flex" => 0
                            )
                        ),
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/LKcBmWz.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "Lovesick Girls",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "BLACKPINK",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/dyRsYk0LyA8"
                                        )
                                    ),
                                    array(
                                        "type" => "spacer",
                                        "size" => "sm"
                                    )
                                ),
                                "flex" => 0
                            )
                        ),
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/VLqpP1o.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "Why",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "TAEYEON",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/WkdtmT8A2iY"
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
            )
            
        )
    ));
}
elseif (strtolower($message['text']) == "中") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "carousel",
                    "contents" => array(
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/v4wE6Vb.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "句號",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "鄧紫棋",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/7XlqcS6B7WA"
                                        )
                                    ),
                                    array(
                                        "type" => "spacer",
                                        "size" => "sm"
                                    )
                                ),
                                "flex" => 0
                            )
                        ),
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/oFgxjLa.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "煙幕",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "陳忻玥 Vicky Chen",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/P8uJ4gFjJGE"
                                        )
                                    ),
                                    array(
                                        "type" => "spacer",
                                        "size" => "sm"
                                    )
                                ),
                                "flex" => 0
                            )
                        ),
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i.imgur.com/ED7lN2b.png",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "7%",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "XMASwu",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
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
                                            "uri" => "https://youtu.be/DTyJMlzp_yo"
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
            )
            
        )
    ));
}
// elseif (strtolower($message['text']) == "start" || strtolower($message['text']) == "介紹") {
//     $client->replyMessage(array(
//         'replyToken' => $event['replyToken'],
//         'messages' => array(
//             array(
//                 "type" => "flex",
//                 "altText" => "helo",
//                 "contents" => #code
//             )
            
//         )
//     ));
// }
