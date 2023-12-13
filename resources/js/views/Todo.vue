<template lang="">
    <div>
        <Heading/>
        <Input/>
        <Table/>
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
    }
}
</script>
<style lang="">

</style>
