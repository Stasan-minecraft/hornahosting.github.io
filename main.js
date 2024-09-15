// Скрипт для кнопок і перенаправлення
document.addEventListener("DOMContentLoaded", function() {
    
    // Кнопка для оплати — перенаправляє на сторінку з оплатою
    document.getElementById("payment-btn").addEventListener("click", function(event) {
        event.preventDefault(); // Запобігає перезавантаженню сторінки
        window.location.href = "payment"; // Сторінка для оплати
    });

    // Кнопка для базового плану — перенаправляє на сторінку вибору базового плану
    document.getElementById("basic-plan-btn").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "plans/basic"; // Сторінка базового плану
    });

    // Кнопка для преміум плану — перенаправляє на сторінку вибору преміум плану
    document.getElementById("premium-plan-btn").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "plans/premium"; // Сторінка преміум плану
    });

});
