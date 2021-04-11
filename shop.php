<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.svg">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shop.css">

    <title>Ontino - Shop</title>
</head>
<body>

    <?php $page = 'shop'; include('header.php')?>

    <div class="upper_block">
        <h1>Онлайн заказ</h1>
        <svg width="60" height="49" viewBox="0 0 60 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="39" r="10" fill="#A4031F"/>
            <circle cx="30" cy="10" r="10" fill="#A4031F"/>
            <circle cx="50" cy="39" r="10" fill="#A4031F"/>
        </svg>
        <p>Блюда ручной работы из лучших ингредиентов</p>
    </div>
    
    <div class="wrapper">
        <div class="list">
            <a class="active_list" href="#">Все блюда</a>
            <a href="#">Первое</a>
            <a href="#">Второе</a>
            <a href="#">Десерты</a>
            <a href="#">Напитки</a>
        </div>
        <select name="" id="" class="selector">
            <option value="">По популярности</option>
            <option value="">От дешевых</option>
            <option value="">От дорогих</option>
        </select>
        <div class="list_items">
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
            <div class="item"><a href="">
                <img src="img/food_1.png" alt="FoodFoto">
                <h2>Яичница</h2>
                <div class="line"></div>
                <span>50₴</span>
            </a></div>
        </div>
    </div>

    <?php require('footer.php')?>

    <script src="js/menu.js"></script>
</body>
</html>