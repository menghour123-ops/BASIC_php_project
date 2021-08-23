<?php
include_once('partial/header.php'); 
include_once('partial/navbar.php');
//get each page
if (isset($_GET['page'])){

    if($_GET['page']=='home'){
        include_once('pages/home.php');
    }else{
        include_once('pages/places.php');
   
    }

}else{
    include_once('pages/home.php');
}
include_once('partial/footer.php'); 