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


  imgs.forEach(e => {
    e.addEventListener("mouseenter", ()=>{
      imgs.forEach(item => {
        item.style.backgroundImage = `url(B-ModuleImg/${e.className}.jpg)`

        document.querySelectorAll('.indroduce p').forEach(p => {
          p.style.opacity = "0";
        });

        const text = e.querySelector('p')
        if(text) {
          text.style.opacity= '1'
        }
      });
    })

    

    e.addEventListener("mouseleave", ()=>{
      imgs.forEach(item => {
        item.style.backgroundImage = `url(B-ModuleImg/${item.className}.jpg)`

        document.querySelectorAll('.indroduce p').forEach(p => {
          p.style.opacity = "1";
        });
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