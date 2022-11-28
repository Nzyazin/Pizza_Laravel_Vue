import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "main",
      component: () => import('../views/main/Index.vue')
    },
    {
      path: "/pizza",
      name: "pizza",
      component: () => import('../views/pizza/Index.vue')
    },
      {
          path: "/cart",
          name: "cart.index",
          component: () => import('../views/cart/Index.vue')
      },
  ]
})

export default router
