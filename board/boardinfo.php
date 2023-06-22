<?php
session_start();
if(isset($_SESSION['id'])){
    echo "<script>location.href='./board.html'</script>";
     exit;
}
?>
<html>

  <head>
    <title>BlueNoul - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- css 파일 -->
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="./board.css">
    
    <!-- 스크립트 파일 -->
    <script src="../jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- 외부 아이콘 -->
    
     
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
      <a id="nav2" href="./boardinfo.php">게시판</a>
      <a id="nav3" href="../login/login.php">로그인</a>
      
    </nav>  
  </div>  
  
</header>  


<!-- -------------------------------------------------------------------------------- -->
<!-- 메인 화면 -->

<div class="bg" id="blur_bg">
    
    게시판을 이용하려면 로그인하세요
</div> 


 <footer id="footer">
    <nav>
        <button id="btn_create">글쓰기 </button>
        <button id="btn_edit">편집</button>
        <button id="btn_delete">삭제</button>
        
      </nav>
 </footer>
</body>
</html>