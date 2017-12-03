import Vue from 'vue'
import Router from 'vue-router'
import shopping from '@/components/shopping'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'shopping',
      component: shopping
    }
  ]
})
