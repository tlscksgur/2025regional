<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sub2.css">
  <link rel="stylesheet" href="../C-Module/font/font-awesome.min.css">
  <title>소개</title>
</head>

<dialog>
  <div class="modal-box">
    <a class="close">X</a>
  </div>
</dialog>

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
    <div class="video-box">
      <video src="./AD.mp4"></video>

      <div class="video-ctl">
        <button id="play">▶</button>
        <button id="pause">⏸</button>
        <button id="stop">⏹</button>
        <button id="back">⏪</button>
        <button id="fast">⏩</button>
        <button id="speedDown">🐢</button>
        <button id="speedUp">🐇</button>
        <button id="reset">🔄</button>
        <button id="repeat">🔁</button>
      </div>
    </div>
    <div class="all-product">
      <ul>
        <li>상품명 이뮨 멀티비타민&amp;미네랄</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 이뮨 멀티비타민&amp;미네랄" class="product-img"></li>
        <li> 국내 판매 1위 멀티비타민 이뮨 14일분에 이중제형 + 남/녀 맞춤설계 포뮬러를 적용한 신제품</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 75,000 65,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->
      </ul>
      <ul>
        <li>상품명 센트룸</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 센트룸" class="product-img"></li>
        <li> 생기 넘치는 일상을 위한 센트룸 우먼 더블업. 비타민 B군 8종 함량 2배, 23가지 비타민과 미네랄, 한국인 여성 맞춤 영양 설계</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 27,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 닥터브라이언</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 닥터브라이언" class="product-img"></li>
        <li> 달콤한 청포도맛 구미로 맛있게 비타민 C와 D를 충전하세요. 활기찬 하루와 튼튼한 뼈 건강을 맛있게 충전하는 부드러운 젤리 타입</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 2,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 액티브 멀티포맨</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 액티브 멀티포맨" class="product-img"></li>
        <li> 미국판매 1위 내셔널 건강기능식품 브랜드. 남성 건강을 생각하는 22가지 주요 비타민&amp;미네랄</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 30,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 네이처메이드B12</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 네이처메이드B12" class="product-img"></li>
        <li> 여성 건강을 생각하는 23가지 주요 비타민&amp;미네랄, 한국인 1일 영양 권장량을 고려한 철분, 엽산이 강화된 여성종합비타민</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 30,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 PANTONE PD충전 보조배터리</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 PANTONE PD충전 보조배터리" class="product-img"></li>
        <li> 230g의 가벼운 무게로 휴대성 극대화, 3way 빌트인 케이블 채용, 10,000mAh의 대용량 배터리팩 내장</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 24,400</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 Bowie D05 무선 블루투스 5.3 헤드셋 </li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 Bowie D05 무선 블루투스 5.3 헤드셋 " class="product-img"></li>
        <li> 현실같은 3D사운드 스테이지 제공, 70시간의 오디오 재생시간, 2시간으로 완전 충전</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 36,900</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 독거미 F99 기계식 키보드</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 독거미 F99 기계식 키보드" class="product-img"></li>
        <li> 최고를 경험하게 해주는 키보드, 안정적인 무선 전송, 저소음 디자인, 일체형 실리콘 패드 디자인으로 소음 최소화, 프리미엄 PCB기판 채용으로 안정적인 타건감 제공
        </li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 70,750</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 파이널마우스 스타라이트12 페가수스 미디엄</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 파이널마우스 스타라이트12 페가수스 미디엄" class="product-img"></li>
        <li> 최첨단 펌웨어를 갖춘 업계 최고의 노르딕 RF 플랫폼 기반의 무선 기술 채용, 최대 20,000CPI 해상도를 갖춘 e스포츠 센서 채용</li>
        <li>일반배송 3,000원 (20,000원 이상 무료배송)</li>
        <li>가격 1,254,000 1,128,600</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 보이저5200 블루투스 이어폰</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 보이저5200 블루투스 이어폰" class="product-img"></li>
        <li> 4개의 마이크 탑재, 6중 바람차단, 강력한 노이즈 캔슬링, 공간의 소음을 최대로 줄여 최적의 업무 환경을 경험할 수 있습니다.</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 146,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 명품 자동 장우산</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 명품 자동 장우산" class="product-img"></li>
        <li> 태풍에도 견디는 프리미엄 우드 장우산. 50개 이상 구매 시 손잡이 무료 각인 서비스 제공</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 31,600</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 14K 윙블링 원터치 링 귀걸이(주문제작)</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 14K 윙블링 원터치 링 귀걸이(주문제작)" class="product-img"></li>
        <li> 언제나 당신의 일상에 '편안한 멋' 평범한 순간마저 매력을 돋보이게 만들어 줄 14K Daily Collection.</li>
        <li>일반배송 3,000원 (20,000원 이상 무료배송)</li>
        <li>가격 250,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 14K 윙블링 메르시 목걸이(주문제작)</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 14K 윙블링 메르시 목걸이(주문제작)" class="product-img"></li>
        <li> 언제나 변함없고 고급스러운 전체 14K 골드로 제작되어 소장 가치뿐만 아니라 우아한 아름다움을 선사합니다.</li>
        <li>일반배송 3,000원 (20,000원 이상 무료배송)</li>
        <li>가격 265,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 게이밍 이어폰 VJJB NI</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 게이밍 이어폰 VJJB NI" class="product-img"></li>
        <li> 세계 1위 가성비 유선 이어폰. 듀얼 드라이버 기술로 완벽한 고품질 사운드와 교체가 가능한 분리형 커스텀 케이블</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 38,900 28,900</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 인스탁스 미니 에보</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 인스탁스 미니 에보" class="product-img"></li>
        <li> 당신이 보는 세상을 보여주세요. 가장 혁신적인 프리미엄 클래식 하이브리드 카메라, 묵직한 세련됨이 돋보이는 mini Evo의 클래식 디자인을 만나보세요.</li>
        <li>일반배송 3,000원 (20,000원 이상 무료배송)</li>
        <li>가격 320,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 에스쁘아 솔리드 퍼퓸 4.2g</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 에스쁘아 솔리드 퍼퓸 4.2g" class="product-img"></li>
        <li> 새벽 달빛 아래 달큰한 체리가 어지럽게 흩어진 자리, 새하얀 자스민이 코끝을 스치고 자유롭게 남는 풍부한 머스크 향의 고체 향수</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 26,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 호텔도슨 향수 오드퍼퓸 75ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 호텔도슨 향수 오드퍼퓸 75ml" class="product-img"></li>
        <li> 향긋하고 보드라운 마른 꽃과 나무 향 뒤로 낙엽이 타는 듯한 베티버 향이 퍼지는 스파이시 플로럴 향</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 153,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 랑방 레 플레르 EDT 90ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 랑방 레 플레르 EDT 90ml" class="product-img"></li>
        <li> 에너지 넘치고 빛나는 머스키 프루티 플로럴 향으로 부드러움과 반짝임의 완벽한 균형이 매력입니다.</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 64,500</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 몽블랑 익스플로러 EDP 60ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 몽블랑 익스플로러 EDP 60ml" class="product-img"></li>
        <li> 전 세계를 여행하는 탐험가의 향기. 에너제틱 베르가못에서 자연스러운 패출리로 이어지는 향의 여정(우디 레더리 아로마틱)</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 103,000 93,000</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 캘빈클라인 One EDT 50ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 캘빈클라인 One EDT 50ml" class="product-img"></li>
        <li> 남녀 모두에게 어울리는 현대적이며, 라이트한 향의 캘빈클라인 CK one 오 드 뚜왈렛. 상쾌하고 신선한 시트러스 계열의 향으로 편안하고 캐주얼한 향수</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 58,900</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 어노브 딥 데미지 트리트먼트 EX 더블</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 어노브 딥 데미지 트리트먼트 EX 더블" class="product-img"></li>
        <li> 부드러움에 집착하다! 어노브 집착 헤어팩! 단백질 3,000% UP으로 완성하는 극손상모 솔루션</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 29,800</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml" class="product-img"></li>
        <li> 근거있는 여성탈모 전문가 려 루트젠이 만든 촘촘탄탄 밀도탄력을 채우는 3D볼륨 탈모 샴푸. 부드럽고 향 좋은 약산성 비건 샴푸</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 21,900</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 라보에이치 두피쿨링&amp;노세범 샴푸 333ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 라보에이치 두피쿨링&amp;노세범 샴푸 333ml" class="product-img"></li>
        <li> 청량하게 리프레쉬-쿨링샴푸, 오래도록 뽀송뽀송-노세범샴푸, 두피장벽강화 특허기술-탈모증상 완화 기능성 샴푸</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 19,800</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 모로칸오일 헤어트리트먼트 100ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 모로칸오일 헤어트리트먼트 100ml" class="product-img"></li>
        <li> 헤어케어, 컨디셔닝, 스타일링, 피니시까지 모두 가능한 단 하나의 헤어 오일 트리트먼트</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 52,200</li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->

      </ul>
      <ul>
        <li>상품명 닥터포헤어 피토프레시 헤어쿨링 스프레이 150ml</li>
        <li><img src="./img/건강식품/2.PNG" alt="상품명 닥터포헤어 피토프레시 헤어쿨링 스프레이 150ml" class="product-img"></li>
        <li> 열받아 예민해진 두피를 위한 즉각적인 두피 쿨링 솔루션. 온종일 느껴지는 상쾌함, 피토프레이 쿨링 스프레이</li>
        <li>일반배송 2,500원 (20,000원 이상 무료배송)</li>
        <li>가격 16,000 14,400 </li>
        <li><button class="buy-btn">구매</button> <button class="cart-btn">장바구니 담기</button></li>
        <!-- <li class="fa-plus-circle"></li> -->
      </ul>
    </div>
    <div class="no-member-btn">
      <button class="open">비회원구매</button>
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