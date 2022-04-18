<template>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Delete Item</div>
                <div class="card-body">
        <p> Are you sure, you want to remove this item?
        <form name="myform" @submit.prevent="DeleteItem (item.id)" id="myForm">
            <div class="form-group">
                <label for="item_name">ID</label>
                <input type="text" class="form-control" name="id" v-model="item.id">
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">Delete Item</button>
            </div>
        </form>
    </div></div></div></div></div>
</template>

<script>
    export default {
        name: "DeleteItem",
        props: ['item'],
        data () {
            return {
                item : [],
            }
        },

        methods : {
            DeleteItem(id) {
                console.log(id);
                var formData = new FormData(document.getElementById("myForm"));
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);
                console.log(object)
                let instance = this;
                axios.delete('api/item/deleteItem/'+id, object)
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
.card-header{
    background-color: #41464b;
    color: white;
}
</style>