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
            <li class="active"> <a href="shop_grid.html"> <i class="fa fa-th"></i> </a> </li>
            <li> <a href="shop_list.html"> <i class="fa fa-th-list"></i> </a> </li>
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
            <select>
            <option selected="selected">18</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
            </select>
        </div>
        </div>
    </div>
    <div class="product-grid-area">
        <ul class="products-grid">
            <product-grid 
                v-for="product in products" 
                :key="product.id" 
                :product="product"></product-grid>
        </ul>
    </div>
    <div class="pagination-area ">
        <pagination 
        :pagination="pagination"
        :fetchPaginateUsersFn="fetchPaginateUsers"></pagination>
    </div>
</div>

    <!-- <div>
        <table  v-for="product in products" :key="product.id">
            <tr>
                <td>{{ product.name }}</td>
                <td>{{ product.price }}</td>
            </tr>
        </table>
        <div class="pagination">
            <button class="btn btn-default" @click="fetchPaginateUsers(pagination.prev_page_url)" :disabled="!pagination.prev_page_url">Previos</button>
        </div>
        <span>Page {{pagination.current_page}} of {{pagination.last_page}}</span>
        <div class="pagination">
            <button class="btn btn-default" @click="fetchPaginateUsers(pagination.next_page_url)" :disabled="!pagination.next_page_url">Next</button>
        </div>
    </div> -->
      
</template>

<script>

import ProductGrid from './Productgrid.vue';
import Pagination from './Pagination.vue';
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.min.css';
export default {
    data(){
        return{
            isLoading: false,
            products: [],
            links: [],
            url: '/api/products',
            pagination: []
        }
    },
    mounted(){

        this.getProducts()

    },
    methods: {
        getProducts(){
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
            }
            this.pagination = pagination
        },
        fetchPaginateUsers(url){
            this.url = url
            this.getProducts()
          
        }
    },
    components: {ProductGrid, Pagination, Loading}
   
}
</script>

<style>
   
</style>

