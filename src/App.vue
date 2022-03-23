<template>
<div>
  <button v-on:click="get">get categories</button>
   <ul v-for="cat in categories" :key="cat">
                <li> id : {{cat.idCat}} </li>
                 <li>  name : {{cat.Nomcat}} </li>
            </ul>
           <add />
</div>
</template>

<script>
import add from "./components/add.vue";
import axios from "axios";

export default {
  name: 'App',
  data(){
        return {
            categories:[],
           
            
            
        }
    },
  components: {
  add
  }, 
  methods :{
    get (){
      axios.get("http://127.0.0.1:8081/src/php/controller/Calls.php")
      .then(Response=>{
        console.log(Response)
        this.categories = Response.data;
      }).catch(e=>{
        console.log(e);
      })
      
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
