const auto = document.querySelector(".auto") 
auto.addEventListener("change", ()=>{
  localStorage.setItem("autoplay", auto.checked)
  auto.checked ? video.play() : video.pause()
})

if(localStorage.getItem("autoplay") === "true"){
  video.muted = true
  video.play()
  auto.checked = true
}