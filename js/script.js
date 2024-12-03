function toggleMenu() {
    const nav = document.querySelector('header nav ul'); // Находим список ul
    const hamburger = document.querySelector('.hamburger'); // Находим гамбургер
    nav.classList.toggle('active'); // Переключаем класс active для меню
    hamburger.classList.toggle('active'); // Переключаем класс active для гамбургера
}