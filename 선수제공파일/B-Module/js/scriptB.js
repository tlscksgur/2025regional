//비디오 컨트롤

document.addEventListener("DOMContentLoaded", ()=>{
  const video = document.querySelector(".video-box video")
  const controller = document.querySelector(".video-ctl > button")
  const controlBtnBox = document.querySelector(".control-btn-box")

  controller.addEventListener("click", () => {
    if (controlBtnBox.style.display === "none") {
      controlBtnBox.style.display = "flex"; 
    } else {
      controlBtnBox.style.display = "none"; 
    }
});

  document.getElementById("play").addEventListener("click", ()=> video.play())
  document.getElementById("pause").addEventListener("click", ()=> video.pause())
  document.getElementById("stop").addEventListener("click", ()=> {video.pause(); video.currentTime = 0})
  document.getElementById("back").addEventListener("click", ()=> video.currentTime -= 10)
  document.getElementById("fast").addEventListener("click", ()=> video.currentTime += 10)
  document.getElementById("speedDown").addEventListener("click", ()=> video.playbackRate -= 0.1)
  document.getElementById("speedUp").addEventListener("click", ()=> video.playbackRate += 0.1)
  document.getElementById("reset").addEventListener("click", ()=> video.playbackRate = 1)
  document.getElementById("repeat").addEventListener("click", ()=> video.loop = !video.loop)
})

//이미지 바꾸기

function imgChange() {
  const images = document.querySelectorAll(".indroduce > li")
  const txt = [
    "고객신뢰를 바탕으로 행복한 사회를 추구하는 글로벌 기업",
    "기업의 가치 혁신의 출발은 나눔을 시작으로 고객 가치를 탐험한다.",
    "세계 기후변화 대응을 위해 100% 재생에너지로 생산된 제품만 선별한다.",
    "다른 생각 다른 미래, 플랫폼 기반의 글로벌 미래 혁신을 선도한다.",
    "글로벌 수준의 개인정보보호 및 보안 체계를 유지한다."
  ]

  images.forEach((e, index) => {
    e.addEventListener("mouseenter", ()=>{
      images.forEach(imgs => {
        imgs.style.backgroundImage = `url(B-ModuleImg/${e.className}.jpg)`

        document.querySelectorAll(".indroduce p").forEach(p => {
          p.style.opacity = '0'
        });

        const text = e.querySelector('p')
        if(text){
          text.style.opacity = "1"
        }
        
        if(images.length >= 5){
          images[4].innerHTML = txt[index]
        }

      });
    })

    e.addEventListener("mouseleave", ()=>{
      images.forEach(imgs => {
        imgs.style.backgroundImage = `url(B-ModuleImg/${imgs.className}.jpg)`

        document.querySelectorAll(".indroduce p").forEach(p => {
          p.style.opacity = '1'
        });

        if(images.length >= 5){
          images[4].innerHTML = ``
        }

      });
    })
  });
  
  
}

//모달 창

// function modal() {
//   document.addEventListener("DOMContentLoaded", ()=>{
//     const body = document.querySelector("body")
//     const dialog = document.querySelector("dialog")
//     const open = document.querySelector(".open")
//     const close = document.querySelector(".close")
  
//     open.addEventListener("click", ()=>{
//       dialog.showModal()
//       dialog.style.display = "block"
//       body.style.overflow = "hidden"
//     })
  
//     close.addEventListener("click", ()=>{
//       dialog.close()
//       dialog.style.display = "none"
//       body.style.overflow = "visible"
//     })
//   })
// }


// ----------드래그 앤 드롭----------/

  $(function () {
    let totalPrice = 0;

    function updateTotal() {
      $("#total-price").text(totalPrice);
    }

    function generateGuestID() {
      return Math.random().toString(36).substr(2, 6).toUpperCase();
    }

    $(".open").click(() => {
      console.log("모달 열기 버튼 클릭됨"); // 디버깅용 콘솔 로그
      $("#guest-id").text(generateGuestID()); // 랜덤 비회원 ID 설정
      $("dialog")[0].showModal(); // 모달 열기
  });

    $(".close").click(() => $("dialog")[0].close());

    $(".order").droppable({
      accept: ".product",
      drop: function (event, ui) {
        let item = ui.helper.clone();
        let price = parseInt(item.data("price"));

        item.append(`<span class="remove">❌</span>`);
        $(".order").append(item);
        ui.helper.addClass("dropped");

        totalPrice += price;
        updateTotal();
      }
    });

    $(".order").on("click", ".remove", function () {
      let price = parseInt($(this).parent().data("price"));
      totalPrice -= price;
      updateTotal();
      $(this).parent().remove();
    });

    $(".confirm").click(() => {
      $("dialog")[0].close();
      $("body").append(`<div id="order-message">방금 비회원 ${$("#guest-id").text()}님이 ${totalPrice}원을 결제하셨습니다!</div>`);
      $("#order-message").fadeIn().delay(3000).fadeOut();
    });
  });