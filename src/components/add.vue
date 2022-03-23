<template>
    <div>
        <form v-on:submit.prevent="Add()">
         <input type="text" name="name" v-model="name">
         
         <button>Add categories</button>
         </form>
    </div>
</template>
<script>

import axios from "axios";
export default ({
    name : 'addView',
    data() {
        return{
            name :''
        }
    },
    methods :{
        Add(){
        const formData = new FormData()
        formData.append('name',this.name)

        axios.post("http://127.0.0.1:8081/src/php/controller/Calls.php",formData)
        .then(Response=>{
            console.log(Response.status);
            console.log(Response.data);
        })
        }
    }
})
</script>
