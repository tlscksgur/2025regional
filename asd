function drag() {
  function restore(id) {
    console.log(id);
    $(`.exhibition .product[data-id="${id}"]`).css('opacity', 1).draggable("enable");
  }
  $(".exhibition .product").each((i, e) => {
    $(e).attr("data-id", `orig-${i}`).draggable({
      helper: "clone",
    })
  })
  $(".order").droppable({
    accept: ".exhibition .product:not(.cloned)",
    drop(event, ui) {
      const $orig = ui.draggable;
      const id = $orig.data("id");
      const $clone = $orig
        .clone()
        .removeClass('ui-draggable ui-draggable-handle')
        .addClass('cloned')
        .attr("data-id", id)
        .appendTo($(this))
      $clone.draggable({
        stop() {
          if (!$(this).data("returned")) {
            restore($(this).data("id"))
            $(this).remove()
          }
        }
      })
      $orig.css({ opacity: 0.3 })
    }
  })
  $("body").droppable({
    accept: ".cloned",

    drop(evnet, ui) {
      const $cloned = ui.draggable;
      restore($cloned.data("id"))
      console.log($cloned.data("id"));
      $cloned.data("returned", true).remove()
    }
  })
}
drag()