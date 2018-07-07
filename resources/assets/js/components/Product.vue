<template>
    <div>
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
    </div>
      
</template>

<script>
export default {
    data(){
        return{
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
            let $this = this
            axios.get(this.url).then(response => {
                this.products = response.data.data
                $this.makePagination(response.data)
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
    }
   
}
</script>

<style>
   
</style>

