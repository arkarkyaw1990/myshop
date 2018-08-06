<template>
    <li class="item ">
        <div class="product-img">
            <div class="icon-sale-label sale-left">Sale</div>
            <div v-lazy-container="{ selector: 'img' }">
                <div v-if="product.images.length">
                    <a v-for="(image) in product.images.slice(0,1)" :key="image.index" href="single_product.html" title="Ipsums Dolors Untra">
                        <figure> <img class="small-image" :data-src="image.path" alt="Ipsums Dolors Untra"></figure>
                    </a> 
                </div>
                <div v-else>
                    <a href="single_product.html" title="Ipsums Dolors Untra">
                        <figure> <img class="small-image" data-src="https://lorempixel.com/200/200/?44316" alt="Ipsums Dolors Untra"></figure>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-shop">
        <h2 class="product-name"><a href="single_product.html" title="Ipsums Dolors Untra">{{ product.name }}</a></h2>
        <div class="ratings">
            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
            <p class="rating-links"> <a href="#/">4 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
        </div>
        <div class="price-box">
            <p class="special-price"> <span class="price-label"></span> <span class="price"> $222.99 </span> </p>
            <p class="old-price"> <span class="price-label"></span> <span class="price"> {{ product.price }} </span> </p>
        </div>
        <div class="desc std">
            <p>{{ product.quick_overview }} <a class="link-learn" title="Learn More" href="single_product.html">Learn More</a> </p>
        </div>
        <div class="actions">
            <button class="button cart-button" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button>
            <ul>
            <li> <a href="wishlist.html"> <i class="fa fa-heart"></i><span> Add to Wishlist</span> </a> </li>
            <li> <a href="compare.html"> <i class="fa fa-signal"></i><span> Add to Compare</span> </a> </li>
            </ul>
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
