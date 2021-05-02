window.addEventListener('DOMContentLoaded', () => {
   //   :::::: Menu
   const $menuBtn = document.querySelector('.header__btn');
   const $menuBtnIcon = document.querySelector('.header__btn .header__btn-icon');
   const $menu = document.querySelector('.header__navbar');
   const $menuStyle = window.getComputedStyle($menu);
   const $menuArrowIcon = document.querySelector('.header__arrow-icon');
   //   :::::: Submenu
   const $productos = document.querySelector('.header__menu .header__item:nth-child(3)');
   const $submenu = document.querySelector('.header__submenu');
   const $submenuStyles = window.getComputedStyle($submenu);
   const $submenuIcon = document.querySelector('.header__arrow-icon');

   $menuBtn.addEventListener('click', e => {
      // Cada vez que ejecutamos el evento pedimos el display para verificar en tiempo real
      const $menuDisplay = $menuStyle.getPropertyValue("display");

      if ($menuDisplay === "none") {
         $menu.style.display = "block";
         $menuBtnIcon.src = "src/assets/icons/icon__menu-close.svg";
      } else {
         $menu.style.display = "none";
         $menuBtnIcon.src = "src/assets/icons/icon__menu-open.svg";
      }
   });

   $productos.addEventListener('click', e => {
      // Cada vez que ejecutamos el evento pedimos el display para verificar en tiempo real
      const $subMenuDisplay = $submenuStyles.getPropertyValue("display");

      if ($subMenuDisplay === "none") {
         $submenu.style.display = "block";
         $submenuIcon.src = "src/assets/icons/icon__arrow.svg";
         $menuArrowIcon.classList.remove('rotate-down');
         $menuArrowIcon.classList.add('rotate-up');
      } else {
         $submenu.style.display = "none";
         $menuArrowIcon.classList.replace('rotate-up', 'rotate-down');
      }
   });
});