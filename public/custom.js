http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate

function loadGoogleTranslate() {
    new google.translate.TranslateElement('google_translate_element');
}

document.addEventListener("DOMContentLoaded", function() {
    var translateToolbar = document.querySelector('.skiptranslate');
    if (translateToolbar) {
        translateToolbar.style.display = 'none';
    }
});

$(document).ready(function() {
    var textToFind = "Powered by "; // Dhoondhne wala text
    var bodyHTML = $('body').html(); // Poore body ka HTML le lo

    if (bodyHTML.includes(textToFind)) {
        var newHTML = bodyHTML.replace(textToFind, '');
        $('body').html(newHTML);
    }
});

document.body.querySelectorAll('*').forEach(element => {
    if (element.textContent.includes('Powered by ')) {
        element.remove();
    }
});




