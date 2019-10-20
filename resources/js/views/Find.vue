<template>
	<div>
	<nav-bar></nav-bar>
	<v-container>
		<v-btn text to="/inicio">usuario {{id}} </v-btn>
		<p></p>
	    <v-simple-table v-if="datos">
	    <template v-slot:default>
	      <thead>
	        <tr>
	          <th class="text-left">nombre</th>
	          <th class="text-left">email</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td>{{ datos.name }}</td>
	          <td>{{ datos.email }}</td>
	        </tr>
	      </tbody>
	    </template>
  </v-simple-table>
  	<v-btn class="primary" text to="/inicio">regresar</v-btn>
	</v-container>
	</div>
</template>
<script>
import Nav from '.././partials/NavBar.vue'
	export default{
		data(){
			return{
				datos:[]
			}
		},
		props: ['id'],
		components:{
			'nav-bar':Nav
		},
		created(){
			let url = 'http://127.0.0.1:8000/usuarios/' + this.id;
			axios.get(url)
			.then(response=>{
			//console.log(response)
			if(response.data.id	){
			this.datos = response.data;
			}else{
			return this.$router.push('/404')
			}
			})
			.catch(error=>{
			return this.$router.push('/404')
			})//TODO hay un errror que cuando colocas ejemplo http://127.0.0.1:8000/usuarios/11asndaks, la url si funciona, laravel encuentra el id de alguna manera
			//TODO por un pequeño momento la pagina muestra toda la informacion, antes de verificar si existe o no, hay que solucionarlo
			;
		}

	}
</script>