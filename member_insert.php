<?php
// $_POST[]를 이용해서 가져온다.
// $_GET[]을 사용하면 get 방식으로 가져올 수 있다.
$user_id = $_POST["id"];
$user_pass = $_POST["pass1"];
$user_email = $_POST["email"];

echo $user_id;
echo $user_pass;
echo $user_email;

// 데이터베이스에 접속하는 코드
include "database_con.php";

// sql 쿼리 전달
$sql = "insert into members(id, pass, level, email) ";
$sql .= "values('$user_id', '$user_pass', 9, '$user_email')";

// mysqli_query()로 데이터베이스에 접속하여 sql 명령어 전달
mysqli_query($con, $sql); //$sql 에 저장된 명령어 실행
// 데이터베이스 접속 종료
mysqli_close($con);

// 데이터베이스 종료 후 index.php 열기
echo "
<script>
location.href = 'index.php';
</script>
";
