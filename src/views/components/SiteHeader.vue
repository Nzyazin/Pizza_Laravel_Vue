<template>
<header class="site-header">
    <div class="header-top">
    <button class="burger-button" @click="toggleMenu">
        <span v-if="!activeIcon" class="burger-bar burger-bar-one"></span>
        <span
        v-else
        class="burger-bar burger-bar-one burger-bar-one--active"
        ></span>
        <span v-if="!activeIcon" class="burger-bar burger-bar-two"></span>
        <span
        v-else
        class="burger-bar burger-bar-two burger-bar-two--active"
        ></span>
        <span v-if="!activeIcon" class="burger-bar burger-bar-three"></span>
        <span
        v-else
        class="burger-bar burger-bar-three burger-bar-three--active"
        ></span>
    </button>

    <h1>QUIZBOX</h1>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        class="svg-arrow"
        width="100%"
        viewBox="0 0 100 5"
    >
        <polygon points="0,0 0,2, 50,5, 100,2, 100,0" />
    </svg>
    </div>
    <SiteMenu :active="active">
        <router-link @click="toggleMenu" :to="{name: 'main'}">Главная</router-link>
        <router-link @click="toggleMenu" :to="{ name: 'home' }">Заказать</router-link>
        <router-link @click="toggleMenu" :to="{ name: 'cart' }">Корзина</router-link>
    </SiteMenu>
</header>
</template>
  
  <script>
  import SiteMenu from "../components/SiteMenu.vue";
  export default {
    components: { SiteMenu },
    data() {
      return {
        active: false,
        activeIcon: false,
      };
    },
    methods: {
      toggleMenu() {
        this.active = !this.active;
        this.activeIcon = !this.activeIcon;
      },
    },
  };
  </script>
  
  <style scoped>
  h1 {
    margin-left: 68px;
  }
  .site-header {
    color: #fbfbfbfb !important;
    position: relative;
  }
  
  .header-top {
    position: relative;
    background-color: #6a1cc3;
    z-index: 2;
    display: flex;
    align-items: center;
  }
  
  .burger-button {
    all: unset;
    position: relative;
    width: 30px;
    height: 40px;
    background-color: transparent;
    margin-left: 32px;
  }
  
  .burger-bar {
    height: 2px;
    background-color: #fbfbfbfb;
    width: 100%;
    position: absolute;
    border-radius: 5px;
  }
  
  .burger-bar-three {
    left: 0px;
    top: 66%;
  }
  
  .burger-bar-two {
    left: 0px;
    top: 33%;
  }
  .burger-bar-one {
    left: 0px;
  }
  
  .burger-bar-one--active {
    transform: rotate(45deg);
  }
  
  .burger-bar-two--active {
    top: 50%;
    transform: rotate(135deg);
  }
  
  .burger-bar-three--active {
    display: none;
  }
  
  a {
    padding: 0 0 8px 8px;
    margin-bottom: 16px;
    display: block;
    color: var(--surface-color);
    border-bottom: 1px solid #fbfbfbfb;
    text-decoration: none;
  }
  
  .svg-arrow {
    position: absolute;
    bottom: -20px;
    left: 0;
    z-index: 1;
    fill: #fbfbfbfb;
    width: 100%;
  }
  </style>
  