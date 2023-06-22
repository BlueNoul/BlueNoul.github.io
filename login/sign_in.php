<?php
//---------------------------로그인 php----------------------------------
session_start();
$id = $_POST['id'];
$password = $_POST['pw'];


$conn = mysqli_connect('localhost', 'root', '1234', 'user');
mysqli_set_charset($conn, 'utf8');  //인코딩 utf8로 설정



// DB 정보 가져오기 
$sql_id = "SELECT * FROM user where id ='$id' ;";//user 테이블의 아이디에서 해당 아이디가 존재한다면
$sql_pwd ="SELECT * FROM user where password ='$password' ;";

$id_num= mysqli_num_rows(mysqli_query($conn,$sql_id));
$pw_num= mysqli_num_rows(mysqli_query($conn,$sql_pwd));



if(!$id_num) { //아이디가 존재하지 않는다면?
 
    
    $json = json_encode(array('resultID' => 'false', 'resultPW' => 'false'));
    echo($json);
}
else if(($id_num)&&(!$pw_num)){
    //아이디는 존재하는데 비밀번호가 맞지 않다면
    
    $json = json_encode(array('resultID' => 'true', 'resultPW' => 'false'));
    echo($json);
}
else if(($id_num)&&($pw_num)){
    //로그인 성공
    
    $json = json_encode(array('resultID' => 'true', 'resultPW' => 'true', 'id'=> $id));
    echo($json);

    //세션에 아이디와 비밀번호를 저장
    $_SESSION['id']=$id;
    $_SESSION['pw']=$password;
}


?>