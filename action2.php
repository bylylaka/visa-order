<?php

  $count = count($_POST['2_FirstName']);
    $allData;
   for($i=0;$i<$count;$i++) {
  	$name1 = "User Name: ".$_POST['2_FirstName'][$i]."\n";
  	$name2 = "User Familia: ".$_POST['2_SecondName'][$i]."\n";
  	$passport = "Passport: ".$_POST['2_Passport'][$i]."\n";
  	$address = "Address: ".$_POST['2_textarea'][$i]."\n";
      $email = "Email: ".$_POST['2_email'][$i]."\n";
      $birn = "Birn: ".$_POST['2_calendar1'][$i]."\n";
      $visa = "Open visa: ".$_POST['2_calendar2'][$i]."\n";


  	$allData = $allData.$name1.$name2.$passport.$address.$email.$birn.$visa."\n\n";
   }

  $subject = "Work visa";
  $to = "maxim_arslanov@mail.ru, Mail@polishwork.pl, partner.belviz@gmail.com"; // адрес почты получателя
  $from = "Mail@polishwork.pl"; // адрес почты отправителя

 $message = $allData;


$resault = mail($to, $subject, $message, $headers);
header('Refresh: 1; URL=/test/index.html#win4'); 
echo 'Sending data to server...'; 

?>