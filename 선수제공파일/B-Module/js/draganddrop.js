function drag() {
  function restore() {
    $(`.exhibition .proitemall[data-id="${id}"]`).css("opacity", 1).draggable("enable")
  }

  $(`.exhibition .proitemall`).each((i, e)=>{
    $(e).attr("data-id", `or-${i}`).draggable({
      helper: "clone"
    })
  })

  $(".order").droppable({
    accept: ".exhibition .proitemall:not(.cloned)",
    drop(event, ui){
      const $or = ui.draggable
      const id = $or.attr("data-id")
    }
  })

  
}