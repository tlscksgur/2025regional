function video() {
  const video = document.querySelector("video")
  const videoBtn = document.querySelector(".video-btn")
  const btnHidden = document.querySelector(".btn-hidden")
  const auto = document.getElementById("auto")

  btnHidden.addEventListener("click", ()=>{
    if(videoBtn.style.display === "none"){
      videoBtn.style.display = "flex"
    }else{
      videoBtn.style.display = "none"
    }
  })

  document.getElementById("play").addEventListener("click", ()=> {video.play()})
  document.getElementById("stop").addEventListener("click", ()=> {video.pause()})
  document.getElementById("pause").addEventListener("click", ()=> {video.pause(); video.currentTime = 0})
  document.getElementById("back").addEventListener("click", ()=> {video.currentTime -= 10})
  document.getElementById("fast").addEventListener("click", ()=> {video.currentTime += 10})
  document.getElementById("speedDown").addEventListener("click", ()=> {video.playbackRate -= .1})
  document.getElementById("speedUp").addEventListener("click", ()=> {video.playbackRate += .1})
  document.getElementById("reset").addEventListener("click", ()=> {video.playbackRate = 1})
  document.getElementById("replay").addEventListener("click", ()=> {video.loop = !video.loop})
  
  auto.addEventListener("change", ()=>{
    localStorage.setItem("autoplay", auto.checked)
  })
  if(localStorage.getItem("autoplay") === "true"){
    video.muted = true
    video.play()
    auto.checked = true
  }
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