import { createRouter, createWebHistory } from 'vue-router'
import Main from "../views/main/Index.vue";
import Product from "../views/product/Pizza.vue";
import Cart from "../views/cart/Index.vue";
import Home from "../views/pizza/Index.vue";

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
        path: "/home",
        name: "home",
        component: Home
    },
    {
      path: "/products/:id",
      name: "product",
      component: Product,
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
