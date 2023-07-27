<?php
// 세션을 시작하는 함수, 세션을 저장하거나 저장된 세션을 사용할 때는 먼저 세션을 시작해야 한다.
session_start();
// 세션 변수 검사
if (isset($_SESSION["userid"])) $user_id = $_SESSION["userid"];
else $user_id = "";

if (isset($_SESSION["userlevel"])) $user_level = $_SESSION["userlevel"];
else $user_level = "";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/common.css" />
</head>

<body>
  <div id="top">
    <h3>
      <a href="index.php">동성로랑 sns연동 회원가입 프로젝트</a>
    </h3>
    <ul id="top_menu">
      <!-- 신기한 php 문법. echo로도 가능하다. -->
      <?php
      // 로그인 상태가 아니라면 회원가입, 로그인 메뉴 출력
      if (!$user_id) {
      ?>
        <li><a href="member_form.php">회원가입</a></li>
        <li>|</li>
        <li><a href="login_form.php">로그인</a></li>
      <?php
        // 로그인 상태라면 회원정보, 로그아웃 메뉴 출력
      } else {
        $logged = $user_id . "(" . $user_level . ")";
      ?>
        <li><?php $logged ?></li>
        <li>|</li>
        <li><a href="logout.php">로그아웃</a></li>
      <?php
      }
      ?>
      <?php
      if ($user_level == 1) {
      ?>
        <li>|</li>
        <li><a href="admin.php">관리자 모드</a></li>
      <?php
      }
      ?>
    </ul>
  </div>
  <div id="menu_bar">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="message_form.php">쪽지 만들기 13장</a></li>
      <li><a href="board_form.php">게시판 만들기 14장</a></li>
      <li><a href="index.php">사이트 완성하기 15장</a></li>
    </ul>
  </div>
</body>

</html>