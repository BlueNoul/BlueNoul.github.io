<?php


$id = $_POST['id'];
$password = $_POST['pw'];

$conn = mysqli_connect('localhost', 'root', '1234', 'user');
mysqli_set_charset($conn, 'utf8');  //인코딩 utf8로 설정

echo "<h1>t1<br></h1>";

// DB 정보 가져오기 
$sql = "SELECT * FROM user where id ='$id' && password = '$password';";
$result = mysqli_query($conn, $sql);
echo "<h1>t2<br></h1>";


$list = mysqli_num_rows($result);

echo "<h1>t3<br></h1>";
$arr = mysqli_fetch_array($result);
echo "<h1>t4<br></h1>";

echo "<br><br>";
if($list) { //쿼리로 받아온 리스트에 요청한 사용자 정보가 있다면 로그인
    session_start();
    echo "<h1>t5<br></h1>";
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