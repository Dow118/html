<?php

session_start();

echo "<h1>관리자 페이지로 접속합니다</h1>";
  
if(!isset($_SESSION['admin'])){

  echo "<p>비밀번호를 입력해주세요</p>";
          
  echo "<form action='./login_action.php' method='post'>";
  echo "<label> password : </label> <input type='text' name='isPassword'>";
  echo "<input type='submit' value='입력받기'> </b></form>";
}       
else{
  echo "<button type='button' onclick=\"location.href='/menu.html'\" id='button_back'> 메인 </button>";
}

?>
