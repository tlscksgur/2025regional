<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/sub1.css">
  <title>소개</title>
</head>

<body>
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
            <?php if((isset($_SESSION['ss']) && $_SESSION['ss']) || (isset($_SESSION['ad']) && $_SESSION['ad'])): ?>
              <li>
                <?php if (isset($_SESSION['ss']) && $_SESSION['ss']): ?>
                    <?php echo $_SESSION['ss']->id . "님" ?>
                <?php elseif (isset($_SESSION['ad']) && $_SESSION['ad']): ?>
                    <?php echo "관리자님" ?>
                <?php endif; ?>
              </li>
              <li><a href="logout.php">로그아웃</a></li>
            <?php else: ?>
              <li><a href="loginshow.php">로그인</a></li>
              <li><a href="joinshow.php">회원가입</a></li>
            <?php endif; ?>
              <li><a href="#">장바구니</a></li>
              <?php if(isset($_SESSION['ad']) && $_SESSION['ad']): ?>
                <input type="checkbox" class="adbtn" id="admii" hidden>
                <label for="admii" class="adlabel">관리자</label>
              <ul class="adcheck">
                <li><a href="#">공지사항관리</a></li>
                <li><a href="#">판매상품관리</a></li>
              </ul>
                <?php elseif (isset($_SESSION['ss']) && $_SESSION['ss']):?>
                  <li><a href="#">관리자</a></li>
              <?php else: ?>
                <li><a href="adminlogin.php">관리자</a></li>
              <?php endif; ?>
          </ul>
          
        </div>
      </div>
    </header>

  <section>
    <div class="section-in">
      <div class="intro-flex">
        <ul class="indroduce">
          <li class="img01"><p class="indroduce-txt1">행복신뢰</p></li>
          <li class="img02"><p class="indroduce-txt2">가치나눔</p></li>
          <li class="img03"><p class="indroduce-txt3">환경선도</p></li>
          <li class="img04"><p class="indroduce-txt4">미래혁신</p></li>
          <li class="img05"><p class="indroduce-txt5">정보보안</p></li>
        </ul>
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
  <script src="./js/scriptB.js"></script>
</body>

</html>