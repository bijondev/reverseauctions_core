<?php
include 'config.php';
if (!empty($_SESSION['email'])) {
?>
<?php include 'header.php'; ?>

<?php
if ($_SESSION['type']=="admin") {
	include 'home-admin-content.php';
}
else if($_SESSION['type']=="buyer")
{

}
else if($_SESSION['type']=="seller")
{
	include 'home-seller.php';
}
?>

<?php include 'footer.php'; ?>
<?php
}else{
	header("Location: login.php");
}
?>