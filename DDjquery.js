function drag() {
  const buy = document.querySelector(".confirm");

  let totalPrice = 0;
  function updateTotalPrice() {
    $("#total-price").get(0).textContent = totalPrice.toLocaleString();
  }

  function restore(id) {
    $(`.exhibition .product[data-id="${id}"]`).css('opacity', 1);
  }

  $(".proitemall").each((i, e) => {
    $(e).addClass("product")
      .attr("data-id", `orig-${i}`)
      .draggable({
        helper: "clone",
      });
  });

  $(".order").droppable({
    accept: ".product:not(.cloned)",
    drop(event, ui) {
      const $orig = ui.draggable;
      const id = $orig.data("id");

      // 가격 정보 추출
      const priceText = $orig.find("li").last().text(); // 마지막 <li>에서 가격 추출
      const price = parseInt(priceText.replace(/[^0-9]/g, ""), 10);

      $orig.css({ opacity: 0.5 });

      const $clone = $orig
        .clone()
        .removeClass('ui-draggable ui-draggable-handle')
        .addClass('cloned')
        .attr("data-id", id)
        .appendTo(this);

      $clone.draggable({
        stop(event, ui) {
          const $parent = $(this).closest(".order");
          if (!$parent.length) {
            restore($(this).data("id"));
            $(this).remove();
            totalPrice -= price;
            updateTotalPrice();
          }
        }
      });

      totalPrice += price;
      updateTotalPrice();
    }
  });

  $("body").droppable({
    accept: ".cloned",
    drop(event, ui) {
      const $cloned = ui.draggable;
      restore($cloned.data("id"));
      totalPrice -= parseInt($cloned.find("li").last().text().replace(/[^0-9]/g, ""), 10);
      updateTotalPrice();
      $cloned.remove();
    }
  });
}

drag();