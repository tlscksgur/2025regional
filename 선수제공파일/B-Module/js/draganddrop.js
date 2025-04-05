function drag() {
  function restore(id) {
    $(`.exhibition .proitemall[data-id="${id}"]`).css("opacity", 1).draggable("enable")
  }

  $(`.exhibition .proitemall`).each((i, el) => {
    $(el).attr("data-id", `orig-${i}`).draggable({
      helper: "clone"
    });
  });

  $(".order").droppable({
    accept: ".exhibition .proitemall:not(.cloned)", //.exhibition .proitemall 중에서 .cloned 클래스를 가지지 않은 요소만 드롭 가능
    drop(event, ui) {
      const $orig = ui.draggable; // 드래그된 원본 요소 가져오기
      const id = $orig.attr("data-id"); // 원본 요소의 data-id 속성값 가져오기
      const $clone = $orig.clone() // 원복요소 복제
      
        .attr("data-id", id)
        .removeClass("ui-draggable ui-draggable-handle")
        .addClass("cloned")
        .appendTo(this) // 현재 드롭된 영역(this)에 복제된 요소 추가
        .draggable();

      $orig.css("opacity", 0.5).draggable("disable")
    }
  });

  $("body").droppable({ // 클론 드래그해서 삭제하기
    accept: ".cloned",
    drop(event, ui) {
      const $cloned = ui.draggable;
      const id = $cloned.attr("data-id");

      restore(id);
      $cloned.remove();
    }
  });
}

drag();
