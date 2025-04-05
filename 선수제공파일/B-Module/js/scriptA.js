fetch("./js/s.json")
.then(response =>{
 return response.json()
})

.then(jdata => {
  const allProduct = document.querySelector(".all-product")
  allProduct.innerHTML = ""

  Object.keys(jdata.product).forEach(item =>{
    const data = jdata.product[item]

    data.forEach(e => {
      const ul = document.createElement("ul")
      ul.innerHTML = `
        <li>${e.title}</li>
        <li><img src="${e.img}" alt="${e.title}"><</li>
        <li>${e.content}</li>
        <li>${e.price}</li>
        <li>${e.den1}</li>
        <li>${e.den2}</li>
      `
      allProduct.appendChild(ul)
    });
  })
})