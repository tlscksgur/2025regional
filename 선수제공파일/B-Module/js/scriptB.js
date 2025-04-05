document.addEventListener("DOMContentLoaded", ()=>{
  const video = document.querySelector(".video-box video")
  const showbtn = document.querySelector(".video-ctl > button")
  const ctlBox = document.querySelector(".control-btn-box")
  const auto = document.getElementById("autoplay")

  showbtn.addEventListener("click", ()=>{
    if(ctlBox.style.display === "none"){
      ctlBox.style.display = "flex"
    }else{
      ctlBox.style.display = "none"
    }
  })

  document.getElementById("play").addEventListener("click", ()=> {video.play()})
  document.getElementById("stop").addEventListener("click", ()=> {video.pause()})
  document.getElementById("pause").addEventListener("click", ()=> {video.pause(); video.currentTime = 0})
  document.getElementById("back").addEventListener("click", ()=> {video.currentTime -= 10})
  document.getElementById("fast").addEventListener("click", ()=> {video.currentTime += 10})
  document.getElementById("speedDown").addEventListener("click", ()=> {video.playbackRate -= 0.1})
  document.getElementById("speedUp").addEventListener("click", ()=> {video.playbackRate += 0.1})
  document.getElementById("reset").addEventListener("click", ()=> {video.playbackRate = 1})
  document.getElementById("repeat").addEventListener("click", ()=> {video.loop = !video.loop})

  auto.addEventListener("change", ()=>{
    localStorage.setItem('autoplay', auto.checked)
    auto.checked ? video.play() : video.pause()
  })

  if(localStorage.getItem("autoplay") === "true"){
    video.muted = true
    video.play()
    auto.checked = true
  }

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
      console.log("wwww");
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

  open.addEventListener('click', () => {
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


random()
modal()
imgChange()
order()
