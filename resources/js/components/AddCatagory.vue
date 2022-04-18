<template>
    <div>
        <form name="myform" @submit.prevent="AddNewCategory" id="myForm">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Category Name">
            </div>

            <div class="form-group">
                <label for="category_description">Category Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter Category Description"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm btn-flat" type="submit">Add Category</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "AddCategory",

        data () {
            return {
                category : [],
            }
        },

        methods : {
            AddNewCategory() {
                console.log('filler');
                var formData = new FormData(document.getElementById("myForm"));
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);
                console.log(object)
                let instance = this;
                axios.post('api/catagory/store', object)
                    .then(function (response) {
                        console.log(object);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
    //This script works prefect
</script>

<style scoped>

</style>