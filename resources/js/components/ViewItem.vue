<template>
    <div>
        <button class="btn btn-primary btn-sm">Add New Category</button>
        <br>
        <table class="table primary table-bordered">
            <thead>
            <th>S.N</th>
            <th>Name</th>
            <th>Description</th>
            <th>Catagory</th>
            <th>Code</th>
            <th>Model</th>
            <th>Purchase Price</th>
            <th>Sale Price</th>
            </thead>
            <tbody>
                <tr v-for="(item, index) in items" :key="item.id">
                <td>{{index + 1}}</td>
                <td>{{item.name}}</td>
                <td>{{item.detail}}</td>
                <td>{{item.catagory}}</td>
                <td>{{item.code}}</td>
                <td>{{item.model}}</td>
                <td>{{item.purchase_price}}</td>
                <td>{{item.sale_price}}</td>
                <td>
                    <button @click="goToHome()">Edit Item</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style>

</style>

<script>
    import axios from 'axios';
    import CreateItem from './CreateItem.vue';
    export default  {
  components: { CreateItem },
        name:"ViewItems",

        data () {
            return {
                items : [],
            }
        },

        methods : {
            viewItems() {
                let instance = this;
                axios.get('api/item')
                    .then(function (response) {
                        console.log(response);
                        instance.items = response.data;

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            goToHome(){
                console.log("hio")
            }
        },

        mounted() {
            this.viewItems();
        }


    }
</script>