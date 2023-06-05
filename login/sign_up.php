<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'user');

echo $hashedPassword;
$sql = "
    INSERT INTO user
    (id, password, created)
    VALUES('{$_POST['id']}', '{$_POST['pw']}', NOW()
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result) {
    ?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "login.html";
    </script>
    <?php
} else {
    
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);

}
?>
