function acheck() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            var a = JSON.parse("["+this.responseText+"]");
             achivcheck(a);
        }
    };
    xhttp.open("GET", "statuses.txt", true);
    xhttp.send();
}

function achivcheck(arr) {
    for(var i = 0;i < arr.length;i++) {
        if(arr[i] == 1) {
            document.getElementsByClassName("trophy")[i].src = "Dogs/" + [i] + ".png";
        }
    }
}