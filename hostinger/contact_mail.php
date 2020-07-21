<?php
require_once("get_response.php");




$toEmail = "nadarstores1970@gmail.com";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
if(mail($toEmail, $_POST["your_name"], $yourProducts, $mailHeaders)) 
{
echo"<p class='success'>Order Placed Sucessfully.</p>";
} 
else {
echo"<p class='Error'>Problem in placing order.</p>";
}
?>
<!-- 
mail(to,subject,message,headers,parameters); -->