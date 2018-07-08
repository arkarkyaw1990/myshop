<template>
<li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
    <div class="product-item">
    <div class="item-inner">
        <div class="product-thumb has-hover-img">
        <div class="icon-sale-label sale-left">Sale</div>
        <div class="icon-new-label new-right"><span>New</span></div>
        <figure v-if="product.images.length"> <a v-for="(image, index) in product.images.slice(0,2)" :key="image.index" :class="{ 'hover-img': index===1}" href="single_product.html"><img :src="image.path" alt=""></a></figure>
        <figure v-else> <a href="single_product.html"><img src="https://lorempixel.com/200/200/?44316" alt=""></a></figure>
        <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
        </div>
        <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">{{ product.name }} </a></h4> </div>
            <div class="item-content">
            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
            <div class="item-price">
                <div class="price-box"> <span class="regular-price"> <span class="price">{{ product.price }}</span> </span> </div>
            </div>
            <div class="pro-action">
                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</li>
</template>

<script>
export default {
    props: ['product']
}
</script>

<style>

</style>
