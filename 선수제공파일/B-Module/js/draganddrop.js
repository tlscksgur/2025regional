function drag() {
  function restore(id) {
    $(`.exhibition .proitemall[data-id="${id}"]`).css("opacity", 1).draggable("enable")
  }

  $(`.exhibition .proitemall`).each((i, e)=>{
    $(e).attr("data-id", `$or-${i}`).draggable({
      helper: "clone"
    })
  })

  $(".order").droppable({
    accept: ".exhibition .proitemall:not(.cloned)",
    drop(event,ui){
      const $or = ui.draggable
      const id = $or.attr("data-id")
      const $clone = $or.clone()

      .attr("data-id", id)
      .removeClass("ui-draggable")
      .addClass("cloned")
      .appendTo(this)
      .draggable()

      $or.css("opacity", 0.3).draggable("disable")
    }
  })

  $("body").droppable({
    accept: ".cloned",
    drop(event,ui){
      const $cloned = ui.draggable
      const id = $cloned.attr("data-id")

      restore(id)
      $cloned.remove()
    }
  })
}

drag()