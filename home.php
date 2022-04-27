<?php 
session_start();
if (!isset($_SESSION['user'])){
    header('location:login.php');

}
$pageTitle="home";
include_once 'fragments/header.php';


?>
<h1>hello</h1>

    
</body>
</html>