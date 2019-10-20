<template>
  <div>
  	<nav-bar></nav-bar>
  	<v-container>
    <h1 class="display-4">Listado de Usuarios</h1>

    <v-simple-table v-if="datos">
	    <template v-slot:default>
	      <thead>
	        <tr>
	          <th class="text-left">nombre</th>
	          <th class="text-left">email</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr v-for="item in datos" :key="item.name">
	          <td>{{ item.name }}</td>
	          <td>{{ item.email }}</td>
	          <td><v-btn text :to="{name:'find', params: {id : item.id}}">detalles</v-btn></td>
	        </tr>
	      </tbody>
	    </template>
  </v-simple-table>
  	</v-container>
  </div>
</template>
<script>
import Nav from '.././partials/NavBar.vue'
	export default{
		components:{
			'nav-bar':Nav
		},
		data(){
			return{
				datos:[]
			}
		},
		methods:{
			traerMetodos(){
				let url = 'http://127.0.0.1:8000/api/usuarios'
				axios.get(url)
				.then(res=>{
					this.datos=res.data;
				});
			}
		},
		mounted(){
			this.traerMetodos()
		}
	}
</script>

