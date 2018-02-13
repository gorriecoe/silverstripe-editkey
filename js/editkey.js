/**
Enables the use of the key press to access cms page edit
use: ctrl+e
use: alt+e
*/
function doc_keyUp(e) {
    if(e.altKey && e.keyCode == 69) {
        window.open("$Link");
    }
}

if (document.addEventListener) {
    document.addEventListener('keyup', doc_keyUp, false);
} else if (document.attachEvent) {
    document.attachEvent('keyup', doc_keyUp);
}
