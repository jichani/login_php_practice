<?php
// $_POST[]를 이용해서 가져온다.
// $_GET[]을 사용하면 get 방식으로 가져올 수 있다.
$user_id = $_POST["id"];
$user_pass = $_POST["pass1"];

// echo $user_id;
// echo $user_pass;

// 데이터베이스에 접속하는 코드
// mysqli_connect("호스트명", "계정명", "비밀번호", "데이터베이스명");
$con = mysqli_connect("localhost", "project1_user", "12345", "project1");

// sql 쿼리 전달
// 입력 받은 $user_id와 데이터 베이스의 id 컬럼의 값이 일치하는 데이터가 있는 지 검색
$sql = "select * from members where id='$user_id'";

// mysqli_query()로 데이터베이스에 접속하여 sql 명령어 전달
$result = mysqli_query($con, $sql); //$sql 에 저장된 명령어 실행

// mysqli_num_rows() 반환되는 행의 갯수를 반환받아 $num_match 값으로 저장
$num_match = mysqli_num_rows($result);

if (!$num_match) {
  echo ("
    <script>
      window.alert('등록되지 않은 아이디입니다!')
      history.go(-1)
    </script>  
  ");
} else {
  echo ("
    <script>
      window.alert('등록된 아이디입니다!')
      history.go(-1)
    </script>  
  ");
}

// 데이터베이스 접속 종료
mysqli_close($con);

// 데이터베이스 종료 후 index.php 열기
// echo "
// <script>
// location.href = 'index.php';
// </script>
// ";
