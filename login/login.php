
<html>

  <head>
    <title>BlueNoul - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    <!-- css 파일 -->
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="./login.css">
    
    <!-- 스크립트 파일 -->
    <script src="/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/7ca303bf26.js" crossorigin="anonymous"></script>
    <!-- 외부 아이콘 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php
        $id =$_POST['id'];
        $pwd =$_POST['pw'];
    ?>
    <script>
          $(document).ready(function(){
            let mod = "login";
            let id = $('#login_id');
            let passwd =$('#login_passwd');
            let txt =$('#message');

            $('#sign_section').hide();

            //해당 입력창 빨간 테두리
            function redLine(name){
                name = $(name);
              name.css("border-style", "solid");
              name.css('border-color', 'red');
              
              
              
            }
            //경고창 흔들리는 효과
            function bounce(){
              txt.animate({opacity:1}, 700).delay(1000);
              txt.effect("shake");
              txt.animate({opacity:0},1000);
            }
            //가입 버튼 눌렀을때 가입창 띄우기
            $('#sign_btn').one('click',function(){
              mod = "sign";
              $('#login_section').hide();
              $('#sign_section').show();
              console.log(mod);
              
              if(mod == "sign"){
                let sign_id =$('#sign_id');
                let sign_pwd =$('#sign_passwd');
                let sign_pwd2 = $('#sign_passwd2');
               

                $('#sign_btn').on('click',function(){
                  console.log("가입 시작");
                  console.log("id: "+sign_id.val());
                  console.log(sign_pwd.val());
                  console.log(sign_pwd2.val());
                  
                //미일력 항목 찾기
                if((sign_id.val() =="")||(sign_pwd.val()=="")||(sign_pwd2.val()=="")){
                  bounce();
                  txt.text("미입력 항목 존재");
                }
                // 비밀번호가 일치하지 않습니다.
                else if(sign_pwd.val() != sign_pwd2.val()){
                  bounce();
                  txt.text("비밀번호가 일치하지 않습니다");
                  
                }
                else{
                  //회원가입 유효성 검사
                  $('#sign_section').submit();
                  // 존재하는 아이디입니다.


                  // 가입 성공
                      bounce();
                      txt.css('color','green');
                      txt.text("가입 성공").delay(400);
                      
                }
                  })
  
            }
              $('#login_btn').on('click',function(){
                mod = "login";
                //처음 화면으로 돌아가기
                console.log(mod);
                location.reload();
              });

            
            }
            )
            if(mod == "login"){
              let login_id = $('#login_id');
              let login_pw = $('#login_pw');
              $('#login_btn').on('click',function(){
                //로그인 검사
                if((sign_id.val() =="")||(sign_pwd.val()=="")||(sign_pwd2.val()=="")){
                  //미입력 항목 조사
                  bounce();
                  txt.text("미입력 항목 존재");
                }
                $('#login_section').submit();
                // 로그인 아이디랑 비밀번호 데이터와 안맞을시 경고
                  //존재하지 않는 아이디입니다.

                  //비밀번호가 맞지 않습니다.

                  //로그인 성공
                  })
                }
            })


        
      
      
  
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
      <a id="nav2" href="../board.html">게시판</a>
      <a id="nav3" href="./login.php">로그인</a>
      
    </nav>  
  </div>  
  
</header>  


<!-- -------------------------------------------------------------------------------- -->
<!-- 메인 화면 -->
<div class="in_body"id="login_page" >
  <section id="wrap">
    
    <form id="login_section" action="sign_in.php" method="POST">
        <input type="text" name="id"class="input_login"id="login_id" placeholder="ID ">
        <input type="password"name="pw" class="input_login"id="login_passwd" placeholder="Password">
    </form>
    <form id="sign_section" action="sign_up.php" method="POST">
      
      <input type="text" name="id"class="input_sign"id="sign_id" placeholder="ID">
      <input type="password" name="pw"class="input_sign"id="sign_passwd" placeholder="Password">
      <input type="password" class="input_sign"id="sign_passwd2" placeholder="Password 재확인">
    </form>
  </section>

  <div id="message"></div>
  
  <div id="button_box">
    <div class="btns"id="login_btn"><i class="fas fa-lock"></i>로그인</div>
    <div class="btns"id="sign_btn"><i class="fa-solid fa-user"></i>회원가입</div>
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