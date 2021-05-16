<? php
if(isset($_POST['btn-send']))
{
$UserName = $_POST['UName'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Msg = $_POST['Msg'];

if(empty($userName) || empty($Email) || empty($Subject) || empty($Mag))
{
header('Location.ContactUs.php?error');
}
else
{
$to = "admin@onlineittuts.com";
if(mail($to,$Subject,$Msg,$Email))
{
header("Location ContactUs.php?success");
}
}

}
else
{
header("Location:ContactUs.php");
}
?>
