
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
            let id = $('#login_id').val();
            let passwd =$('#login_passwd').val();
            
            let txt =$('#message');
            $('#sign_section').hide();

            //경고창 흔들리는 효과
            function bounce(){
              txt.animate({opacity:1}, 700).delay(1000);
              
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
                if((sign_id.val() =="")||(sign_pwd=="")||(sign_pwd2=="")){
                  bounce()
                  txt.text("미입력 항목 존재");
                }
                // 비밀번호가 일치하지 않습니다.
                else if(sign_pwd.val() != sign_pwd2.val()){
                  bounce()
                  txt.text("비밀번호가 일치하지 않습니다");
                  
                }
                else{
                  // 존재하는 아이디입니다.
                  <?php

                  $id =$_POST['id'];
                  $pwd =$_POST['pw'];
                  if(!is_null($id)){
                    //sql 연결
                    $connect = mysqli_connect('localhost', 'root', 'byby1004', 'user');
                    if (!$connect) {
                      // die() 함수는 인수로 전달받은 메시지를 출력하고, 현재 실행 중인 PHP 스크립트를 종료시키는 함수입니다.
                      die("서버와의 연결 실패! : ".mysqli_connect_error());
                   }
                    //id 찾기
                    $sql = "SELECT * FROM user WHERE id = '$id';";
                    //결과 저장
                    $result = mysqli_query( $connect, $sql);

                    while ( $jb_row = mysqli_fetch_array( $result)) {
                      $id_e = $jb_row['id'];
                    }
                    //중복일때
                    if ( $id == $id_e ) {
                      echo "bounce();";
                      echo "txt.text("이미 존재하는 아이디입니다.");";
                    } 
                   
                    else {
                      //해시매핑 비번
                      $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
                      $add_user = "INSERT INTO user ( id, password ,created ) VALUES ( '$id', '$encrypted_password','NOW()' );";
                      mysqli_query($connect, $add_user);
                      echo "bounce();";
                      echo "txt.css('color','green');";
                      echo "txt.text("가입 성공").delay(400);";
                      echo "$('#sign_section').submit();";
                      }
                        }
                  
                  ?>
                    
                }
                  })
  
            }
              $('#login_btn').on('click',function(){
                mod = "login";
              
                console.log(mod);
                location.reload();
              });

            
            }
            )
            if(mod == "login"){
              $('#login_btn').on('click',function(){
                // 로그인 아이디랑 비밀번호 데이터와 안맞을시 경고
                  //아이디가 맞지 않습니다.
                  //비밀번호가 맞지 않습니다.
                  $('#login_section').submit();
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
        <a href="../index.php">BlueNoul</a>
      </div>  
    
    <div class="container">
    <nav class="nav_top">
      
      <a id="nav1" href="../portfolio.php">포트폴리오</a>
      <a id="nav2" href="../board.php">게시판</a>
      <a id="nav3" href="./login.php">로그인</a>
      
    </nav>  
  </div>  
  
</header>  


<!-- -------------------------------------------------------------------------------- -->
<!-- 메인 화면 -->
<div class="in_body"id="login_page" >
  <section id="wrap">
    
    <form id="login_section" action="login.php" method="POST">
        <input type="text" name="id"class="input_login"id="login_id" placeholder="ID ">
        <input type="password"name="pw" class="input_login"id="login_passwd" placeholder="Password">
    </form>
    <form id="sign_section" action="login.php" method="POST">
      
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
      <a>유튜브 </a>
      <a>백준</a>
      <a>블로그</a>
      <a>깃허브</a>
      <a>Email</a>
    </nav>
    </div>
  </footer>
  
</body>
</html>