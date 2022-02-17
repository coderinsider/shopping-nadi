<template>
	<div>
		<p>I am here to do something for you</p>
		<router-view></router-view>
	</div>
</template>
<script>

import { createRouter, createWebHistory }  from 'vue-router';
import MenuItem from './MenuItem.vue'
import CategoryManager from './CategoryManager.vue';

export default {
	router: new createRouter({
		mode: 'history',
		history: createWebHistory(),
		routes: [
		  {
		    path: '/categories',
		    name: 'categories',
		    component: MenuItem
		  },
		  {
		  	path: '/',
		  	redirect: { name: 'categories'}
		  },
		  {
		  	path: '/add-item',
		  	name: 'add-item',
		  	component: MenuItem
		  }
		]
	})
}
</script>