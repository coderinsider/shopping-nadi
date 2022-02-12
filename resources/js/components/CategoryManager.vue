<template>
	<div>
		<div v-for="category in categories" :key="category.id">
			<p v-text="category.name"></p>
		</div>
	</div>
</template>
<script>
	export default {
		props: ['categories']
	}
</script>