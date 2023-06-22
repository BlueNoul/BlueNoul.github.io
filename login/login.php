<?php
 
 if(!mysqli_connect('localhost', 'root', '1234', 'user')){
     echo "<script>alert('데이터베이스 오류');</script>";
 }
 if(!isset($_SESSION['id'])){
     echo "<script>location.href='./login.html'</script>";
     exit;
    }
    $user_id = $_SESSION['id'];
    ?>
<html>
  <head>
    <title>BlueNoul - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    <!-- css 파일 -->
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="./login.css">
    
    <!-- 스크립트 파일 -->
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/7ca303bf26.js" crossorigin="anonymous"></script>
    <!-- 외부 아이콘 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <script>
          $(document).ready(function(){
           
            $('#username').html("<?php echo $user_id; ?>"+"님 <br>환영합니다");
             
            $('#logout').on('click',function(){
                window.location = "./login.html";
                <?php unset($_SESSION['id']); ?>
            })
            }
            )
            

        
      
      
  
    </script>
  
  </head>  
  <!-- body------------------------------------------------------------------------- -->
  <body class="body">
    <!-- Navigation Bar -->
    
    <header class="header">  
      <div class="home">
        <a href="../index.html">BlueNoul</a>
      </div>  
    
    <div class="container">
    <nav class="nav_top">
      
      <a id="nav1" href="../portfolio.html">포트폴리오</a>
      <a id="nav2" href="../board/board.html">게시판</a>
      <a id="nav3" href="./login.php">로그인</a>
      
    </nav>  
  </div>  
  
</header>  


<!-- -------------------------------------------------------------------------------- -->
<!-- 메인 화면 -->
<div class="in_body"id="login_page" >
  
    <div id="logined">
      <div id="username"></div>
      
      <div id="logout">로그아웃</div>
    </div>
  
  </div>
  <!-- 푸터 -->
  <footer class ="footer">
    <div class="container">
    <nav>
      
      <a href="https://www.acmicpc.net/user/bb7788">Beakjoon</a>
      <a>블로그</a>
      <a>깃허브</a>
      <a>Email</a>
    </nav>
    </div>
  </footer>
  
</body>
</html>