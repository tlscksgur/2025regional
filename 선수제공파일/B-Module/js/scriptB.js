//비디오 컨트롤

document.addEventListener("DOMContentLoaded", () => {
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

  document.getElementById('play').addEventListener("click", () => { video.play() })
  document.getElementById('pause').addEventListener("click", () => { video.pause() })
  document.getElementById('stop').addEventListener("click", () => { video.pause(); video.currentTime = 0 })
  document.getElementById('back').addEventListener("click", () => { video.currentTime -= 10 })
  document.getElementById('fast').addEventListener("click", () => { video.currentTime += 10 })
  document.getElementById('speedUp').addEventListener("click", () => { video.playbackRate += .1 })
  document.getElementById('speedDown').addEventListener("click", () => { video.playbackRate -= .1 })
  document.getElementById('reset').addEventListener("click", () => { video.playbackRate = 1 })
  document.getElementById('repeat').addEventListener("click", () => { video.loop = !video.loop })
})

//이미지 바꾸기

function imgChange() {
  const images = document.querySelectorAll(".indroduce > li")
  const txt = [
    "고객신뢰를 바탕으로 행복한 사회를 추구하는 글로벌 기업",
    "기업의 가치 혁신의 출발은 나눔을 시작으로 고객 가치를 탐험한다.",
    "세계 기후변화 대응을 위해 100% 재생에너지로 생산된 제품만 선별한다.",
    "다른 생각 다른 미래, 플랫폼 기반의 글로벌 미래 혁신을 선도한다.",
    "글로벌 수준의 개인정보보호 및 보안 체계를 유지한다."
  ]

  images.forEach((e, index) => {
    e.addEventListener("mouseenter", () => {
      images.forEach(imgs => {
        imgs.style.backgroundImage = `url(B-ModuleImg/${e.className}.jpg)`

        document.querySelectorAll(".indroduce p").forEach(p => {
          p.style.opacity = '0'
        });

        const text = e.querySelector('p')
        if (text) {
          text.style.opacity = "1"
        }

        if (images.length >= 5) {
          images[4].innerHTML = txt[index]
        }

      });
    })

    e.addEventListener("mouseleave", () => {
      images.forEach(imgs => {
        imgs.style.backgroundImage = `url(B-ModuleImg/${imgs.className}.jpg)`

        document.querySelectorAll(".indroduce p").forEach(p => {
          p.style.opacity = '1'
        });

        if (images.length >= 5) {
          images[4].innerHTML = ``
        }

      });
    })
  });


}

//모달 창

function modal() {
  document.addEventListener("DOMContentLoaded", () => {
    const body = document.querySelector("body")
    const dialog = document.querySelector("dialog")
    const open = document.querySelector(".open")
    const close = document.querySelector(".close")

    open.addEventListener("click", () => {
      dialog.showModal()
      dialog.style.display = "block"
      body.style.overflow = "hidden"
    })

    close.addEventListener("click", () => {
      dialog.close()
      dialog.style.display = "none"
      body.style.overflow = "visible"
    })
  })
}


modal()
imgChange()






// ----------랜덤번호----------/


function random() {
  let numbers = ["ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"].join("").split("")
  console.log();
  for (let i = 0; i <= 5; i++) {
    let random = Math.floor(Math.random() * numbers.length)
    $("#guest-id").get(0).textContent += numbers[random]
    numbers[random] = ""
    numbers = numbers.filter(e => e != "")
  }
}

random()


