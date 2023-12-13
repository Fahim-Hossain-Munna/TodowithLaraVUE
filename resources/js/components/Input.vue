<template>
    <div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form>
                        <div class="mb-3 text-center">
                            <label for="exampleInputEmail1" class="form-label">Create Your Task</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name : "Input",
}
</script>
<style lang="">

</style>
