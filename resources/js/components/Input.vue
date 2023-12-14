<template>
    <div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form>
                        <div class="mb-3 text-center">
                            <label for="exampleInputEmail1" class="form-label">Create Your Task</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="formData.task_name">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 text-center">
                            <label for="exampleInputEmail1" class="form-label">Enter your date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="formData.date">
                            <!-- <div id="emailHelp" class="form-text">{{ formData.task_name }}</div> -->
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" v-on:click="handleSubmit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'


export default {
    name : "Input",
    data(){
        return{
            formData:{
                task_name : '',
                date : '',
            }
        }
    },
    methods:{
        async handleSubmit(e){
            e.preventDefault();
            if(this.formData.task_name.length > 0 && this.formData.date.length > 0){

                let submit = await axios.post('http://localhost:8000/api/todo',{
                    "task_name" : this.formData.task_name,
                    "date" : this.formData.date,
                })

                   if(submit.status == 200){
                    console.log('successfull');
                    this.$emit('reloadlist')
                   }

            }else{
                console.log('bad');
            }
        }
    },

}
</script>
<style lang="">

</style>
