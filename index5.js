function addListItem() {
let val=document.getElementById('item_text').value
let list = document.getElementById('List')
let li = document.createElement("li")
li.innerHTML=val;
list.appendChild(li)
document.getElementById('item_text').value=''
}

var paragraphs = document.getElementsByTagName("p");
for (var i = 0; i < paragraphs.length; i++) {
    paragraphs[i].onclick = function() {
        this.style.color = "green";
    }
}
let square = document.getElementById('square');
square.onmouseover = function() {
    square.style.backgroundColor = "green";
}
square.onmouseout = function() {
    square.style.backgroundColor = "blue";
}
document.addEventListener("DOMContentLoaded", function() {
let clickText = document.getElementById('clickText');
clickText.onclick = function () {
    clickText.innerHTML = "Բարև";
    clickText.style.backgroundColor = "lightgreen";
    };
});
document.addEventListener("DOMContentLoaded",function() {
    let hoverText = document.getElementById("hoverText")
    hoverText.onmouseover = function() {
        hoverText.innerHTML = "Հաջողություն";
        hoverText.style.backgroundColor = "green";
    }
    hoverText.onmouseout = function() {
        hoverText.innerHTML = "Ողջույն";
        hoverText.style.backgroundColor = "lightblue";
    }
});