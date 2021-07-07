const text = ["Hogy megörökíthesd<br> a legszebb pillanatokat",
            "Hogy a felejthetetlen pillanatok<br> tényleg azok maradjanak",
            "Hogy később újra átélhesd <br>ezeket az alkalmakat"];
let counter = 0;
let elem = document.getElementById("changeText");

change();

function change() {
    elem.classList.add('hide');
    setTimeout(function () {
        elem.innerHTML = text[counter];
        elem.classList.remove('hide');
        counter++;
        if (counter >= text.length) {
            counter = 0;
        }
    },1500);
}

setInterval(change, 4800);

