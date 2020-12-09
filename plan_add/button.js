//初期表示は非表示
document.getElementById("address2").style.display ="none";
document.getElementById("fab2").style.display ="none";
document.getElementById("address3").style.display ="none";
document.getElementById("fab3").style.display ="none";

function clickBtn1(){
    const address2 = document.getElementById("address2");
    const fab = document.getElementById("fab");
    const fab2 = document.getElementById("fab2");

    // noneで非表示
    fab.style.display ="none";
    // blockで表示
    address2.style.display ="block";
    // blockで表示
    fab2.style.display ="block";
}
function clickBtn2(){
    const address3 = document.getElementById("address3");
    const fab2 = document.getElementById("fab2");
    const fab3 = document.getElementById("fab3");

    // noneで非表示
    fab2.style.display ="none";
    // blockで表示
    address3.style.display ="block";
    // blockで表示
    fab3.style.display ="block";
}