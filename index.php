<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хостинг-сервіс HorNaHost</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .logo h1 {
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .hero {
            background-color: #fff;
            text-align: center;
            padding: 50px 20px;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .cta-btn {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .plans {
            text-align: center;
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        .plans h2 {
            font-size: 2rem;
            margin-bottom: 40px;
        }

        .plan {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px;
            display: inline-block;
            width: 250px;
            vertical-align: top;
        }

        .plan h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .plan p {
            font-size: 1rem;
        }

        .price {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 20px 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        section {
            margin-top: 50px;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>HorNaHost</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Головна</a></li>
                <li><a href="#plans">Тарифні плани</a></li>
                <li><a href="#contact">Контакти</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
        <h2>Надійний веб-хостинг для вашого сайту</h2>
        <p>Реєструйтесь та обирайте свій план вже сьогодні!</p>
        <a href="#plans" class="cta-btn">Оплатити зараз</a>
    </section>

    <section class="plans" id="plans">
        <h2>Наші тарифні плани</h2>
        <div class="plan">
            <h3>Базовий план</h3>
            <p>100 ГБ місця, 1 домен</p>
            <p class="price">5$/місяць</p>
            <a href="#contact" class="cta-btn">Обрати</a>
        </div>
        <div class="plan">
            <h3>Преміум план</h3>
            <p>Необмежене місце, 5 доменів</p>
            <p class="price">15$/місяць</p>
            <a href="#contact" class="cta-btn">Обрати</a>
        </div>
    </section>

    <section id="contact">
        <h2>Контактна інформація</h2>
        <p>Зв'яжіться з нами: +380987608895</p>
        <p>Email: support@hornahost.pp.ua</p>
    </section>

    <footer>
        <p>© 2024 HorNaHost. Усі права захищені.</p>
    </footer>

</body>
</html>
