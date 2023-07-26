<?php
// $_POST[]를 이용해서 가져온다.
// $_GET[]을 사용하면 get 방식으로 가져올 수 있다.
$user_id = $_POST["id"];
$user_pass = $_POST["pass1"];
$user_email = $_POST["email"];

echo $user_id;
echo $user_pass;
echo $user_email;
