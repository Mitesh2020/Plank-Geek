<?php

function generateGoogleTranslate() {
    echo '<div id="google_element">';
    echo '<script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>';
    echo '<script>
                function loadGoogleTranslate() {
                    new google.translate.TranslateElement({pageLanguage: "en", layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, "google_element");
                }
            </script>';
    echo '</div>';
}

?>
