<?php

if (strtolower($message['text']) == "yes" || $message['text'] == "文字") {
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
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','start');
    $sth->execute();
}