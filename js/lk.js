$(document).ready(function() {
    // Настройка маски для номера телефона
    $('#phone').mask('+7 (999) 999-99-99');
    
    // Настройка маски для электронной почты
    $('#email').mask('A', {
        translation: {
            'A': { pattern: /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/ }
        }
    });
});
