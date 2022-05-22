if(window.innerWidth < 1024){
    var conf = confirm("The site is not ready for Mobile Devices\nContinue ?");
  if(conf == false) {
      document.location = "https://www.google.com/";
  }   
}

function clock() {
    var def = new Date();
    var h = def.getHours();
    var m = def.getMinutes();
    var s = def.getSeconds();
  m = checktime(m);
  s = checktime(s);
    $('.clock').text(h + ":" + m + ":" + s);
    setTimeout(clock, 500);
}

function checktime(t) {
    if(t<10) {
        t = "0" + t;
    }
    return t;
}

function serverrequest() {
    setInterval(pending, 500);
}

function pending() {
   $.ajax({
       method: "GET",
       url: "counter.txt",
       cache: false
   })
    .done(function(data){
        $('#count').text(data);
    });
}

function checking() {
    var xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            var z = this.responseText;
             if(z != undefined) {
                 autoclicking(z);
             } else {
                 alert("Server Error!");
                 alert(z);
             }
        }
    };
    xhttp.open("GET", "check.txt", true);
    xhttp.send();
    
  function autoclicking(x){
      if(x == 1){
          setInterval(autoclick, 1000);
      } else { return; }
  }    
}

function autoclick() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.open("GET", "autoclick.php", true);
    xhttp.send();
}

function updateing() {
    var x = document.getElementById("count").innerHTML;
    x++;
    document.getElementById("count").innerHTML = x;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById("count").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","update.php",true);
    xhttp.send();
    
   document.getElementsByTagName("button")[1].disabled = true;
    setTimeout(disable,300);
    function disable() {
   document.getElementsByTagName("button")[1].disabled = false;
}
}


var y;

function Autorequest() {    
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            y = this.responseText;
            
    if(y < 10000) {
     alert("Not enough point");
     return;
        
 } else {
     
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            alert("Buy was successfull");
        }
    };
    xhttp.open("GET","upgrade.php",true);
    xhttp.send();
}
    y = undefined;
        }
    };
    http.open("GET","counter.txt",true);
    http.send();    
    }

function achivstart(){
    setInterval(achivcheck, 2000);
}

function achivcheck() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            var a = JSON.parse("["+this.responseText+"]");
             achivopen(a);
        }
    };
    xhttp.open("GET","statuses.txt",true);
    xhttp.send();
}

function achivopen(check) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
           var x = this.responseText;
            if(x >= 10000){
                check[0] = 1;
                save(check);
          }
        }
    };
    xhttp.open("GET","counter.txt",true);
    xhttp.send();
}
 function save(check) {   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            var obj = JSON.stringify(check);
        }
    };
     xhttp.open("POST","stats.php",true);
     xhttp.send(check);
 }

function rewardcheck() {
    
     var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            var a = JSON.parse("["+this.responseText+"]");
            if(a[0] == 1){
                document.getElementsByClassName("alert")[0].style.height = "10%";
                document.getElementsByClassName("alert")[0].style.minHeight = "78px";
                document.getElementsByClassName("achiv")[0].style.display = "block";
                setTimeout(closing, 2000);
                }
    }
        };
    
    xhttp.open("GET","statuses.txt",true);
    xhttp.send();
}

function closing() {
         document.getElementsByClassName("alert")[0].style.height = "0%";
         document.getElementsByClassName("alert")[0].style.minHeight = "0px";
         document.getElementsByClassName("achiv")[0].style.display = "none";
}