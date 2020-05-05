<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST'); 
header('Content-Type: application/json');

echo '[{"id":1,"itemFileName":"default.png","itemCreationDate":0,"userId":0,"value":"Natural Laws","label":"Natural Laws","itemDesc":"good book","itemPrice":28.42,"itemId":1,"itemSold":0,"itemCategory":"science"},{"id":15,"itemFileName":"default.png","itemIsbn":"abc","itemCreationDate":1403327203,"userId":5,"value":"Natural Laws1","label":"Natural Laws1","itemPrice":25,"itemId":15,"itemSold":0,"itemCategory":"test"},{"id":19,"itemFileName":"1404001539.png","itemIsbn":"abc","itemCreationDate":1404001539,"userId":5,"value":"Natural Laws","label":"Natural Laws","itemDesc":"book about political science","itemPrice":25.23,"itemId":19,"itemSold":0,"itemCategory":"Political Science"}]';

?>