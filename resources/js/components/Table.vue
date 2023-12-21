<template>
    <div>
        <div class="container">
            <p class="text-success text-center" style="font-size: 32px; font-weight: 600;">{{ msg }}</p>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Task Name</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(todo , index) in todos" :key="todo.id" v-on:itemchange="$emit('reloadlist')">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ todo.task_name }}</td>
                <td>{{ todo.date }}</td>
                <td>
                    <a class="btn btn-danger" v-on:click="removeItem(todo.id)">Delete</a>
                    <a class="btn btn-info" v-on:click="editItem(todo)">edit</a>
                </td>
                </tr>
            </tbody>
        </table>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</template>
<script >
import axios from 'axios';
export default {
    name : "Table",
    data(){
        return{
            msg : "",
        }
    },
    props:{
        todos : Array,
    },
    methods:{
       async removeItem(id){
            let remove = await axios.delete(`http://localhost:8000/api/todo/${id}`).then(res => {
                console.log(res);
                this.msg = 'item remove successfull'
                let time = setInterval(()=>{
                    this.msg = ""
                },5000)
                this.$emit('reloadlist')
            })
        },
       async editItem(val){
            // let geteditData = await axios.get(`http://localhost:8000/api/todo/${id}/edit`).then(res => {
            //     this.edittodos = res.data.data
            // })
            this.$router.push({name: "Edit" , params: {todo: val.id }})
        }
    }
}
</script>
<style>

</style>
