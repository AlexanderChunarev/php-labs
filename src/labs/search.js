function startSearch(str){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        console.log(this.responseText);
        document.getElementById("Result").innerHTML = this.responseText;
    }

    xhttp.open('GET', "lab7_script.php?value=" + str);
    xhttp.send();
}