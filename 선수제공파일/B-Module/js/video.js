const auto = document.getElementById("autoplay")
auto.addEventListener("change", ()=>{
  localStorage.setItem("autoplay", auto.checked)
  auto.checked ? video.play() : video.pause()
})

if(localStorage.getItem("autoplay") === "true"){
  video.muted = true
  video.play()
  auto.checked = true
}