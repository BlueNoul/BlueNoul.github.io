<?php
//-------------------회원가입php-----------------------------------------

$id = $_POST['id'];
$password = $_POST['pw'];

$conn = mysqli_connect('localhost', 'root', '1234', 'user');
mysqli_set_charset($conn, 'utf8');  //인코딩 utf8로 설정

// DB 정보 가져오기 
$sql_id = "SELECT * FROM user where id ='$id' ;";//user 테이블의 아이디에서 해당 아이디가 존재한다면

if(mysqli_query($conn, $sql_id)) { //쿼리 실행해여 아이디가 있다면
    
    echo $signUp['result'] = false;
}
else{// 아이디가 없다면 회원가입을 진행함
    //아이디 비번 데이터에 입력

    //
    echo $signUp['result'] = true;
    echo $signUp['id'] = $id;
    session_start();//세션에 아이디와 비밀번호를 저장
    $_SESSION['id']=$id;
    $_SESSION['pw']=$password;
}
?>
