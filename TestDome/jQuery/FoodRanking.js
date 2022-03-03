function setup() {
  $('button').on('click', function () {
    if(this.innerHTML=="Up!")
    {
      var actualLiTag = this.parentNode;
      var lastLiTag = $(actualLiTag).prev();
      $(lastLiTag).before($(actualLiTag));
    }
    else if(this.innerHTML=="Down!")
    {
      var actualLiTag = this.parentNode;
      var nextLiTag = $(actualLiTag).next();
      $(actualLiTag).before($(nextLiTag));
    }
  });
}

document.body.innerHTML = `<ol>
  <li><button>Up!</button>Taco<button>Down!</button></li>
  <li><button>Up!</button>Pizza<button>Down!</button></li>
  <li><button>Up!</button>Eggs<button>Down!</button></li>
</ol>`;

setup();
$("button").get(2).click();

console.log(document.body.innerHTML);
