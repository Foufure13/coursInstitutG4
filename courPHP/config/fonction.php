<?php 

echo "Config Fonction importé <br>";
function Bprint($text,$color) {
    
    switch ($color) {
        case 'R':
        case 'r':
            echo '<p class="beautifullPrintRED">'.$text.'</p>';
            break;
        case 'W':
        case 'w':
            echo '<p class="beautifullPrintYELLOW">'.$text.'</p>';
            break;
        case 'I':
        case 'i':
            echo '<p class="beautifullPrintGREEN">'.$text.'</p>';
            break;
        
        default:
            echo '<p class="beautifullPrintBLUE">'.$text.'</p>';
            break;
    }
}


function Sprint($text) {
    echo '<em class="beautifullPrintBLUE">'.$text.'</em><br>';
}







?>