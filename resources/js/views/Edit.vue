<template>
        <div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form>
                        <div class="mb-3 text-center">
                            <label for="exampleInputEmail1" class="form-label">Update Your Task - {{ todo }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="this.editData.task_name">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 text-center">
                            <label for="exampleInputEmail1" class="form-label">Enter your date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="this.editData.date">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" v-on:click="editHandle" >Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</template>
<script>
import editInput from '../components/Input.vue'
export default {
    name: "Edit",
    props:{
        todo : Array,
    },
    data(){
        return{
            editData : ""
        }
    },
    methods:{
        async editHandle(e){
            e.preventDefault();
            let updateData = await axios.put(`http://localhost:8000/api/todo/${this.editData.id}`,{
                'task_name' : this.editData.task_name,
                'date' : this.editData.date
            })
            // console.log(updateData);

            if(updateData.data.status == 220){
                this.$router.push({ name: "Todo" })
            }
        }
    },
    async mounted(){
        let DataFetch = await axios.get(`http://localhost:8000/api/todo/${this.todo}/edit`).then(res => {
            this.editData = res.data.data
        });
    }

}
</script>
<style>

</style>
