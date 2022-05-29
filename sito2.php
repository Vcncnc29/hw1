<?php
if(isset($_POST['inserisci'])){
    $in=$_POST['inserisci'];

$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://api-mobilespecs.azharimm.site/v2/search?query='.$in);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
$res=curl_exec($curl);

curl_close($curl);
echo ($res);
}
?>


