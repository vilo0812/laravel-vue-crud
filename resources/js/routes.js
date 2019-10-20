//importamos las vistas del Home
import Home from './views/Home.vue'
import Inicio from './views/Inicio.vue'
import Find from './views/Find.vue'
import NotFound from './errors/NotFound.vue'

export const routes = [
  /*
   |--------------------------------------------------------------------------
   | Home front end rutas
   |--------------------------------------------------------------------------|
   */
  {
    path:'/',
    component:Home,
    name:'home'
  },
  {
    path:'/inicio',
    component:Inicio,
    name:'inicio'
  },
  {
    path:'/find/:id',
    component:Find,
    name:'find',
    props:true
  },
  {
    path:'/',
    component:Find,
    name:'find',
  },


  { path: '/404', component: NotFound },  
  { path: '*', redirect: '/404' },  
]
  