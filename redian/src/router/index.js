import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import index from '@/components/pageone/index.vue'

import pagetwo from '@/components/pagetwo/pagetwo.vue'
import pagetwoa from '@/components/pagetwo/pagetwoa.vue'
import pagetwob from '@/components/pagetwo/pagetwob.vue'
import pagetwoc from '@/components/pagetwo/pagetwoc.vue'
import pagetwod from '@/components/pagetwo/pagetwod.vue'

import pagethree from '@/components/pagethree/pagethree.vue'
import pagethreea from '@/components/pagethree/pagethreea.vue'
import pagethreeb from '@/components/pagethree/pagethreeb.vue'
import pagethreec from '@/components/pagethree/pagethreec.vue'
import pagethreed from '@/components/pagethree/pagethreed.vue'

import pagefour from '@/components/pagefour/pagefour.vue'

Vue.use(Router)

export default new Router({
    routes: [
	    {
	      path: '/',
	    	name: 'index',
	    	component: index
	    },
	    {
	    	path: '/index',
	    	name: 'index',
	    	component: index
	    },
	    {
	    	path: '/pagetwo',
	    	name: 'pagetwo',
	    	component: pagetwo,
	    	children:[
	    		{path:'',component: pagetwoa},
	    		{path:'pagetwoa',component: pagetwoa},
	    		{path:'pagetwob',component: pagetwob},
	    		{path:'pagetwoc',component: pagetwoc},
	    		{path:'pagetwod',component: pagetwod}
	    	]
	    },
	    {
	    	path: '/pagethree',
	    	name: 'pagethree',
	    	component: pagethree,
	    	children:[
	    		{path:'',component: pagethreea},
	    		{path:'pagethreea',component: pagethreea},
	    		{path:'pagethreeb',component: pagethreeb},
	    		{path:'pagethreec',component: pagethreec},
	    		{path:'pagethreed',component: pagethreed}
	    	]
	    },
	    {
	    	path: '/pagefour',
	    	name: 'pagefour',
	    	component: pagefour
	    }
    ]
})
