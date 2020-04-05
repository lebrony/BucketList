function open_profile(elmnt) {
    var a = document.getElementById("googleSearch");
    document.getElementById("googleSearch").style.visibility = "visible";
    if (a.style.display == "") {
        a.style.display = "none";
        elmnt.innerHTML = "<i class='fas fa-user'></i>";
    } else {
        a.style.display = "";
        if (document.getElementById("gsc-i-id1")) {
            document.getElementById("gsc-i-id1").focus();
        }
        elmnt.innerHTML = "<i class='fas fa-user'></i>";
    }
}

function add_bucket(elmnt) {
    var b = document.getElementById("addItem");
    document.getElementById("addItem").style.visibility = "visible";
    if (b.style.display == "") {
        b.style.display = "none";
        elmnt.innerHTML == "<i class='fas fa-plus'></i>";
    } else {
        b.style.display = "";
        if (document.getElementById("gsc-i-id1")) {
            document.getElementById("gsc-i-id1").focus();
        }
        elmnt.innerHTML = "<i class='fas fa-plus'></i>"
    }
}