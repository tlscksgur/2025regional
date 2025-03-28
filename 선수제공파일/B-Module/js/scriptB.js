document.addEventListener("DOMContentLoaded", ()=>{
  const video = document.querySelector(".video-box video")

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

function imgChange() {
  const imgs = document.querySelectorAll('.indroduce > li')

  const intxt1 = document.querySelector(".indroduce-txt1")
  const intxt2 = document.querySelector(".indroduce-txt2")
  const intxt3 = document.querySelector(".indroduce-txt3")
  const intxt4 = document.querySelector(".indroduce-txt4")
  const intxt5 = document.querySelector(".indroduce-txt5")


  imgs.forEach(e => {
    e.addEventListener("mouseenter", ()=>{
      imgs.forEach(item => {
        item.style.backgroundImage = `url(B-ModuleImg/${e.className}.jpg)`
      });
    })

    e.addEventListener("mouseleave", ()=>{
      imgs.forEach(item => {
        item.style.backgroundImage = `url(B-ModuleImg/${item.className}.jpg)`
      });
    })
  });
}

function modal() {
  document.addEventListener("DOMContentLoaded", ()=>{
    const body = document.querySelector("body")
    const dialog = document.querySelector("dialog")
    const open = document.querySelector(".open")
    const close = document.querySelector(".close")
  
    open.addEventListener("click", ()=>{
      dialog.showModal()
      dialog.style.display = "block"
      body.style.overflow = "hidden"
    })
  
    close.addEventListener("click", ()=>{
      dialog.close()
      dialog.style.display = "none"
      body.style.overflow = "visible"
    })
  })
}

modal()
imgChange()