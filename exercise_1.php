<?php

$str = "nf fhf sdgfs gj j jfhgdgfgbv b hgdhgbv";

foreach (count_chars($str, 1) as $i => $val) {
   echo "\"", chr($i) , "\" встречается в строке $val раз(а).\n";
}

?>
