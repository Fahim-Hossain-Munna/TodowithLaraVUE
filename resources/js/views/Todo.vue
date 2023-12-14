<template lang="">
    <div>
        <Heading/>
        <Input v-on:reloadlist="getTask()" />
        <Table :todos="todos" v-on:reloadlist="getTask()" />
    </div>
</template>
<script>
import Input from "../components/Input.vue";
import Heading from "../components/Heading.vue";
import Table from "../components/Table.vue";
export default {
    name:"App",
    components:{
        Input,Heading,Table
    },
    data(){
        return {
            todos : []
        }
    },
    methods:{
        async getTask(){
        await axios.get('http://localhost:8000/api/todo').then(res =>{
            this.todos = res.data.data
        })
        }
    },
    mounted(){
        this.getTask();
    }

}
</script>
<style lang="">

</style>