function drag() { // Wait for the DOM to be ready

  // --- Existing scriptB.js code might go here ---
  // Example: Modal open/close logic (assuming you have it)
  const dialog = $('dialog').get(0); // Get the native dialog element
  const openBtn = $('.open');
  const closeBtn = $('dialog .close');
  const confirmBtn = $('dialog .confirm');
  const orderMessage = $('#order-message');
  const guestIdSpan = $('#guest-id');
  const orderArea = $('dialog .order');
  const totalPriceSpan = $('#total-price');

  // Open Modal
  openBtn.on('click', function () {
    // Generate random guest ID
    const randomId = 'guest_' + Math.random().toString(36).substring(2, 8);
    guestIdSpan.text(randomId);
    // Clear previous order details when opening
    orderArea.html('주문영역'); // Reset content
    totalPriceSpan.text('0');    // Reset total price
    dialog.showModal(); // Use native method to show modal
  });

  // Close Modal
  closeBtn.on('click', function () {
    dialog.close(); // Use native method to close modal
  });

  // Confirm Order (Example action)
  confirmBtn.on('click', function () {
    const guestId = guestIdSpan.text();
    const total = totalPriceSpan.text();
    if (parseInt(total) > 0) {
      orderMessage.text(`${guestId}님의 주문이 완료되었습니다. 총 결제금액: ${total}원`);
    } else {
      orderMessage.text('주문할 상품을 추가해주세요.');
    }
    orderMessage.fadeIn().delay(3000).fadeOut(); // Show message briefly
    dialog.close();
  });

  // --- Drag and Drop Implementation ---

  // 1. Make product list items draggable
  $('.all-product ul').draggable({
    helper: 'clone',     // Drag a copy of the element
    revert: 'invalid',   // Snap back if not dropped on a valid target
    appendTo: 'body',    // Ensure helper is visible above dialog
    containment: 'document', // Keep draggable within page bounds
    cursor: 'move',      // Change cursor
    start: function (event, ui) {
      // Optional: Add a class to the helper for styling
      ui.helper.addClass('dragging-product');
    }
  });

  // 2. Make the order area droppable
  $('dialog .order').droppable({
    accept: '.all-product ul', // Only accept product uls
    hoverClass: 'droppable-hover', // Add class on hover
    // drop event: triggered when a draggable is dropped here
    drop: function (event, ui) {
      const droppedItem = ui.draggable; // The original element that was dragged

      // Get product name (first li)
      const productName = droppedItem.find('li:first-child').text().replace('상품명 ', ''); // Remove "상품명 " prefix

      // Get product price (fifth li) - handle potential discount prices
      const priceText = droppedItem.find('li:nth-child(5)').text();
      // Extract the *last* number, removing commas
      const priceMatch = priceText.match(/[\d,]+(?=\s*$)/); // Find last sequence of digits/commas at the end
      let productPrice = 0;
      if (priceMatch) {
        productPrice = parseInt(priceMatch[0].replace(/,/g, ''), 10); // Remove commas and parse
      } else {
        // Fallback if only one price is listed without extra space
        const singlePriceMatch = priceText.match(/[\d,]+/);
        if (singlePriceMatch) {
          productPrice = parseInt(singlePriceMatch[0].replace(/,/g, ''), 10);
        }
      }


      // Check if price was found
      if (productName && productPrice > 0) {
        // Create element to add to the order area
        const orderItem = $('<div class="ordered-item"></div>')
          .text(`${productName} - ${productPrice.toLocaleString()}원`)
          .data('price', productPrice); // Store price data with the element

        // Add the item to the order area
        $(this).append(orderItem); // $(this) refers to the droppable element (.order)

        // Update total price
        let currentTotal = parseInt(totalPriceSpan.text().replace(/,/g, ''), 10) || 0;
        currentTotal += productPrice;
        totalPriceSpan.text(currentTotal.toLocaleString()); // Format with commas

        // Optional: Provide visual feedback
        $(this).removeClass('droppable-hover'); // Remove hover class manually if needed
        // Maybe flash the order area briefly
        $(this).css('background-color', '#e0ffe0').animate({ backgroundColor: '' }, 500);

      } else {
        console.warn("Could not extract product name or price:", productName, priceText);
        // Optionally show an error to the user
      }
    }
  });
}

drag()
// --- End of Drag and Drop ---
