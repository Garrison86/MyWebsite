

var myOutput = document.getElementById("main").innerHTML;


/*
var myMessage = "yo whats up!!!!"+ "<br>"
var myMessage2 = "innertHTML is correct!!!"
*/

/*
myOutput = myMessage;
myOutput += myMessage2;
*/

/*var myLiElements = document.querySelector('#main ul li')*/ // gets only one element
var myLiElements = document.querySelectorAll('#main ul li') // gets All elements
/*myLiElements.innerHTML = 'red';*/
/*var myLiElements = document.getElementsByTagName('li')*/

console.log(Array.isArray(myLiElements))
myLiElements = Array.from(myLiElements);
var count = 0
for (li of myLiElements){
 li.innerHTML = '<button> hit me</button>'
 li.addEventListener('click', youClicked)
li.style.color = 'red'
li.innerHTML = count++ + "hi"
}



/* a sycronistic programming */

console.log(1)
/*setInterval(aaaaayou, 1000)*/ // call back function
setTimeout(function ()  {alert(console.log('hello'))}, 1000)
console.log(2)
console.log(3)
console.log(4)
console.log(5)
console.log(6)



/*
for(var i=0; i<myLiElements; i++){
    myLiElements[i].innerHTML = "hello" + i;
}
*/
function youClickMe(e){
counsole.log('how dare youuuuu!!! you clicked me', e.target.value)
} 