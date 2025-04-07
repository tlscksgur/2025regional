function video() {
  document.addEventListener("DOMContentLoaded", () => {
    const video = document.querySelector(".video-box video")
    const showbtn = document.querySelector(".video-ctl > button")
    const ctlBox = document.querySelector(".control-btn-box")
    const auto = document.getElementById("autoplay")

    showbtn.addEventListener("click", () => {
      if (ctlBox.style.display === "none") {
        ctlBox.style.display = "flex"
      } else {
        ctlBox.style.display = "none"
      }
    })

    document.getElementById("play").addEventListener("click", () => {video.play()})
    document.getElementById("stop").addEventListener("click", () => {video.pause()})
    document.getElementById("pause").addEventListener("click", () => {video.pause(); video.currentTime = 0})
    document.getElementById("back").addEventListener("click", () => {video.currentTime -= 10})
    document.getElementById("fast").addEventListener("click", () => {video.currentTime += 10})
    document.getElementById("speedDown").addEventListener("click", () => {video.playbackRate -= 0.1})
    document.getElementById("speedUp").addEventListener("click", () => {video.playbackRate += 0.1})
    document.getElementById("reset").addEventListener("click", () => {video.playbackRate = 1})
    document.getElementById("repeat").addEventListener("click", () => {video.loop = !video.loop})

    auto.addEventListener("change", () => {
      localStorage.setItem("autoplay", auto.checked)
      auto.checked ? video.play() : video.pause()
    })

    if (localStorage.getItem("autoplay") === "true") {
      video.muted = true
      video.play()
      auto.checked = true
    }
  })
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



modal()
video()