

document.addEventListener("DOMContentLoaded", () => {
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

  document.getElementById('play').addEventListener("click", () => { video.play() })
  document.getElementById('pause').addEventListener("click", () => { video.pause() })
  document.getElementById('stop').addEventListener("click", () => { video.pause(); video.currentTime = 0 })
  document.getElementById('back').addEventListener("click", () => { video.currentTime -= 10 })
  document.getElementById('fast').addEventListener("click", () => { video.currentTime += 10 })
  document.getElementById('speedUp').addEventListener("click", () => { video.playbackRate += .1 })
  document.getElementById('speedDown').addEventListener("click", () => { video.playbackRate -= .1 })
  document.getElementById('reset').addEventListener("click", () => { video.playbackRate = 1 })
  document.getElementById('repeat').addEventListener("click", () => { video.loop = !video.loop })
})



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
    e.addEventListener("mouseenter", () => {
      images.forEach(imgs => {
        imgs.style.backgroundImage = `url(B-ModuleImg/${e.className}.jpg)`

        document.querySelectorAll(".indroduce p").forEach(p => {
          p.style.opacity = '0'
        });

        const text = e.querySelector('p')
        if (text) {
          text.style.opacity = "1"
        }

        if (images.length >= 5) {
          images[4].innerHTML = txt[index]
        }

      });
    })

    e.addEventListener("mouseleave", () => {
      images.forEach(imgs => {
        imgs.style.backgroundImage = `url(B-ModuleImg/${imgs.className}.jpg)`

        document.querySelectorAll(".indroduce p").forEach(p => {
          p.style.opacity = '1'
        });

        if (images.length >= 5) {
          images[4].innerHTML = ``
        }

      });
    })
  });


}



function modal() {
  document.addEventListener("DOMContentLoaded", () => {
    const body = document.querySelector("body")
    const dialog = document.querySelector("dialog")
    const open = document.querySelector(".open")
    const close = document.querySelector(".close")

    open.addEventListener("click", () => {
      dialog.showModal()
      dialog.style.display = "block"
      body.style.overflow = "hidden"
    })

    close.addEventListener("click", () => {
      dialog.close()
      dialog.style.display = "none"
      body.style.overflow = "visible"
    })
  })
}





function random() {
  const open = document.querySelector(".open")

  open.addEventListener('click', ()=>{
    let numbers = ["ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"].join("").split("")
    $("#guest-id").get(0).textContent = "";

    for (let i = 0; i <= 5; i++) {
      let random = Math.floor(Math.random() * numbers.length)
      $("#guest-id").get(0).textContent += numbers[random]
      numbers[random] = ""
      numbers = numbers.filter(e => e != "")
    }
  })
}


function drag() {
  const buy = document.querySelector(".confirm")

  let totalPrice = 0;
  function updateTotalPrice() {
    $("#total-price").get(0).textContent = totalPrice.toLocaleString()
  }

  function restore(id) {
    console.log(id);
    $(`.exhibition .product[data-id="${id}"]`).css('opacity', 1).draggable("enable");
  }
  
  $(".proitem1, .proitem2").each((i, e) => {
    $(e).addClass("product")
      .attr("data-id", `orig-${i}`)
      .draggable({
        helper: "clone",
      });
  });

  $(".order").droppable({
    accept: ".product:not(.cloned)",
    drop(event, ui) {
      const $orig = ui.draggable;
      const id = $orig.data("id");

      const priceText = $orig.find('.price').get(0).textContent
      const price = parseInt(priceText.replace(/[^0-9]/g, ""));

      $orig.draggable("disable").css({ opacity: 0.5 });

      const $clone = $orig
        .clone()
        .removeClass('ui-draggable ui-draggable-handle')
        .addClass('cloned')
        .attr("data-id", id)
        .appendTo($(this));

      $clone.draggable({
        revert: "invalid",
        stop(event, ui) {

          const $parent = $(this).closest(".order");
          if (!$parent.length) {
            restore($(this).data("id"));
            $(this).remove();
            totalPrice -= price;
            updateTotalPrice();
          }
        }
      });

      totalPrice += price;
      updateTotalPrice();
    }
  });

  $("body").droppable({
    accept: ".cloned",
    drop(event, ui) {
      const $cloned = ui.draggable;

      restore($cloned.data("id"));
      updateTotalPrice();
      $cloned.remove();
    }
  });
}

drag();
random()
modal()
imgChange()
order()