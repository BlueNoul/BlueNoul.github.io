<?php


$id = $_POST['id'];
$password = $_POST['pw'];

echo "<h1>sfesf</h1>";
$conn = mysqli_connect('localhost', 'root', '1234', 'user');
ysqli_set_charset($conn, 'utf8');  //인코딩 utf8로 설정


// DB 정보 가져오기 
$sql = "SELECT * FROM user where id ='$id' && password = '$password';";
$result = mysqli_query($conn, $sql);


$list = mysqli_num_rows($result);

$arr = mysqli_fetch_array($result);

echo "<br><br>";
if($list) { //쿼리로 받아온 리스트에 요청한 사용자 정보가 있다면 로그인
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['password'] = $password;
    
    echo "<script>
        alert('로그인에 성공하였습니다.');
        location.replace('login.php');
        </script>";
}
else {
    echo "<script>
        alert('로그인 실패');
        location.replace('login.php');
        </script>";
}
?>