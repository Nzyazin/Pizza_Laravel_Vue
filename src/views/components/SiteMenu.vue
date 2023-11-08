<template>
    <aside :class="[{ active: active }, 'navigation']">
      <nav>
        <slot></slot>
      </nav>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="svg-arrow-bright"
        width="100%"
        viewBox="0 0 100 5"
      >
        <polygon points="0,0 0,2, 50,5, 100,2, 100,0" />
      </svg>
    </aside>
  </template>
  
<script>
  export default {
    props: {
      active: Boolean,
    },
  };
  </script>
  
  <style scoped>
  nav {
    text-align: left;
    padding: 60px 36px 0 28px;
  }
  .navigation {
    position: absolute;
    transform: translateY(-96%);
    width: 100%;
    background-color: #8849cf;
    z-index: 1;
    transition: transform 0.4s ease-in-out;
  }
  
  .svg-arrow-bright {
    position: absolute;
    left: 0;
    fill: #8849cf;
  }
  .active {
    margin-top: 0;
    transform: translateY(-20px);
    transition: transform 0.4s ease-in-out;
  }
</style>
  