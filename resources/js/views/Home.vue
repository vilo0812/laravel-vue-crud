<template>
	<div>
	<nav-bar></nav-bar>
	<v-container>
		<v-btn text to="/inicio">usuarios</v-btn>
		<h1 class="text-center display-2">Home projecto laravel + vue + vuetify from styde.net</h1>
	</v-container>
	</div>
</template>
<script>
import Nav from '.././partials/NavBar.vue'
	export default{
		components:{
			'nav-bar':Nav
		}
	}
</script>