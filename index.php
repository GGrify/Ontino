<?php
    if($_GET['page'] == 'main'){
        include('main.php');
    }
    if($_GET['page'] == 'contact'){
        include('contact.php');
    }
    if($_GET['page'] == 'shop'){
        include('shop.php');
    }
    if($_GET['page'] == 'card'){
        include('card.php');
    }
?>