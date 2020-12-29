<?php

if (strtolower($message['text']) == "start") {
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','start');
    $sth->execute();
}
