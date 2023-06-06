import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/paintings',
    name: 'paintings',
    component: () => import('@/views/paintingsPage') //тот файл, куда будет переход
  },
  {
    path: '/halls',
    name: 'halls',
    component: () => import('@/views/hallsPage'),
  },
  {
    path: '/painting-edit/:id?',
    name: 'painting-edit',
    component: () => import('@/views/paintingEdit'),
  },
  {
    path: '/painting-create/:id?',
    name: 'painting-create',
    props: (route) => {
      return {
        id: route.params.id,
      }
    },
    component: () => import('@/views/paintingCreate'),
  },
  {
    path: '/hall-edit/:id?',
    name: 'hall-edit',
    component: () => import('@/views/hallEdit'),
  },
  {
    path: '/:catchAll(.*)',
    name: 'NotFound',
    component: () => import('@/views/paintingsPage'),
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
