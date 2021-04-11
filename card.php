<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.svg">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/card.css">

    <title>Ontino - Card</title>
</head>
<body>

    <?php $page = 'card'; include('header.php')?>

    <div class="upper_block">
        <h1>Корзина</h1>
        <svg width="60" height="49" viewBox="0 0 60 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="39" r="10" fill="#A4031F"/>
            <circle cx="30" cy="10" r="10" fill="#A4031F"/>
            <circle cx="50" cy="39" r="10" fill="#A4031F"/>
        </svg>
        <p>Заказывайте свежие блюда прямо на дом</p>
    </div>
    

    <div class="wrapper">
        <div class="lineOfTable">
            <div>Продукт</div>
            <div>Цена</div>
            <div>Количество</div>
            <div>Сума</div>
            <div>&nbsp;</div>
        </div>
        <div class="lineOfTable">
            <div>Яичница</div>
            <div>50₴</div>
            <div>1</div>
            <div>50₴</div>
            <div><a href="" class="close"></a></div>
        </div>
        <div class="lineOfTable">
            <div>Стейк</div>
            <div>500₴</div>
            <div>1</div>
            <div>500₴</div>
            <div><a href="" class="close"></a></div>
        </div>


        <div class="result">
            <p>Общая сумма: 550₴</p>
            <button><a href="">Подтвердить</a></button>
        </div>
    </div>

    <?php require('footer.php')?>

    <script src="js/menu.js"></script>
</body>
</html>