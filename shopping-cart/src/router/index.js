import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import shopping from '@/components/shopping'
import cart from '@/components/cart'

Vue.use(Router)
	export default
	new Router({
	  routes: [{
	    path: '/',
	    name: 'shopping',
	    component: shopping
	  },
	   {
	     path: '/cart',
	     name: 'cart',
	     component: cart
	   }
	  ]
	})