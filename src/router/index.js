import { createRouter, createWebHistory } from 'vue-router'
import Main from "../views/main/Index.vue";
import Pizza from "../views/pizza/Index.vue";
import Cart from "../views/cart/Index.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "main",
      component: Main,
      props: true
    },
    {
      path: "/pizza",
      name: "pizza",
      component: Pizza,
      props: true
    },
    {
      path: "/cart",
      name: "cart",
      component: Cart,
      props: true
    },
    {
      path: "/new",
      name: "new",
      component: () => import('../views/new/Index.vue'),
      props: true
    },

  ]
})

export default router
