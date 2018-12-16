@extends('layouts.admin')

@section('content')
<div id="app">
    <!--Section Visitors-->
    <section class="section section-visitors blue lighten-4">
            <h4 class="center" style="color: #fff;">Products</h4>
            <div class="row">
                <!--Visitors-->
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <table>
                            <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Collection</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                            </thead>
                    
                            <tbody>
                              <tr v-for="(prod, index) in products">
                                <td>@{{ prod.name }}</td>
                                <td>@{{ prod.collection }}</td>
                                <td><button class="btn btn-m light-blue" @click="editProduct()">Edit</button></td>
                                <td><button class="btn btn-m red" @click="deleteProduct(index, prod.id)">Delete</button></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Visitors-->
            </div>
            <ul class="center pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url }]" class="page-item"><a @click="fetchProducts(pagination.prev_page_url)" class="page-link" href="#"><i class="material-icons">chevron_left</i></a></li>
                <li class="page-item disabled"><a class="page-link text-dark" href="#">Page @{{ pagination.current_page }} of @{{ pagination.last_page }}</a></li>
                <li v-bind:class="[{disabled: !pagination.next_page_url }]" class="page-item"><a @click="fetchProducts(pagination.next_page_url)" class="page-link" href="#"><i class="material-icons">chevron_right</i></a></li>
            </ul>
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

    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <h4>Edit Product</h4>
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
                    <textarea name="description" id="edit-body" v-model="description"></textarea>
                </div>
                <button @click="addProduct" class="modal-action modal-close btn blue white-text">Update Product </button>
            </form>
        </div>
    </div>

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
                products: 0,
                categories: [],
                // Contacts Detials
                contacts:[],
                pagination: {},
                //Categeory Details
                category:'',
                dirName:'',
                // Products Object
                file: '',
                title: '',
                collection: '',
                description: '',
                imageName: '',
                editProd:false
            }
        },
        methods:{
            // Pagination
            makePagination(meta, links){
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                };
                this.pagination = pagination;
            },
            // fetching all Products
            fetchProducts(page_url){
                let vm = this;
                page_url = page_url || '/get/products'
                fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.products = res.data;
                    vm.makePagination(res.meta, res.links);
                }).catch(err => console.log(err));
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
                            console.log(res.data.category);
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
            editProduct(){
                $('#edit-modal').show();
            },
            updateProduct(){

            },
            deleteProduct(){

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
            this.fetchProducts();
            this.getCollections();
        }
    });

</script>
@endsection