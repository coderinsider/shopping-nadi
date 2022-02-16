<template>
	<div>
		<p>I am here to do something for you</p>
		<router-view></router-view>
	</div>
</template>
<script>
import VueRouter from 'vue-router';
import CategoryManager from './CategoryManager.vue';
import MenuItem from './MenuItem.vue';
export default {
	router: new VueRouter({
		routes: [
			{
				path: '/categories',
				name: 'categories',
				component: CategoryManager
			}, 
			{
				path: '/',
				redirect: {name: 'categories'}
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