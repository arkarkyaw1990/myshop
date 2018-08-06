<template>
<div class="shop-inner">
    <loading :active.sync="isLoading"></loading>
     <!-- <loading :active.sync="isLoading" 
        :can-cancel="true" 
        :on-cancel="whenCancelled"
        :is-full-page="true"></loading> -->
    <div class="page-title">
        <h2>Clother</h2>
    </div>
    <div class="toolbar">
        <div class="view-mode">
        <ul>
            <li @click="gridView=true" :class="{active: gridView}"> <a href="#"> <i class="fa fa-th"></i> </a> </li>
            <li @click="gridView=false" :class="{active: !gridView}"> <a href="#"> <i class="fa fa-th-list"></i> </a> </li>
        </ul>
        </div>
        <div class="sorter">
        <div class="short-by">
            <label>Sort By:</label>
            <select>
            <option selected="selected">Position</option>
            <option>Name</option>
            <option>Price</option>
            <option>Size</option>
            </select>
        </div>
        <div class="short-by page">
            <label>Show:</label>
            <select v-model='perPage'>
            <option selected="selected">12</option>
            <option>20</option>
            <option>28</option>
            <option>36</option>
            </select>
        </div>
        </div>
    </div>
    <div v-if="gridView" class="product-grid-area">
        <ul class="products-grid">
            <product-grid 
                v-for="product in products" 
                :key="product.id" 
                :product="product"></product-grid>
        </ul>
    </div>
    <div v-else class="product-list-area">
        <ul class="products-list" id="products-list">
            <product-list
                v-for="product in products"
                :key="product.id"
                :product="product"></product-list>
        </ul>
    </div>
    <div class="pagination-area ">
        <pagination 
        :pagination="pagination"
        :fetchPaginateUsersFn="fetchPaginateUsers"></pagination>
    </div>
</div>
</template>

<script>

import ProductGrid from './Productgrid.vue';
import ProductList from './Productlist.vue';
import Pagination from './Pagination.vue';
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.min.css';
export default {
    data(){
        return{
            isLoading: false,
            gridView: true,
            products: [],
            links: [],
            perPage: 12,
            search: window.location.search,
            url: '/api/products',
            pagination: []
        }
    },
    created(){
        this.url = '/api/products'+this.search;
        this.getProducts()

    },
    watch: {
        perPage: function() {
            this.url = '/api/products'+this.search+'&pp='+this.perPage;
            this.getProducts();
        }
    },
    methods: {
        getProducts(){
        
            console.log(this.url);
            let $this = this;
            this.isLoading = true;
            axios.get(this.url).then(response => {
                this.products = response.data.data;
                $this.makePagination(response.data);
                this.isLoading = false;
            })
        },
        makePagination(data){
            let pagination = {
                current_page: data.meta.current_page,
                last_page: data.meta.last_page,
                next_page_url: data.links.next,
                prev_page_url: data.links.prev
            };
            this.pagination = pagination;
        },
        fetchPaginateUsers(url){
            this.url = url + this.search.replace('?', '&') + '&pp='+this.perPage;
            this.getProducts();
            
          
        }
    },
    components: {ProductGrid, ProductList, Pagination, Loading}
   
}
</script>

<style>
   
</style>

