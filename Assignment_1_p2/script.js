
var myJsOutput = document.getElementById("myJsOutput");
// var fibOutput = document.getElementById("fibOutput"); 
// var hollOutput = document.getElementById("hollOutput"); 

document.getElementById("myButton").onclick = function(){
    myJsOutput.innerHTML = "<br>";
    var tri = document.getElementById("myText").value;
    for (var i = 0; i <= tri; i++) {
    myJsOutput.innerHTML += " \n" + "<br>";
    for (var j = 0; j < i; j++) {
    myJsOutput.innerHTML += "*\n";
    }
  }
}

document.getElementById("myFibButton").onclick = function(){
    myJsOutput.innerHTML = "<br>";
    var fibSeq = document.getElementById("myFibonacci").value;
    var n1=0,n2=1,n3,i;  
    for (i=0;i<fibSeq;i++){  
     n3=n1+n2;  
     myJsOutput.innerHTML += " "+ n1 +" + "+n2+" = "+n3 +"<br>";  
     n1=n2;  
     n2=n3;  
    } 
}

document.getElementById("myHollowBtn").onclick = function(){
   var hollow = document.getElementById("myHollow").value;
   let string = "";
    
    for (let i = 0; i < hollow; i++) {
        for (let j = 0; j < hollow; j++) {
            if (i === 0 || i === hollow - 1) {
                string += "*";
            }
            else {
                if (j === 0 || j === hollow - 1) {
                    string += "*";
                }
                else {
                    string += " ";
                }
            }
        }
      string += "<br>";
    }
    myJsOutput.innerHTML = ("<pre>"+ string +"</pre>");
}
