<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.svg">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">

    <title>Ontino - Contact Us</title>
</head>
<body>

    <?php $page = 'contact'; include('header.php')?>

    <div class="upper_block">
        <h1>Свяжитесь с нами</h1>
        <svg width="60" height="49" viewBox="0 0 60 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="39" r="10" fill="#A4031F"/>
            <circle cx="30" cy="10" r="10" fill="#A4031F"/>
            <circle cx="50" cy="39" r="10" fill="#A4031F"/>
        </svg>
        <p>Напишите на почту или в соц сеть</p>
    </div>
    

    <div class="contacts">
        <div class="links">
                <h2>Мы в соц сетях</h2>
                <a href="">Instagram</a><br>
                <a href="">Facebook</a><br>
                <a href="">Twitter</a>
                <h2 class="phoneHead">Телефон:</h2>
                <a href="">+1 (234) 567-89-00</a>
        </div>
        <div class="message">
            <form action="action.php" class="form_contact" method="post">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name">
                <label for="email">Почта</label>
                <input type="text" id="email" name="email">
                <label for="message_area">Сообщение</label>
                <textarea name="text" id="message_area"></textarea>
                <input type="submit" value="Подтвердить">
            </form>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.913707090484!2d30.52080831573105!3d50.44270797947432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce558f9f07dd%3A0x160f3ed98dfabba2!2z0J3QvtC20LggT250YXJpbyAo0J7QvdGC0LDRgNC40L4p!5e0!3m2!1sru!2sro!4v1616426533655!5m2!1sru!2sro" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <?php require('footer.php')?>


    <script src="js/menu.js"></script>
</body>
</html>