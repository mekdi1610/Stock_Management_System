/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue').default;
 
 /**
  * The following block of code may be used to automatically register your
  * Vue components. It will recursively scan this directory for the Vue
  * components and automatically register them with their "basename".
  *
  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
  */
 
 // const files = require.context('./', true, /\.vue$/i)
 // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
 Vue.component('example-component', require('./components/ExampleComponent.vue').default);
 Vue.component('create-item', require('./components/CreateItem.vue').default);
 Vue.component('update-item', require('./components/UpdateItem.vue').default);
 Vue.component('view-item', require('./components/ViewItem.vue').default);

 Vue.component('add-catagory', require('./components/AddCatagory.vue').default);
 Vue.component('view-catagory', require('./components/ViewCatagory.vue').default);
 Vue.component('dashboard', require('./components/Dashboard.vue').default);

 /**
  * Next, we will create a fresh Vue application instance and attach it to
  * the page. Then, you may begin adding components to this application
  * or customize the JavaScript scaffolding to fit your unique needs.
  */
 
 const app = new Vue({
     el: '#app',
     data: {
        newItem: {'name': '', 'detail': '', 'catagory': '', 'code':'', 'model':'', 'purchase_price':'', 'sale_price':''},
        hasError: true,
        items: [],
        createItem: function createItem() {
            
           var input = this.newItem;
           console.log(input)
           var _this = this;
           if(input['name'] == '' || input['detail'] == '') {
               this.hasError = false;
           }
           else {
               this.hasError= true;
               axios.post('/storeItem', input).then(function(response){
                   console.log(response)
                   _this.newItem = {'name': '', 'detail': '', 'catagory': '', 'code':'', 'model':'', 'purchase_price':'', 'sale_price':''}
                   _this.index();
               }).catch(error=>{
                   console.log("Insert: "+error);
               });
           }
       },
     },
     
 });
 