const open = document.querySelector(".open")

open.addEventListener("click", ()=>{
  let numbers = ["ABCFEFGHIJKLMNOPQRSTUVWXYZ1234567890"].join("").split("")
  let guestId = document.getElementById('guest-id')
  let re = ""

  for (let i = 0; i <= 5; i++) {
    let random = Math.floor(Math.random() * numbers.length)
    guestId.innerHTML += numbers[random]
    re += numbers[random]
  }
  guestId.innerHTML = re
})