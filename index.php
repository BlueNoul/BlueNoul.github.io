
<html>

  <head>
    <title>BlueNoul - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- 외부 리소스 저장 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- css 파일 -->
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- 스크립트 파일 -->
    <script src="/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- 외부 아이콘 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    
    <script>
      //======메인 페이지 스크립트===================================================
      // 메인 페이지 스크롤시 하단 페이지 이동 요청  애니메이션
      $(document).ready(function(){
        $('#sec_sub').hide();
        
        $('#main_mask').hover(function(){
          
          $(function () {
            var $element = $('#click_tutorial');
            var perse= setInterval(function() {
              $element.show();
              $element.fadeIn(1000, function () {
                $element.fadeOut(1500, function () {
                  $element.fadeIn(1500)
                });
              });
              if ($('#sec_sub').hide) clearInterval(perse);
            }, 5000);
          });
          
        },function(){
          $('#click_tutorial').hide();
        })
        // 메인 페이지 2차 콘텐츠
        $(document).ready(function(){
          const content = "세상에 없던 프로그램을 만드는것. 제 머리에만 존재하는 상상들을 코드로 풀어나가는것."+
          "\n저에게 코딩은 예술입니다."+
          "\n저의 상상을 나누고 전시하기 위해 항상 기획하고 몰두합니다."+
          "\n세상을 즐겁게 해줄 코드들을 만들고 싶습니다.";
          const text = document.querySelector("#main_2");
          let i = 0;
          function typing(){
            if(i<content.length){
              let txt = content[i++]; 
              text.innerHTML += txt=== "\n" ? "<br/>": txt;
              
          }}setInterval(typing,40);
        });
        
        //-----------서브 콘텐츠 스크립트 -------------------------------------
        
        
        
        // 홈 내용 클릭시 다음 서브 콘텐츠 쇼잉
        $('.in_body').one('click touchstart wheel', function(){ //해당 이벤트는 1회성이므로 one 사용
          //var scrH=($(this).scrollTop() / ($(this).prop("scrollHeight") - $(this).prop("clientHeight"))*100);         /* 3 */
          //console.log(scrH);
          $('#sec_main').delay(100).fadeOut(100);
          $('#sec_sub').delay(100).fadeIn(1000);
          console.log("hello");
          
        })
      });

      
      // 스크롤 사용해서 서브 콘텐츠 뷰잉
      $(document).ready(function() {
        
        let sec =document. querySelectorAll('.section');
        
        const option = {
          root:document.querySelector('#sub_mask'),
          //threshold:[new Array(101)].map((_, i) => i/100),
          threshold:[0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1],
        };
        
        const callback = (entries, observer) => {
          entries.forEach(entry => {
            
            var nowid = "sec_1";
            
            entry.target.style.opacity = entry.intersectionRatio;
            if(entry.intersectionRatio>0.3 && (entry.target.id!=nowid)){
              nowid = entry.target.id;
              console.log(entry.target.id);
              console.log(entry.target.getHeight);
            }
          });
        };
        
        const observer = new IntersectionObserver(callback, option);
        sec.forEach(sec => observer.observe(sec));
      });
      
      
    </script>
  
  </head>  
  <!-- body------------------------------------------------------------------------- -->
  <body class="body">
    <!-- Navigation Bar -->
    
    <header class="header">  
      <div class="home">
        <a href="index.php">BlueNoul</a>
      </div>  
    
    <div class="container">
    <nav class="nav_top">
      
      <a id="nav1" href="./portfolio.php">포트폴리오</a>
      <a id="nav2" href="./board.php">게시판</a>
      <a id="nav3" href="./login/login.php">로그인</a>
      
    </nav>  
  </div>  
  
</header>  


<!-- -------------------------------------------------------------------------------- -->
<!-- 메인 화면 -->

<div class="in_body">
  <section class="main_section" id="sec_main">
    <div class="mask"id="main_mask">
    <div class="main_content"id="main_1">
      
      <h1 class="cont1"> 코드라는 붓으로 도화지를 채워나가는 개발자 염휘건입니다</h1>
      
    </div>
    
    <div class="main_content"id="main_2">
      
      <!-- <p>세상에 없던 프로그램을 만드는것. 제 머리에만 존재하는 상상들을 코드로 풀어나가는것.
      <br>저에게 코딩은 예술입니다.
      <br>저의 상상을 나누고 전시하기 위해 항상 기획하고 몰두합니다.
      <br>세상을 즐겁게 해줄 코드들을 만들고 싶습니다.</p> -->
      
    </div>
  </div>
    <div id="click_tutorial">
      Click or Scroll anywhere
    </div>
    <script>
    </script>
  </section>
  
  
  

  <!-- ----------------------------------------------------------------------------------- -->
  <!-- 슬라이드 1 -->
  <section class="main_section" id="sec_sub">
  <!--  -->
  <div class="mask" id="sub_mask">
    <!-- About me-->
    <section class ="section" id="sec_1" >
      <div class="about_me">
        
        <img class="element_1" id="my_img" src="http://placehold.it/200">
        <div class="element_1" id="about_box">
          <h1>염휘건</h1>
          <p> 나이 : 25 <br>
            학력 : 전주대학교 컴퓨터공학과 <br>
            경력 :         <br>
            ...
          </p>
          
        </div>
      </div>
      <div class="element_1"id="mylicense">
        <h4>자격증</h4>
        <ul>
          <li>리눅스마스터 2급</li>
          <li>cos pro</li>
          <li>GTQ 1급</li>
          <li>adsp</li>
        </ul>
      
    </div>
    </section>
    <hr>
    <!-- 슬라이드 2 -->
    <!-- 사용 가능한 언어 -->
    <section class ="section" id="sec_2">
      <div></div>
      <h1>사용 언어</h1>
      <div class="lang">
        <!-- 네모 아이콘 형태로 언어 아이콘 나열, 호버시 관련 사용 경험 크롤링 (깃허브,백준,vscode)-->
        <div> c</div>
        <div>c++</div>
        <div>java</div>
        <div>python</div>
        <div>javascript</div>
      </div>
    </section>

    
    <hr>
    
    <!-- 슬라이드 3 -->
    <!-- 해왔던 프로젝트들을 간단하게 보여줌 -->
    <section class ="section" id="sec_3">
      <div class="proj_summery">
        <div class="service-item">
          <i class="fas fa-code"></i>
          <h3>프로젝트 관련 경험 소개</h3>
          <p>전체 프로젝트(프로젝트 호버시 포토폴리오 해당 페이지롤 이동)</p>
          <p>프로젝트1(슬라이드 이미지와 내용만 간단히)</p>
          <p>프로젝트2</p>
        </div>
        
      </div>
    </section>
    <hr>
    <!-- Contact -->
    <section class ="section" id="sec_4">
      
      <h2 class="section-title">Contact</h2>
      
      <div class="contact__container bd-grid">
        <form action="" class="contact__form">
          <div class="contact__inputs">
            <input type="text" placeholder="Name" class="contact__input">
            <input type="mail" placeholder="Email" class="contact__input">
          </div>
          
          <textarea name="" id="" cols="0" rows="10" placeholder="Write a message" class="contact__input"></textarea>

          <input type="submit" value="Send Message" class="contact__button">
        </form>
      </div>
    </section>
  </div>

  
</section>
  
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