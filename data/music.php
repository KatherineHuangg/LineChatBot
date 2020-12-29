<?php
if (strtolower($message['text']) == "英") {
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
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','music');
    $sth->execute();
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
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','music');
    $sth->execute();
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
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','music');
    $sth->execute();
}

elseif (strtolower($message['text']) == "日") {
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
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','music');
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