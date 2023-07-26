<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입 폼</title>
  <link rel="stylesheet" href="./css/common.css" />
</head>

<body>
  <form name="member_forem" method="post" action="./member_insert.php">
    <h2>회원가입</h2>
    <div>
      <ul>
        <li>아이디</li>
        <li><input type="text" name="id" /></li>
      </ul>
    </div>
    <div>
      <ul>
        <li>비밀번호</li>
        <li><input type="password" name="pass1" /></li>
      </ul>
    </div>
    <div>
      <ul>
        <li>비밀번호 확인</li>
        <li><input type="password" name="pass2" /></li>
      </ul>
    </div>
    <div>
      <ul>
        <li>이메일</li>
        <li><input type="email" name="email" /></li>
      </ul>
    </div>
    <div>
      <ul>
        <li><input type="submit" name="pass" /></li>
        <li><input type="reset" name="pass" /></li>
      </ul>
    </div>
  </form>
</body>

</html>