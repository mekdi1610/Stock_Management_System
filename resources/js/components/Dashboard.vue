<template>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Stock Management System</div>
                <div class="card-body">
           
            <div class="form-group">
                <button class="form-control">Items</button>
                </div>
              <div class="form-group">
                <button class="form-control">Orders</button>
                </div>
                              <div class="form-group">
                <button class="form-control">User/Role</button>
                </div>
                              <div class="form-group">
                <button class="form-control">Warehouse</button>
                </div>
                              <div class="form-group">
                <button class="form-control">Customer</button>
                </div>

            </div>
    </div></div></div></div>
</template>

<script>
    export default {
        name: "AddNewItem",

        data () {
            return {
                item : [],
            }
        },

        methods : {
            AddNewItem() {
                var formData = new FormData(document.getElementById("myForm"));
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);
                console.log(object)
                let instance = this;
                axios.post('api/item/storeItem', object)
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
button{
    border-radius: 50px;
    margin-bottom: 5px;
    color: white;
    background-color: darkgoldenrod;
}
</style>