<?php
require_once "db.php"
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font/font-awesome.min.css">
  <title>2025지방</title>
</head>

<body>
  <!-- <div class="loding"></div>
  <div class="loding-background"></div> -->

  <div class="login-modal-background">
    <div class="login-modal">
      <h2>로그인</h2>
      <form action="login.php" method="post">
        <input type="text" name="lgid" id="loginid" placeholder="id" autofocus required>
        <input type="password" name="lgpw" id="loginpw" placeholder="pw" required>

        <button id="loginbtn">로그인</button>
        <a href="#" class="quit">나가기</a>
      </form>
    </div>
  </div>


  <div class="join-modal-background">
    <div class="join-modal">
      <h2>회원가입</h2>
      <form action="join.php" method="post">
        <input type="text" name="joinid" id="joinid" placeholder="id" autofocus required>
        <input type="password" name="joinpw" id="joinpw" placeholder="pw" required>
        <input type="text" name="name" id="joinname" placeholder="name" required>
        <input type="text" name="email" id="joinemail" placeholder="email" required>

        <button type="submit">회원가입</button>
        <a href="#" class="quit">나가기</a>
      </form>
    </div>
  </div>


  <div class="container">
    <header>
      <div class="header-in">
        <div class="header-logo"><a href="index.php"><img src="./img/slideImg/logo.png" alt="header-logo"></a></div>
        <div class="ul1">
          <div class="maindrop"><a href="./sub1.php">소개</a></div>
          <div class="drop"><a href="#">판매상품</a>
            <ul class="drophover">
              <li><a href="./sub2.php">전체상품</a></li>
              <li><a href="./sub3.php">인기상품</a></li>
            </ul>
          </div>
          <div><a href="#">가맹점</a></div>
          <div><a href="./sub4.php">장바구니</a></div>
        </div>
        <div class="php-flex">
          <?php session_start() ?>
          <ul class="ul2">
            <?php if ((isset($_SESSION['ss']) && $_SESSION['ss']) || (isset($_SESSION['ad']) && $_SESSION['ad'])): ?>
              <li>
                <?php if (isset($_SESSION['ss']) && $_SESSION['ss']): ?>
                  <?php echo ($_SESSION['ss']->id) . "님" ?>
                <?php elseif (isset($_SESSION['ad']) && $_SESSION['ad']): ?>
                  <?php echo "관리자님" ?>
                <?php endif; ?>
              </li>
              <li><a href="logout.php">로그아웃</a></li>
            <?php else: ?>
              <li><a href="#" class="loginMo">로그인</a></li>
              <li><a href="#" class="joinMo">회원가입</a></li>
            <?php endif; ?>
            <li><a href="#">장바구니</a></li>
            <?php if (isset($_SESSION['ad']) && $_SESSION['ad']): ?>
              <input type="checkbox" class="adbtn" id="admii" hidden>
              <label for="admii" class="adlabel">관리자</label>
              <ul class="adcheck">
                <li><a href="#">공지사항관리</a></li>
                <li><a href="#">판매상품관리</a></li>
              </ul>
            <?php elseif (isset($_SESSION['ss']) && $_SESSION['ss']): ?>
              <li><a href="#">관리자</a></li>
            <?php else: ?>
              <li><a href="#" id="admin">관리자</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </header>
    <section class="sldie-section">
      <div class="slide">
        <ul>
          <li class="slide1"><img src="./img/slideImg/img1.JPG" alt="slide1" title="img">
            <h2>Better Give & Take</h2><span class="line1"></span>
            <p>옴니채널 플랫폼 GIFTS로
              전 세계 고객에게 선물의 가치를 높입니다.</p>
          </li>
          <li class="slide2"><img src="./img/slideImg/img2.JPG" alt="slide1" title="img">
            <h2>Life Style Platforms</h2><span class="line2"></span>
            <p>고객과 가장 가까운 곳에서
              고객에게 다양한 즐거움을 선물합니다.</p>
          </li>
          <li class="slide3"><img src="./img/slideImg/img3.JPG" alt="slide1" title="img">
            <h2>Online PLAYGROUND</h2><span class="line3"></span>
            <p>업계 최초 당일 배송 서비스인 '오늘드림'으로
              고객 니즈 충족과 고객 경험을 혁신합니다.
            </p>
          </li>
          <li class="slide4"><img src="./img/slideImg/img1.JPG" alt="slide1" title="img">
            <h2>Better Give & Take</h2><span class="line4"></span>
            <p>옴니채널 플랫폼 GIFTS로
              전 세계 고객에게 선물의 가치를 높입니다.</p>
          </li>
        </ul>
      </div>
    </section>
    <section class="product-section">
      <div class="label-all">
        <p class="product-title">product</p>
        <label for="list1" class="product-label">건강식품</label>
        <label for="list2" class="product-label">디지털</label>
        <label for="list3" class="product-label">팬시</label>
        <label for="list4" class="product-label">헤어케어</label>
        <label for="list5" class="product-label">향수</label>
      </div>

      <!-- 건강 카테고리 -->
      <input type="radio" id="list1" name="product-tabs" class="inp1 inputbtn" hidden checked>

      <div class="product-list1 listNone">
        <h1>건강식품</h1>
        <div class="medicine-product1 a proa proall">
          <div class="box">
            <img src="./img/건강식품/4.PNG" alt="cineproduct-img1">
            <h2 class="title">액티브 멀티포맨<br>
              <p class="content">미국판매 1위 내셔널 건강기능식품 브랜드.<br>남성 건강을 생각하는 22가지 주요 비타민&미네날</p>
            </h2>
          </div>
          <ul class="txt">
            <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 30,000원</li>
          </ul>
        </div>

        <div class="medicine-product2 a proa proall">
          <div class="box">
            <img src="./img/건강식품/2.PNG" alt="cineproduct-img2">
            <h2 class="title">센트룸<br>
              <p class="content">생기 넘치는 일상을 위한 센트룸 우먼 더블업. 비타민 B군 8종 함량 2배,<br> 23가지 비타민과 미네랄, 한국인 여성 맞춤 영양 설계</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 27,000원</li>
          </ul>
        </div>
        <div class="medicine-product3 a proa proall">
          <div class="box">
            <img src="./img/건강식품/3.PNG" alt="cineproduct-img3">
            <h2 class="title">닥터브라이언<br>
              <p class="content">달콤한 청포도맛 구미로 맛있게 비타민 C와 D를 충전하세요.<br> 활기찬 하루와 튼튼한 뼈 건강을 맛있게 충전하는 부드러운 젤리 타입</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 2,000원</li>
          </ul>
        </div>
      </div>
      <!-- 디지털 카테고리 -->

      <input type="radio" id="list2" name="product-tabs" class="inp2 inputbtn" hidden>
      <div class="product-list2 listNone">
        <h1>디지털</h1>
        <div class="machine-product1 a prom proall">
          <div class="box">
            <img src="./img/디지털/2.PNG" alt="mproduct-img1">
            <h2 class="title">Bowie D05 무선 블루투스 5.3 헤드셋<br>
              <p class="content">현실같은 3D사운드 스테이지 제공, 70시간의 오디오 재생시간, 2시간으로 완전 충전</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 36,900원</li>
          </ul>
        </div>
        <div class="machine-product2 a prom proall">
          <div class="box">
            <img src="./img/디지털/4.jpg" alt="mproduct-img2">
            <h2 class="title">파이널마우스 스타라이트12 페가수스 미디엄<br>
              <p class="content">최첨단 펌웨어를 갖춘 업계 최고의 노르딕 RF 플랫폼 기반의 무선 기술 채용,<br> 최대 20,000CPI 해상도를 갖춘 e스포츠 센서 채용</p>
            </h2>
          </div>
          <ul class="txt">
            <li>3,000원 (20,000원 이상 무료배송)</li>
            <li>가격: <p class="strike-line">1,254,000</p> 1,128,600원</li>
          </ul>
        </div>
        <div class="machine-product3 a prom proall">
          <div class="box">
            <img src="./img/디지털/5.PNG" alt="mproduct-img3">
            <h2 class="title">보이저5200 블루투스 이어폰<br>
              <p class="content">4개의 마이크 탑재, 6중 바람차단, 강력한 노이즈 캔슬링,<br> 공간의 소음을 최대로 줄여 최적의 업무 환경을 경험할 수 있습니다.</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 146,000</li>
          </ul>
        </div>
      </div>
      <!-- 팬시 카테고리 -->
      <input type="radio" id="list3" name="product-tabs" class="inp3 inputbtn" hidden>
      <div class="product-list3 listNone">
        <h1>팬시</h1>
        <div class="decoration-product1 a prod proall">
          <div class="box">
            <img src="./img/팬시/3.PNG" alt="dproduct-img1">
            <h2 class="title">14K 윙블링 메르시 목걸이(주문제작)<br>
              <p class="content">언제나 변함없고 고급스러운 전체 14K 골드로 제작되어<br> 소장 가치뿐만 아니라 우아한 아름다움을 선사합니다.<br>
                본 상품은 주문 제작으로 배송은 약 7~10일 정도 소요됩니다(주말 및 공휴일 제외).</p>
            </h2>
          </div>
          <ul class="txt">
            <li>3,000원 (20,000원 이상 무료배송)</li>
            <li>가격: 265,000원</li>
          </ul>
        </div>
        <div class="decoration-product2 a prod proall">
          <div class="box">
            <img src="./img/팬시/4.PNG" alt="dproduct-img2">
            <h2 class="title">게이밍 이어폰 VJJB NI<br>
              <p class="content">세계 1위 가성비 유선 이어폰. 듀얼 드라이버 기술로<br> 완벽한 고품질 사운드와 교체가 가능한 분리형 커스텀 케이블</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: <p class="strike-line">38,900원</p>28,900원</li>
          </ul>
        </div>
        <div class="decoration-product3 a prod proall">
          <div class="box">
            <img src="./img/팬시/5.PNG" alt="dproduct-img3">
            <h2 class="title">인스탁스 미니 에보<br>
              <p class="content">당신이 보는 세상을 보여주세요. 가장 혁신적인 프리미엄 클래식 하이브리드 카메라,<br> 묵직한 세련됨이 돋보이는 mini Evo의 클래식 디자인을
                만나보세요.</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 320,000원</li>
          </ul>
        </div>
      </div>
      <!-- 헤어케어 카테고리 -->
      <input type="radio" id="list4" name="product-tabs" class="inp4 inputbtn" hidden>
      <div class="product-list4 listNone">
        <h1>헤어케어</h1>
        <div class="shampoo-product1 a pros proall">
          <div class="box">
            <img src="./img/헤어케어/5.PNG" alt="sproduct-img1">
            <h2 class="title">닥터포헤어 피토프레시 헤어쿨링 스프레이 150ml<br>
              <p class="content">열받아 예민해진 두피를 위한 즉각적인 두피 쿨링 솔루션. 온종일 느껴지는 상쾌함,<br> 피토프레이 쿨링 스프레이</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: <p class="strike-line">16,000원</p>14,400원</li>
          </ul>
        </div>
        <div class="shampoo-product2 a pros proall">
          <div class="box">
            <img src="./img/헤어케어/2.PNG" alt="sproduct-img2">
            <h2 class="title">려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml<br>
              <p class="content">근거있는 여성탈모 전문가 려 루트젠이 만든 촘촘탄탄 밀도탄력을 채우는 3D볼륨 탈모 샴푸.<br> 부드럽고 향 좋은 약산성 비건 샴푸</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 21,900원</li>
          </ul>
        </div>
        <div class="shampoo-product3 a pros proall">
          <div class="box">
            <img src="./img/헤어케어/1.PNG" alt="sproduct-img3">
            <h2 class="title">어노브 딥 데미지 트리트먼트 EX 더블<br>
              <p class="content">부드러움에 집착하다! 어노브 집착 헤어팩! 단백질 3,000% UP으로 완성하는 극손상모 솔루션</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 29,800원</li>
          </ul>
        </div>
      </div>
      <!-- 향수 카테고리 -->
      <input type="radio" id="list5" name="product-tabs" class="inp5 inputbtn" hidden>
      <div class="product-list5 listNone">
        <h1>향수</h1>
        <div class="perfume-product1 a prop proall">
          <div class="box">
            <img src="./img/향수/1.PNG" alt="pproduct-img1">
            <h2 class="title">에스쁘아 솔리드 퍼퓸 4.2g<br>
              <p class="content">새벽 달빛 아래 달큰한 체리가 어지럽게 흩어진 자리,<br> 새하얀 자스민이 코끝을 스치고 자유롭게 남는 풍부한 머스크 향의 고체 향수</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 26,000원</li>
          </ul>
        </div>
        <div class="perfume-product2 a prop proall">
          <div class="box">
            <img src="./img/향수/2.PNG" alt="pproduct-img2">
            <h2 class="title">호텔도슨 향수 오드퍼퓸 75ml<br>
              <p class="content">향긋하고 보드라운 마른 꽃과 나무 향 뒤로 낙엽이 타는 듯한 베티버 향이 퍼지는 스파이시 플로럴 향</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 153,000원</li>
          </ul>
        </div>
        <div class="perfume-product3 a prop proall">
          <div class="box">
            <img src="./img/향수/5.PNG" alt="pproduct-img3">
            <h2 class="title">캘빈클라인 One EDT 50ml<br>
              <p class="content">남녀 모두에게 어울리는 현대적이며, 라이트한 향의 캘빈클라인 CK one 오 드 뚜왈렛.<br> 상쾌하고 신선한 시트러스 계열의 향으로 편안하고 캐주얼한
                향수</p>
            </h2>
          </div>
          <ul class="txt">
            <li>2,500원 (20,000원 이상 무료배송)</li>
            <li>가격: 58,900원</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="notice">
      <p class="notice-title">NOTICE</p>
      <div class="notice-in">
        <ul>
          <li><a href="#" class="flex">
              <p>일반 [공지] 위치기반서비스 이용약관 개정 안내</p>
              <p>2024.05.31</p>
            </a></li>
          <li><a href="#" class="flex">
              <p>현대백화점울산동구점 리뉴얼로 인한 영업 중단 안내</p>
              <p>2024.07.27</p>
            </a></li>
          <li><a href="#" class="flex">
              <p>
                <마이프레셔스 Vol.26 불레따리편>이벤트 당첨자 발표
              </p>
              <p>2024.07.12</p>
            </a></li>
          <li><a href="#" class="flex">
              <p>하월곡점 폐점으로 인한 영업종료 안내</p>
              <p>2024.07.31</p>
            </a></li>
          <li><a href="#" class="flex">
              <p>[공지] 고정형 영상정보처리기기 운영/관리 방침 개정 안내</p>
              <p>2024.06.27</p>
            </a></li>
        </ul>
      </div>
    </section>
    <section class="banner-section">
      <div class="banner-txt">
        <h2 class="banner-main-txt">대한민국 No.1</h2>
        <p><i class="gift-mall-color">GIFTS:Mall </i>과 함께 할 WIN-WIN 파트너를 찾습니다.<br>
          제휴사의 많은 지원을 기다립니다.</p>
      </div>
      <div class="partnership">
        <div class="partner1">
          <div class="img-box">
            <img src="./img/banner/banner1.JPG" alt="banner1" title="ban1">
          </div>
          <div class="txt-box">
            <h3>상품입점/제휴문의</h3>
            <p>#상품입점 #제휴문의</p>
            <p>#상품 #문의</p>
            <div class="background-icon">
              <i class="icon1">#</i>
            </div>
            <a href="#" class="more">+더보기</a>
          </div>
        </div>
        <div class="partner2">
          <div class="img-box">
            <img src="./img/banner/banner2.JPG" alt="banner2" title="ban2">
          </div>
          <div class="txt-box">
            <h3>문의결과조회</h3>
            <p>#문의결과조회</p>
            <p>#문의 #결과</p>
            <div class="backgroun-icon">
              <i class="fa-paper-plane-o icon2"></i>
            </div>
            <a href="#" class="more">+더보기</a>
          </div>
        </div>
        <div class="partner3">
          <div class="img-box">
            <img src="./img/banner/banner3.JPG" alt="banner3" title="ban3">
          </div>
          <div class="txt-box">
            <h3>전자계약시스템</h3>
            <p>전자계약시스템</p>
            <p>#전자 #계약</p>
            <div class="background-icon">
              <i class="fa-desktop icon3"></i>
            </div>
            <a href="#" class="more">+더보기</a>
          </div>
        </div>
        <div class="partner4">
          <div class="img-box">
            <img src="./img/banner/banner4.JPG" alt="banner4" title="ban4">
          </div>
          <div class="txt-box">
            <h3>파트너시스템</h3>
            <p>파트너시스템</p>
            <p>#파트너 #시스템</p>
            <div class="background-icon">
              <i class="fa-group icon4"></i>
            </div>
            <a href="#" class="more">+더보기</a>
          </div>
        </div>
      </div>

      <p class="step-main-txt">입점절차</p>
      <div class="step">
        <div class="step-flex">
          <div class="step1">
            <p class="step-icon fa-compress"></p>
            <h3 class="step-title">임시회원가입</h3>
            <p class="step-content">미거래 업체는 임시회원 가입 후<br> 상담신청이 가능합니다.</p>
            <div class="step-number-box">
              <div class="step-number">1</div>
            </div>
          </div>

          <span class="fa-arrow-right"></span>
          <div class="step2">
            <p class="step-icon fa-commenting"></p>
            <h3 class="step-title">온라인상담</h3>
            <p class="step-content">GIFTS:Mall 입점/제휴는 온라인 상담<br> 후 결과 안내를 통해 진행됩니다.</p>
            <div class="step-number-box">
              <div class="step-number">2</div>
            </div>
          </div>

          <span class="fa-arrow-right"></span>
          <div class="step3">
            <p class="step-icon fa-location-arrow"></p>
            <h3 class="step-title">방문상담</h3>
            <p class="step-content">온라인 상담이 긍정적일 경우,<br> 담당MD/제휴담당자와 구체적인<br> 상담을 진행하게 됩니다.</p>
            <div class="step-number-box">
              <div class="step-number">3</div>
            </div>
          </div>

          <span class="fa-arrow-right"></span>
          <div class="step4">
            <p class="step-icon fa-cutlery"></p>
            <h3 class="step-title">품평회</h3>
            <p class="step-content">공정한 평가를 위해<br> 상품력, 기획력, 영업력, 판촉력 등을<br> 기준으로 내부 품평회를 실시합니다.</p>
            <div class="step-number-box">
              <div class="step-number">4</div>
            </div>
          </div>

          <span class="fa-arrow-right"></span>
          <div class="step5">
            <p class="step-icon fa-ellipsis-h"></p>
            <h3 class="step-title">신용평가</h3>
            <p class="step-content">입점 확정 협력사는 신뢰 있는<br> 거래를 위해 신용평가를 진행합니다.</p>
            <div class="step-number-box">
              <div class="step-number">5</div>
            </div>
          </div>

          <span class="fa-arrow-right"></span>
          <div class="step6">
            <p class="step-icon fa-check"></p>
            <h3 class="step-title">계약체결</h3>
            <p class="step-content">전자계약서(또는 수기계약서)로<br> 거래계약서와 관련 서류를 작성하면<br> 입점 절차가 완료됩니다.</p>
            <div class="step-number-box">
              <div class="step-number">6</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer-in">
        <div class="footer-logo"><img src="./img/slideImg/logo.png" alt="footer-logo">
          <p class="footer-logo-txt"></p>
        </div>
        <div class="footer-content1">
          <div class="number">
            <p>고객센터 이용안내</p>
            <p>온라인몰 고객센터 1580-8282</p>
            <p>매장고객센터 1577-8254</p>
            <p>고객센터 운영시간 [평일 09:00 - 18:00]</p>
          </div>
          <div class="footer-txt1">
            <p>주말 및 공휴일은 1:1문의하기를 이용해주세요.<br>
              업무가 시작되면 바로 처리해드립니다.
            </p>
          </div>
        </div>

        <div class="footer-content2">
          <div class="footer-txt2">
            <ul>
              <li>(주)GIFTS:Mall | 사업자등록번호 : 809-81-01157 | 대표이사 황기영</li>
              <li>주소 : 서울특별시 용산구 한강대로 123, 40층 </li>
              <li>본사 대표전화 : 02-123-4567 | GIFTS:Mall 가맹상담전화 : 02-123-4568</li>
            </ul>
          </div>
        </div>

        <div class="footer-content3">
          <ul>
            <li>지방은행구매안전서비스</li>
            <li>IFTS:Mall은 현금 결제한 금액에 대해 지방은행과 채무지급보증</li>
            <li>계약을체결하여 안전한 거래를 보장하고 있습니다</li>
            <a href="#" class="highright">서비스 가입사실 확인 ></a>
          </ul>
        </div>

        <div class="footer-content4">
          <div class="footer-link">
            <ul>
              <li><a href="#">개인정보처리방침</a></li>
              <li><a href="#">이용약관.법적고지</a></li>
              <li><a href="#">청소년보호방침</a></li>
              <li><a href="#">이메일무단수집거부</a></li>
              <li><a href="#">사이트맵</a></li>
              <li><a href="#">채용</a></li>
            </ul>
          </div>

          <div class="footer-sns">
            <ul>
              <li><a href="#" class="fa-chrome"></a></li>
              <li><a href="#" class="fa-facebook-square"></a></li>
              <li><a href="#" class="fa-github"></a></li>
              <li><a href="#" class="fa-instagram"></a></li>
              <li><a href="#" class="fa-twitter"></a></li>
            </ul>
          </div>
        </div>

        <div class="copyright">
          <p>COPYRIGHTⓒ 2024 GIFTS:MALL KOREA INC. ALL RIGHTS RESERVED</p>
        </div>
      </div>
  </div>
  </footer>
  </div>
</body>
<script src="./js/scriptC.js"></script>

</html>