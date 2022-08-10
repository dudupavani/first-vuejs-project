import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'AboutView',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/projetos',
      name: 'ProjetosView',
      component: () => import('../views/ProjetosView.vue')
    },
    {
      path: '/blog',
      name: 'BlogView',
      component: () => import('../views/BlogView.vue')
    },
    {
      path: '/faleconosco',
      name: 'FaleconoscoView',
      component: () => import('../views/FaleconoscoView.vue')
    }
  ]
})

export default router
