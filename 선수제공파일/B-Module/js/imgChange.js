function imgChange() {
  const imgs = document.querySelectorAll(".indroduce li")

  imgs.forEach((e, i) => {
    e.addEventListener("mouseenter", ()=>{
      const bg = `url(./${e.className}.jpg)`
      imgs.forEach(item => item.style.backgroundImage = bg)
    })

    e.addEventListener("mouseleave", ()=>{
      imgs.forEach((item, i) => {
        item.style.backgroundImage = `url(./motto0${i + 1}.jpg)`
      });
    })
  });
}

imgChange()