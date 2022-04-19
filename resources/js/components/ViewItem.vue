<template>
    <div>
          <button type="submit" class="btn btn-primary" @click='displayComponent'>
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add Item
            </button>
        <br>
           <div class="panel-body">
        <table v-if="display" class="table table-striped item-table">
            <thead>
            <th>S.N</th>
            <th>Name</th>
            <th>Description</th>
            <th>Catagory</th>
            <th>Code</th>
            <th>Model</th>
            <th>Purchase Price</th>
            <th>Sale Price</th>
            <th>Action</th>
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
                    <button type="submit" class="btn btn-success" @click="displayUpdate(item)" v-bind:selectedItem="item">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
            </button>
              <button type="submit" class="btn btn-danger" @click="displayDelete(item)">
            <i class="fa fa-trash-o" aria-hidden="true"></i>Delete
            </button>
                </td>
                  
            </tr>
            </tbody>
        </table>
     
           </div>
        <div v-if="AddNewItem">
            <create-item></create-item>
        </div>
           <div v-if="EditItem" >
            <update-item v-bind:item="this.item"></update-item>
        </div>
        <div v-if="DeleteItem" >
            <delete-item v-bind:item="this.item"></delete-item>
        </div>
    </div>
</template>

<style>

</style>

<script>
    import axios from 'axios';
    import CreateItem from './CreateItem.vue';
    import UpdateItem from './UpdateItem.vue';
    import DeleteItem from './DeleteItem.vue';
    export default  {
        components: { CreateItem, UpdateItem, DeleteItem },
  
        name:"ViewItems",

        data () {
            this.item = '';
            return {
                items : [],
                display: true,
                AddNewItem: false,
            }
        },

        methods : {
            displayComponent() {
                this.display = false;
                this.AddNewItem = true;
            },
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
            displayUpdate(item){
                this.display = false;
                this.EditItem = true;
                this.item = item;
            },
            displayDelete(item){
                this.display = false;
                this.DeleteItem = true;
                this.item = item;
            },
        },

        mounted() {
            this.viewItems();
        }


    }
</script>