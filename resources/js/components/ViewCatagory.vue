<template>
    <div>
        <button class="btn btn-primary btn-sm">Add New Category</button>
        <br>
        <table class="table primary table-bordered">
            <thead>
            <th>S.N</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
            </thead>
            <tbody>
                <tr v-for="(catagory, index) in catagories" :key="catagory.id">
                <td>{{index + 1}}</td>
                <td>{{catagory.name}}</td>
                <td>{{catagory.description}}</td>
                <td>
                    <a class="btn btn-default btn-xs">Edit Category</a>
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
    export default  {
        name:"ViewCategory",

        data () {
            return {
                catagories : [],
            }
        },

        methods : {
            viewCatagories() {
                let instance = this;
                axios.get('api/catagory')
                    .then(function (response) {
                        console.log(response);
                        instance.catagories = response.data;

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        },

        mounted() {
            this.viewCatagories();
        }


    }
</script>