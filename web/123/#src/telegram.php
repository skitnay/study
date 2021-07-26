<?php

/* https://api.telegram.org/bot1524948755:AAH07wC9UXo6pKCLO2La-0jW3SByNpJ4CmE/getUpdates,

XXXXXXXXXXXXXXXXXXXXXXX*/

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$token = "1524948755:AAH07wC9UXo6pKCLO2La-0jW3SByNpJ4CmE";
$chat_id = "-496557698";
$arr = array(
  'Имя : ' => $name,
  'Телефон : ' => $phone,
  'Email :' => $email,
  'Адрес :' => $adress
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>