import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "main",
      component: () => import('../views/main/Index.vue'),
      props: true
    },
    {
      path: "/pizza",
      name: "pizza",
      component: () => import('../views/pizza/Index.vue'),
      props: true
    },
    {
      path: "/cart",
      name: "cart",
      component: () => import('../views/cart/Index.vue'),
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
