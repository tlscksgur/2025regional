fetch("./js/product.json")
.then(response => {
  return response.json()
})

.then(jdata => {
  const allProduct = document.querySelector(".all-product")
  allProduct.innerHTML = ""

  Object.keys(jdata.product).forEach(item => {
    const data = jdata.product[item]

    data.forEach(e => {
      const ul = document.createElement('ul')
      ul.innerHTML = `
      <li>${e.title}</li>
      <li>${e.img}</li>
      <li>${e.content}</li>
      <li>${e.price}</li>
      <li>${e.delivery}</li>
      `
      allProduct.appendChild(ul)
    });
  });

})