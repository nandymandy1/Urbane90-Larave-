@extends('layouts.admin')

@section('content')
<div id="app">
    <!--Section Stats-->
    <section class="section section-stats center">
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card-panel blue lighten-1 white-text center">
                        <i class="material-icons medium">insert_emoticon</i>
                        <h5>Monthly Visitors</h5>
                        <h3 class="count">@{{ visitors }}</h3>
                        <div class="progress grey lighten-1">
                            <div class="determinate white" style="width:50%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel center">
                        <i class="material-icons medium">edit</i>
                        <h5>Products</h5>
                        <h3 class="count">@{{ products }}</h3>
                        <div class="progress grey lighten-1">
                            <div class="determinate blue lighten-1" style="width:20%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel green lighten-1 white-text center">
                        <i class="material-icons medium">contact_mail</i>
                        <h5>Contacts</h5>
                        <h3 class="count">@{{ emails }}</h3>
                        <div class="progress grey lighten-1">
                            <div class="determinate white" style="width:50%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card-panel red darken-1 white-text center">
                        <i class="material-icons medium">supervisor_accounts</i>
                        <h5>Subscribers</h5>
                        <h3 class="count">@{{ subscribers }}</h3>
                        <div class="progress grey lighten-1">
                            <div class="determinate white" style="width:10%;"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--Section Stats-->

    <!--Section Visitors-->
    <section class="section section-visitors blue lighten-4">
            <div class="row">
                <!--Visitors-->
                <div class="col s12 m8 l9">
                    <div class="card-panel">
                        <table>
                            <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Company</th>
                                  <th>Contact Number</th>
                                  <th>Email</th>
                                  <th>Country</th>
                              </tr>
                            </thead>
                    
                            <tbody>
                              <tr v-for="contact in contacts">
                                <td>@{{ contact.name }}</td>
                                <td>@{{ contact.company }}</td>
                                <td>@{{ contact.phone }}</td>
                                <td>@{{ contact.email }}</td>
                                <td>@{{ contact.country }}</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Visitors-->
                <!--Collections-->
                <div class="col s12 m4 l3">
                    <ul class="collection with-header latest-comments">
                        <li class="collection-header">
                            <h5>All Collections</h5>
                        </li>
                        <li v-for="(cat, index) in categories" class="collection-item">
                            <span class="title">@{{ cat.name }}</span>
                            <a href="#!" @click.prevent="deleteCategory(index, cat.id)" class="red-text">Delete</a>
                        </li>
                    </ul>
                </div>
                <!--Collections-->
            </div>
    </section>
    <!--Section Visitors-->

    <!--Add Post Modals-->
    <div class="modal" id="post-modal">
        <div class="modal-content">
            <h4>Add Product</h4>
            <form id="productForm" @submit.prevent>
                @csrf
                <div class="input-field">
                    <input type="text" v-model="title" name="name" id="title">
                    <label for="title">Title</label>
                </div>
                 <div class="input-field">
                    <select name="collection" id="collection">
                        <option value="" disabled selected>Select Options</option>
                        <option v-for="cat in categories" v-bind:value="cat.dirName">@{{ cat.name }}</option>
                    </select>
                    <label for="collection">Collection</label>
                </div>
                <div class="input-field">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Image</span>
                            <input type="file" id="file" ref="file" @change="handleFileUpload"/>
                        </div>
                        <div class="file-path-wrapper">
                            <input id="imageName" class="file-path validate" type="text" v-model="imageName">
                        </div>
                    </div>
                </div>
                <div class="input-field">
                    <textarea name="description" id="body" v-model="description"></textarea>
                </div>
                <button @click="addProduct" class="modal-action modal-close btn blue white-text">Add Product </button>
            </form>
        </div>
    </div>
    <!--Add Post Modals-->

    <!--Add Category Modals-->
    <div class="modal" id="category-modal">
        <div class="modal-content">
            <h4>Add Category</h4>
            <form id="categoryForm" @submit.prevent>
                @csrf
                <div class="input-field">
                    <input type="text" v-model="category" name="category" id="category">
                    <label for="category">Category Name</label>
                </div>
                <div class="input-field">
                    <input type="text" v-model="dirName" name="category-label" id="category-label">
                    <label for="category-label">Category Directory Name</label>
                    <p class="text-small">It should be matching with the category name and should have no spaced in between.</p>
                </div>
                <br>
                <button @click="addCategory" class="modal-action modal-close btn blue white-text">Add Category </button>
            </form>
        </div>
    </div>
    <!--Add Category Modals-->
