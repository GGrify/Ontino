<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.svg">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Ontino</title>
</head>
<body>

    <?php $page = 'main'; include('header.php')?>

    <div class="firstScreen">
        <h1>Ontino</h1>
        <p>Готовы быть открыты для вас</p>
    </div>
    
    <div class="wrapper">
        <div>
            <h2>Меню</h2>
            <p>У нас огромное количество вкусных блюд, каждый посетитель найдет себе что-то по душе. Абсолютно все сделано прекрасными поварами из продуктов высочайшего качества.</p>
            <a href="menu.pdf">Полное меню</a>
        </div>
        <div>
            <img src="img/food.jpg" alt="foodFoto">
        </div>
        <div>
            <img src="img/deliver.jpg" alt="Deliver">
        </div>
        <div>
            <h2>Онлайн заказ</h2>
            <p>У вас есть прекрасная возможность заказать любое блюдо для себя прямо у себя дома. Наш курьер доставит ваш заказ в любую точку города в короткие сроки.</p>
            <a href="shop.php">Перейти в магазин</a>
        </div>
        <div>
            <h2>Бронирование</h2>
            <p>Чтобы забронировать столик, вам необходимо позвонить по нашему номеру. Ресторан открыт с 7 до 12 часов. По тому же времени работает прием заказов.</p>
            <a href="">+1 (234) 567-89-00</a>
        </div>
        <div>
            <img src="img/tables.jpg" alt="Tables">
        </div>
    </div>

    <h2 class="h2Iterer">Интерьер</h2>
    <!-- Слайдер -->
    <div class="slider">
        <div class="slider__wrapper">
          <div class="slider__items">
            <div class="slider__item">
                <img style="width: 100%;" src="img/interer.jpg" alt="">
            </div>
            <div class="slider__item">
                <img style="width: 100%;" src="img/interer.jpg" alt="">
            </div>
            <div class="slider__item">
                <img style="width: 100%;" src="img/interer.jpg" alt="">
            </div>
            <div class="slider__item">
                <img style="width: 100%;" src="img/interer.jpg" alt="">
            </div>
            <div class="slider__item">
                <img style="width: 100%;" src="img/interer.jpg" alt="">
            </div>  
          </div>
        </div>
      </div>


    <?php require('footer.php')?>

    <script src="js/slider.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>