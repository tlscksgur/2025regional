function loginModal() {
  const loginModalback = document.querySelector(".login-modal-background")
  const loginMo = document.querySelector('.loginMo')
  const quit = document.querySelector(".quit")
  const body = document.querySelector("body")
  
  loginMo.addEventListener("click", () =>{
    loginModalback.style.display = 'block'
    body.style.overflow = "hidden"
  })

  quit.addEventListener("click", () =>{
    loginModalback.style.display = 'none'
    body.style.overflow = "visible"
  })
}

function joinModal() {
  const joinModalback = document.querySelector(".join-modal-background")
  const joinMo = document.querySelectorAll('.joinMo')
  const quit = document.querySelectorAll(".quit")
  const body = document.querySelector("body")

  joinMo.forEach(btn => {
    btn.addEventListener("click", ()=>{
      joinModalback.style.display = 'block'
      body.style.overflow = "hidden"
    })
  });

  quit.forEach(qq => {
    qq.addEventListener("click", ()=>{
      joinModalback.style.display = 'none'
      body.style.overflow = "visible"
    })
  });
}

function adminModal() {
  const adminModalback = document.querySelector(".admin-modal-background")
  const quit = document.querySelectorAll(".quit")
  const body = document.querySelector("body")
  const admin = document.getElementById("admin")

  admin.addEventListener("click", () =>{
    adminModalback.style.display = 'block'
    body.style.overflow = 'hidden'
  })

  quit.forEach(qu => {
    qu.addEventListener("click", ()=>{
      adminModalback.style.display = "none"
      body.style.overflow = 'visible'
    })
  });
}

loginModal()
joinModal()
adminModal()
