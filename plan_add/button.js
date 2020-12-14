//初期表示は非表示
document.getElementById("address2").style.display ="none";
document.getElementById("fab2").style.display ="none";
document.getElementById("address3").style.display ="none";
document.getElementById("fab3").style.display ="none";
document.getElementById("address4").style.display ="none";
document.getElementById("fab4").style.display ="none";
document.getElementById("address5").style.display ="none";
document.getElementById("fab5").style.display ="none";
document.getElementById("address6").style.display ="none";
document.getElementById("fab6").style.display ="none";
document.getElementById("address7").style.display ="none";
document.getElementById("fab7").style.display ="none";


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
function clickBtn3(){
    const address4 = document.getElementById("address4");
    const fab3 = document.getElementById("fab3");
    const fab4 = document.getElementById("fab4");

    // noneで非表示
    fab3.style.display ="none";
    // blockで表示
    address4.style.display ="block";
    // blockで表示
    fab4.style.display ="block";
}
function clickBtn4(){
    const address5 = document.getElementById("address5");
    const fab4 = document.getElementById("fab4");
    const fab5 = document.getElementById("fab5");

    // noneで非表示
    fab4.style.display ="none";
    // blockで表示
    address5.style.display ="block";
    // blockで表示
    fab5.style.display ="block";
}
function clickBtn5(){
    const address6 = document.getElementById("address6");
    const fab5 = document.getElementById("fab5");
    const fab6 = document.getElementById("fab6");

    // noneで非表示
    fab5.style.display ="none";
    // blockで表示
    address6.style.display ="block";
    // blockで表示
    fab6.style.display ="block";
}
function clickBtn6(){
    const address7 = document.getElementById("address7");
    const fab6 = document.getElementById("fab6");
    const fab7 = document.getElementById("fab7");

    // noneで非表示
    fab6.style.display ="none";
    // blockで表示
    address7.style.display ="block";
    // blockで表示
    fab7.style.display ="block";
}