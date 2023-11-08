<template>
    <div class="menu-closer" @click="removeActiveClass"></div>
    <div class="mobile-menu__sidebar-menu">
      <div class="menu-closer two" @click="removeActiveClass"> <span> Закрыть меню </span> <span class="cross"><i class="flaticon-cross"></i></span> </div>
      <ul class="page-dropdown-menu">
        <slot></slot>
      </ul>
    </div>
  </template>
  
<script>
  export default {
    methods: {
        removeActiveClass() {          
          const menubarElement1 = document.querySelector('.mobile-menu__sidebar-menu');
          const menubarElement2 = document.querySelector('.menu-closer');
          if (menubarElement1) {
            menubarElement1.classList.remove('active');
            menubarElement2.classList.remove('active');
          }
      }
    },
    props: {
      active: Boolean,
    },
  };
</script>
  
<style scoped>
</style>
  