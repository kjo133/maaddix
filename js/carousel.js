$(document).keydown(function(e) {
  switch (e.which) {
    case 1:
      move("previous");
      break;

    case 2:
      move("next");
      break;

    default:
      return;
  }
  e.preventDefault();
});

$("#carousel div").click(function() {
  move($(this));
});
$("#previous").click(function() {
  move("previous");
});
$("#next").click(function() {
  move("next");
});

function move(element) {
  if (element == "next") {
    var selected = $(".selected").next();
  } else if (element == "previous") {
    var selected = $(".selected").prev();
  } else {
    var selected = element;
  }

  var next = $(selected).next();
  var prev = $(selected).prev();
  var prev2 = $(prev).prev();
  var next2 = $(next).next();

  $(selected)
    .removeClass()
    .addClass("selected");

  $(prev)
    .removeClass()
    .addClass("previous");
  $(next)
    .removeClass()
    .addClass("next");

  $(prev2)
    .removeClass()
    .addClass("prevLeftSecond");
  $(next2)
    .removeClass()
    .addClass("nextRightSecond");

  $(prev2)
    .prevAll()
    .removeClass()
    .addClass("hideLeft");
  $(next2)
    .nextAll()
    .removeClass()
    .addClass("hideRight");
}
