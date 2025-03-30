//비디오 컨트롤

document.addEventListener("DOMContentLoaded", ()=>{
  const video = document.querySelector(".video-box video")
  const controller = document.querySelector(".video-ctl > button")
  const controlBtnBox = document.querySelector(".control-btn-box")


controller.addEventListener("click", () => {
  if (controlBtnBox.style.display === "none") {
    controlBtnBox.style.display = "flex"; 
  } else {
    controlBtnBox.style.display = "none"; 
  }
});

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

//이미지 바꾸기

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

//모달 창

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


// ----------드래그 앤 드롭----------/
class Order {
  constructor() {
    this.fetchData = [];
    this.categorizedData = [];
    this.orderData = [];
    this.init();
  }

  async init() {
    this.fetchData = await fetch('./product.json').then(r => r.json());
    this.categorizedData = Object.groupBy(this.fetchData, ({ category }) => category);
    this.html();
    this.setEvents();
  }

  changeCategory({ target }) {
    $('.selector-area > .selected').classList.remove('selected');
    target.classList.add('selected');
    $('.display-area > .fc:not(.none)').classList.add('none');
    $(`.display-area > .fc[data-category="${target.textContent}"]`).classList.remove('none');
  }

  html() {
    Object.values(this.categorizedData).forEach((arr, idx) => {
      const categoryArr = ['건강식품', '디지털', '팬시', '향수', '헤어케어'];
      const $fc = newElement('div', { className: `fc g1 abs w1 ${idx === 0 ? `` : `none`}` });
      $fc.dataset.category = categoryArr[idx];
      arr.forEach(({ title, description, img, price, dc }) => {
        const $card = newElement('div', { className: `card ov ${dc ? `popular` : ``}`, draggable: 'true' });
        $card.dataset.title = title;
        $card.innerHTML = `
          <img src=".${img}" title="img" alt="img" />
          <h3>${title}</h3>
          <p>${description}</p>
          <div class="ac jr g1">${dc ? `<i class="lh">${numberFormat(price)}</i><b>${numberFormat(price - dc)}</b>` : `<b>${numberFormat(price)}</b>`}</div>
        `;
        $fc.append($card);
      });
      $('.display-area').append($fc);
    });
  }

  setState(obj) {
    const existingItemIdx = this.orderData.findIndex(({ title }) => { return title === obj.title });
    if (existingItemIdx >= 0) {
      this.orderData[existingItemIdx].count++;
      return this.render();
    }
    this.orderData.push({ ...obj, count: 1 });
    this.render();
  }

  dragCtrl($title) {
    const obj = this.fetchData.find(({ title }) => title === $title);
    this.setState(obj);
    $$('.display-area .card').forEach((el) => {
      if (el.dataset.title === $title) el.classList.add('op5');
    });
  }

  modalInit($modal, open = true) {
    if (!open) return modalCtrl($modal, false);
    $('#non-member-id').value = id();
    modalCtrl($modal);
  }

  banner() {
    const $banner = newElement('div', { textContent: `방금 비회원 ${$('#non-member-id').value}님이 ${$('#non-member-totalprice').value}을 결제하셨습니다!`, className: `fix fff order-banner radius1` });
    document.body.append($banner);
    setTimeout(() => { $banner.remove(); }, 3000);
  }

  removeDrag(e, $title) {
    const dragTarget = document.elementFromPoint(e.clientX, e.clientY);
    [...$$('.display-area .card')].find((e) => e.dataset.title === $title)?.classList.remove('op5');
    if (!dragTarget.closest('.order-area')) {
      const $title = e.currentTarget.dataset.title;
      const finding = this.orderData.find(({ title }) => { return title === $title });
      this.orderData.pop(finding);
      this.render();
    }
  }

  render() {
    let totalprice = 0;
    $('.order-area').innerHTML = '';
    this.orderData.forEach(({ title, description, price, dc, img, count }) => {
      const $card = newElement('div', { className: `${dc ? `popular` : ``} card ov`, draggable: "true", style: "padding-bottom: 0; border-color: #365fd9" });
      $card.dataset.title = title;
      $card.innerHTML = `
        <img src=".${img}" alt="img" title="img" />
        <h3>${title}</h3>
        <p>${description}</p>
        <div class="ac jr g1">${dc ? `<i class="lh">${numberFormat(price)}</i><b>${numberFormat(price - dc)}</b>` : `<b>${numberFormat(price)}</b>`}</div>
        <div class="ac jb"><p>수량</p><input type="number" value="${count}" min="1" style="width: 70%;" /></div>
        <div class="ac jb"><p>금액</p><div class="fxc"><b>${numberFormat((price - dc) * count)}</b></div></div>
        <div class="jb"></div>
      `;
      $('.order-area').append($card);
      totalprice += ((price - dc) * count);
      $card.ondragend = (e) => { this.removeDrag(e, title); }
    });
    $('#non-member-totalprice').value = numberFormat(totalprice);
  }

  setEvents() {
    $('.non-member-order-btn').onclick = () => this.modalInit('.non-member-order');
    $('.non-member-order-finish').onclick = () => { this.modalInit('.non-member-order', false); this.banner(); };
    $$('.selector-area > div').forEach(el => el.onclick = (e) => { this.changeCategory(e); });
    $$('.display-area .card').forEach(el => el.ondragstart = (e) => { e.dataTransfer.setData('title', e.currentTarget.dataset.title); });
    $('.order-area').ondragover = (e) => { e.preventDefault(); }
    $('.order-area').ondrop = (e) => { e.preventDefault(); this.dragCtrl(e.dataTransfer.getData('title')); }
  }
}

new Order();

modal()
imgChange()