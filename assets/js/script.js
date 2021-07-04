document.querySelectorAll('header nav.top-header__menu ul li a').forEach( e => {
    if(e.href == window.location.href) e.parentNode.classList.add('active');
});


/**
 * Function gamburger
 */
// Функция меню гамбургер
(() => {
    // Получаем переменные гамбургера 
    const gamb = document.querySelector('.gamburger');
    const topNav = document.querySelector('header nav.top-header__menu ul');
    const logoType = document.querySelector('header .top-header__logo');
    // Добавляем или убираем active для гамбургер меню
    gamb.addEventListener('click', () => { 
        gamb.classList.toggle('active'); 
        topNav.classList.toggle('active');
        logoType.classList.toggle('d-none');
    });
})();