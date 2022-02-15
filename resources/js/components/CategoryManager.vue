<template>
	<form @submit.prevent="saveCategory">
		<a @click="addCategory" class="add">Add Category</a>
		<div v-for="category in categories" :key="category.id">
			<input type="text" v-model="category.name" :ref="category.name"/>
			<input type="number" v-model="category.display_order" />
			<a @click="removeCategory(category)" class="remove">Delete</a>
			<div>
				<img v-if="category.image" :src="`/images/${category.image}`" width="100" />
				<label v-else="category.image">Image</label>
				<input type='text' v-model.lazy="category.image" />
			</div>
			<hr/>
		</div>
		<button type="submit">Save</button>
		<div v-text="feedback"></div>
	</form>
</template>
<script>
	import axios from 'axios';
	export default {
		props: ['initialcategories'],
		data() {
			return {
				feedback: '',
				categories: _.cloneDeep(this.initialcategories),
				whoLoveMe: "Soe Pyae Tha Zin",
			}
		},
		methods: {
			removeCategory(index) {
				var __self = this;
				console.log(index.id);
				if(confirm('Are you sure')) {
					console.log(index);
					var id = this.categories.length;
					console.info(id);
					if(id > 0) {
						axios.delete('/api/categories/' + index.id)
						.then((resp) => {
							console.log(`Successfully ${resp.data}`);
						})
						.catch((error) => {
							console.error('failed');
						})
					}
					this.categories.splice(index, 1);
				}
			},
			addCategory() {
				this.categories.push({
					id: 0,
					name: '',
					image: '',
					display_order: this.categories.length + 1,
				}); 
				this.$nextTick(() => {
					window.scrollTo(0, document.body.scrollHeight);
					this.$refs[''][0].focus();
				});
				
			},
			saveCategory() {
				axios.post('/api/categories/upsert', {
					categories: this.categories
				})
				.then((resp) => {
					if(resp.data.success) {
						this.feedback = "Change Saved";
						this.categories = resp.data.data;
					}
				})
				.catch((error) => {
					this.feedback = error;
				})
			}

		}
		
	}
</script>
<style scoped>
	img {
		vertical-align: middle;
	}
	hr {
		margin-bottom: 30px;
	}
</style>