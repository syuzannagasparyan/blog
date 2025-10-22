function addListItem() {
let val=document.getElementById('item_text').value
let list = document.getElementById('list')
document.createElement("li")
li.innerHTML=val
list.appendChild(li)
document.getElementById('item_text').value=''
}
var paragraphs = document.getElementsByTagName("p");
for (var i = 0; i < paragraphs.length; i++) {
    paragraphs[i].onclick = ('click',function()) {
        this.style.color = "green";
    }
}

