<?php 

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
echo $ip;

?>

<?php

echo '<div> ciao </div>';
?>

<div> Ciao 2, sono fuori dal php</div>

<?php
echo 'Vaffaculo sono da php';

?>

<?php
$var = [31,11235122,4];
for($i = 0;$i<count($var);$i++){
    
?>
<div> sono il div: <?=$var[$i]?> </div>
<?php
}?>