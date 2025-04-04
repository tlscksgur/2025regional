function drag() {
  function resotre(id) {
    $(`.exhibition proitemall[data-id = "${id}"]`).css("opacity", 1)
  }

  $(`.exhibition .proitemall`).each((i, el) => {
    $(el).data("data-id", `orig0${i}`).draggable({
      helper: "clone"
    })
  })

  $(".order").droppable({
    accept: ".exhibition .proitemall:not(.cloned)",

    drop(event, ui) {
      const $orig = ui.draggable;
      const id = $orig.id

      const $clone = $orig
      .clone()
      .attr("data-id", id)
      .removeClass("ui-draggable ui-draggable-handle")
      .addClass("cloned")
      .appendTo(this)
    }
  })
  
}
drag()