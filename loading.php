<h1 style="color:black;font-family:verdana;">Welcome to the A Kavi Websites Production Status Portal</h1> 
<br>
<br>
<?php
session_start();
sleep(10);
$_SESSION['ready'] = false;
echo '<img src="loading.gif">';
if ($_SESSION['doneYet'] == true){
    echo "Redirecting Back to Main Portal...";
    sleep(1);
    header("Location: index.php");
    $_SESSION['ready'] = true;
}

?>
