<template>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Update Item</div>
                <div class="card-body">
        <form name="myform" @submit.prevent="UpdateItem (item.id)" id="myForm">
            <div class="form-group">
                <label for="item_name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter item name" v-model="item.name">
            </div>

            <div class="form-group">
                <label for="item_description">Description</label>
                <textarea name="detail" id="" cols="30" rows="10" class="form-control" placeholder="Enter item description" v-model="item.detail"></textarea>
            </div>

            <div class="form-group">
                <label for="item_catagory">Catagory</label>
                <input type="text" class="form-control" name="catagory" placeholder="Enter catagory" v-model="item.catagory">
            </div>

            <div class="form-group">
                <label for="item_code">Code</label>
                <input type="text" class="form-control" name="code" placeholder="Enter item code" v-model="item.code">
            </div>

            <div class="form-group">
                <label for="item_model">Model</label>
                <input type="text" class="form-control" name="model" placeholder="Enter item model" v-model="item.model">
            </div>

            <div class="form-group">
                <label for="item_purchase_price">Purchase Price</label>
                <input type="text" class="form-control" name="purchase_price" placeholder="Enter item purchase price" v-model="item.purchase_price">
            </div>

            <div class="form-group">
                <label for="item_sale_price">Sale Price</label>
                <input type="text" class="form-control" name="sale_price" placeholder="Enter item sale price" v-model="item.sale_price">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm btn-flat" type="submit">Update item</button>
            </div>
        </form>
    </div></div></div></div></div>
</template>

<script>
    export default {
        name: "UpdateItem",
        props: ['item'],

        data () {
            return {
                item : [],
            }
        },

        methods : {
            UpdateItem(id) {
                console.log(id);
                var formData = new FormData(document.getElementById("myForm"));
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);
                console.log(object)
                let instance = this;
                axios.put('api/item/updateItem/'+id, object)
                    .then(function (response) {
                        console.log(object);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
              mounted() {
    // Use the parent function directly here
    this.method();
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