fetch("./product.json")
.then(response => {
  return response.json()
})

.then(jdata =>{
  const allProduct = document.querySelector(".all-product")

  Object.keys(jdata.product).forEach(item => {
    const data = jdata.product[item]

    data.forEach(e => {
      allProduct.innerHTML += `
      <ul>
        <li>${e.title}</li>
        <li>${e.content}</li>
        <li>${e.price}</li>
        <li>${e.delivery}</li>
        <li>${e.boon}</li>
        <li>${e.point}</li>
      </ul>`
    });  
  });
})