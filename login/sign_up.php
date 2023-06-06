<?php
//-------------------회원가입php-----------------------------------------

$id = $_POST['id'];
$password = $_POST['pw'];

$conn = mysqli_connect('localhost', 'root', '1234', 'user');
mysqli_set_charset($conn, 'utf8');  //인코딩 utf8로 설정

// DB 정보 가져오기 
$sql_id = "SELECT * FROM user where id ='$id' ;";//user 테이블의 아이디에서 해당 아이디가 존재한다면
$id_num= mysqli_num_rows(mysqli_query($conn,$sql_id));// 아이디수

echo("<script>alert("1")</script>");


if($id_num) { //쿼리 실행해여 아이디가 있다면
    
    
    echo(json_encode(array('result' => "false")));
}
else{// 아이디가 없다면 회원가입을 진행함
    //아이디 비번 레코드에 추가

    mysqli_query($conn,"insert into user (id,pw,created) values('"$id"','"$password"','NOW()');");

    //
    echo(json_encode(array('result' => "true", 'id'=>$id)));
    
    session_start();//세션에 아이디와 비밀번호를 저장
    $_SESSION['id']=$id;
    $_SESSION['pw']=$password;
}
?>