<!--Fixed Action Button-->
<div class="fixed-action-btn">
        <a href="#!" class="btn-floating large red pulse">
            <i class="material-icons">add</i>
        </a>
        <ul>
            <li>
                <a href="#post-modal" class="modal-trigger btn-floating blue">
                    <i class="material-icons">mode_edit</i>
                </a>
            </li>
            <li>
                <a href="#category-modal" class="modal-trigger btn-floating blue">
                    <i class="material-icons">folder</i>
                </a>
            </li>
            <li>
                <a href="#user-modal" class="modal-trigger btn-floating blue">
                    <i class="material-icons">supervisor_account</i>
                </a>
            </li>
        </ul>
</div>
<!--Fixed Action Button-->
</div>
@endsection

@section('scripts')
<script>
    var app = new Vue({
        el:'#app',
        data () {
            return {
                name:'text',
                visitors:12000,
                subscribers:0,
                emails: 0,
                products: 0,
                categories: [],
                // Contacts Detials
                contacts:[],
                //Categeory Details
                category:'',
                dirName:'',
                // Products Object
                file: '',
                title: '',
                collection: '',
                description: '',
                imageName: ''
            }
        },
        methods:{
            getSubscribers(){
                axios.get(`/get/subs/counts`)
                .then(res => {
                    this.subscribers = res.data;
                })
                .catch(err => console.log(err))
            },
            getEmailCount(){
                axios.get(`/get/email/counts`)
                .then(res => {
                    this.emails = res.data;
                })
                .catch(err => console.log(err))
            },
            getVisitors(){

            },
            getProductCount(){
                axios.get(`/get/product/counts`)
                .then(res => {
                    this.products = parseInt(res.data);
                })
                .catch(err => console.log(err))
            },
            getRecentContactList(){
                axios.get(`/get/recent/contacts`)
                .then(res => {
                    this.contacts = res.data;
                })
                .catch(err => console.log(err));
            },
            getCollections(){
                axios.get('/get/category')
                .then(res => {
                    this.categories = res.data.categories;
                }).catch(err => console.log(err));
            },
            addCategory(){
                if(this.category != undefined && this.dirName != undefined){

                    let formData = new FormData();
                    formData.append('category', this.category);
                    formData.append('dirName', this.dirName);
                    axios.post(`/add/category`, formData, { headers: {'Content-Type': 'application/json'}})
                    .then(res => {
                        if(res.data.success){
                            this.category = '';
                            this.dirName = '';
                            Materialize.toast('Category Added Successfully', 3000, 'green');
                            this.categories.unshift(res.data.category);
                        } else {
                            Materialize.toast('Unable to add the new category', 3000, 'green');
                        }
                    })
                    .catch(err => console.log(err));
                } else {
                    Materialize.toast('Please fill in all the category details', 3000);
                }
            },
            deleteCategory(index, id){
                let formData = new FormData();
                formData.append('id', id);
                axios.post(`/del/category`, formData, { headers: {'Content-Type': 'application/json'}})
                .then(res => {
                    console.log(res.data);
                    if(res.data.success){
                        this.categories.splice(index, 1);
                        Materialize.toast('Collection Deleted Successfully.', 3000, 'green');
                    } else {
                        Materialize.toast('Unable to remove the Collection.', 3000, 'red');
                    }
                })
                .catch(err => console.log(err));
            },
            addProduct(){
                
                // console.log(this.getImageName);
                
                this.collection = document.getElementById('collection').value;
                this.description = CKEDITOR.instances.body.getData();
                
                if(this.collection != '' && 
                    this.description != '' && 
                    this.title != ''){
                    
                    let formData = new FormData();
                    formData.append('image', this.file);
                    formData.append('title', this.title);
                    formData.append('collection', this.collection);
                    formData.append('description', this.description);
                    formData.append('imageName', this.imageName);
                    
                    axios.post(`/add/product`, formData, { headers: {'Content-Type': 'multipart/form-data'}})
                    .then(res => {
                        if(res.data.success){
                            Materialize.toast('Product Added Successfully', 3000, 'green');
                            this.file= '';
                            this.title= '';
                            this.collection= '';
                            this.description= '';
                            this.products = parseInt(this.products) + 1;
                        } else {
                            Materialize.toast('Unable to add the product.', 3000, 'red');
                        }
                    })
                    .catch(err => console.log(err));
                } else {
                    Materialize.toast('Please fill in all the Product details', 3000, 'red');
                }
                
                
            },
            handleFileUpload(e){
                var fileReader = new FileReader();
                fileReader.readAsDataURL(e.target.files[0]);
                this.imageName = document.getElementById('imageName').value;
                fileReader.onload = (e) => {
                    this.file = e.target.result;
                }
            }
        },
        created() {
            this.getCollections();
            this.getProductCount();
            this.getEmailCount();
            this.getSubscribers();
            this.getRecentContactList();
        }
    });

</script>
@endsection