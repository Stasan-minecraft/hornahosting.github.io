<?php
// Визначаємо функцію для отримання інформації про підключені пристрої
function getConnectedDevices() {
    // Використовуємо команду для отримання інформації про підключені пристрої
    // Для Linux
    $devices = shell_exec('lsusb');
    
    // Якщо пристрої підключені, вивести їх
    if ($devices) {
        return nl2br($devices);
    } else {
        return "Пристрої не знайдено.";
    }
}

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка підключених пристроїв</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        pre {
            background-color: #333;
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Перевірка підключених пристроїв</h1>
    <p>Цей сайт перевіряє, які пристрої підключені до вашого комп'ютера (на сервері).</p>
    
    <h2>Підключені пристрої:</h2>
    <pre><?php echo getConnectedDevices(); ?></pre>
</div>

</body>
</html>
