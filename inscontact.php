<? include "inc/bd.php";


$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$array = array( 
    'Name: ' => $name,
    'Email: ' => $email,
    'Message: ' => $msg,
);

$token = "";
$chat_id = ;
?>
<!--<pre>
<?//print_r($array);?>
</pre>
<?
foreach($array as $key => $value) {
    $text.="<b>".$key."</b>".$value."%0A";
}    
$sendTelegran = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");


if($sendTelegram) {
    echo "Инфа отправлена";
}else{
    echo "err";
}