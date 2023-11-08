<template>
    <header class="site-header">
      <div class="header-top">
        <div class="menubar" @click="addActiveClass">
            <span></span>
            <span></span>
            <span></span>
        </div>  
      </div>
      <MobileMenu >
        <li class="dropdown-list"> <router-link :to="{name: 'main'}"> <span>Главная </span> </router-link></li>
        <li class="dropdown-list"> <router-link :to="{name: 'home'}"> <span>Заказать </span> </router-link></li>
        <li class="dropdown-list"> <router-link :to="{name: 'cart'}"> <span>Корзина </span> </router-link></li>
      </MobileMenu>
    </header>
  </template>
  
<script>
import MobileMenu from "../mobile_menu/MobileMenu.vue";
export default {
components: { MobileMenu },
data() {
    return {
        active: false,
        activeIcon: false,
    };
},
methods: {
    addActiveClass() {
        const menubarElement1 = document.querySelector('.mobile-menu__sidebar-menu');
        const menubarElement2 = document.querySelector('.menu-closer');
        if (menubarElement1) {
            menubarElement1.classList.add('active');
            menubarElement2.classList.add('active');
        }
    },
},
};
</script>
  
<style scoped>
</style>