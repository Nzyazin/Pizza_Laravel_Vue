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
  ]
})

export default router
