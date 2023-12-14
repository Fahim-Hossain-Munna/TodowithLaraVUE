<template>
    <div>
        <div class="container">
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
                <td>@mdo</td>
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
    props:{
        todos : Array,
    }
}
</script>
<style>

</style>
