let numbers = ["ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"].join("").split("")
const id = document.querySelector("#guest-id")


for (let i = 0; i <= 5; i++) {
  let random = Math.floor(Math.random() * numbers.length)
  id.innerHTML += numbers[random]
}