<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 폼</title>
  <link rel="stylesheet" href="./css/common.css" />
</head>

<body>
  <form name="login_form" method="post" action="./login.php">
    <h2>로그인</h2>
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
        <li><input type="submit" /></li>
        <li><input type="reset" /></li>
      </ul>
    </div>
  </form>
</body>

</html>