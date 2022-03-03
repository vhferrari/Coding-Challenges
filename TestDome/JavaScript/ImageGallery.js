function setup() {
    var btns = document.getElementsByClassName("remove");
    for (let btn of btns) {
        btn.addEventListener("click", function() {
            this.parentNode.parentNode.removeChild(this.parentNode)
        });
    }
}

// Example case. 
document.body.innerHTML = `
<div class="image">
  <img src="https://bit.ly/3lmYVna" alt="First">
  <button class="remove">X</button>
</div>
<div class="image">
  <img src="https://bit.ly/3flyaMj" alt="Second">
  <button class="remove">X</button>
</div>`;

setup();

document.getElementsByClassName("remove")[0].click();
console.log(document.body.innerHTML);
