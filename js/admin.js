var option = document.querySelector(".events");
option.addEventListener('change', function () {
    console.log(option.value);
    if (option.value == 3) {
        document.querySelector(".hint").innerHTML = "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='hint'>Hint</label><div class='col-md-6 col-sm-6 col-xs-12'><textarea id='hint' required='required' class='form-control col-md-7 col-xs-12' type='text' name='hint'></textarea></div>";
        console.log("done");
    } else {
        document.querySelector(".hint").innerHTML = "";
    }
});

function gethint(qes) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("hint_" + qes).innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "db/gethint.php?q=" + qes, true);
    xmlhttp.send();
    document.querySelector(".hint_" + qes).disabled = true;
}

function showResult(qes) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "db/showresult.php?q=" + qes, true);
    xmlhttp.send();
}
var min = parseInt(document.querySelector('.countdown').innerText);
var sec = 60;

function countDown() {
    while (min >= 0) {
        min--;
        while (sec >= 0) {
            sec--;
            document.querySelector('.countdown').innerText = min + ":" + sec;
            setTimeout(function () {}, 1000);
        }
        sec = 60;
    }

}
countDown();