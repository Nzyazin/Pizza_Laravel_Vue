<template>
    <main class="overflow-hidden ">
        <!--Start product-grid-->
        <section class="product-grid pt-60 pb-120">
            <div class="container">

                <div class="cards">
                    <div class="col-xl-3 col-lg-4 col-6 wow fadeInUp animated">
                        <div class="products-three-single w-100 wow fadeInUp animated mt-30">
                            <div class="products-three-single-img"> <a :href="`#popup${product.id}`" class="d-block popup_link"> <img
                                :src="product.image_url" class="first-img" alt="" /> <img
                                :src="product.image_url" alt="" class="hover-img" />
                            </a>
                                <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">Новая</span>
                                </div> <a @click.prevent="addToCart(product, true);" @click="sendToParent" href="cart.html" class="addcart btn--primary style2"> Добавить </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li><a :href="`#popup${product.id}`"> <i class="flaticon-visibility"></i>
                                            <span> Просмотр</span>
                                        </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div :id="`popup${product.id}`" class="product-gird__quick-view-popup mfp-hide">
                                <div class="container">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-lg-6">
                                            <div class="quick-view__left-content">
                                                <div class="tabs">
                                                    <div class="popup-product-main-image-box">
                                                        <div id="tabb1" class="tab-item popup-product-image">
                                                            <div class="popup-product-single-image"> <img
                                                                :src="product.image_url"
                                                                alt="" /> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="popup-right-content">
                                                <h3>{{ product.title }}</h3>
                                                <p class="text"> {{ product.description }}
                                                </p>
                                                <div class="price">
                                                    <h2> Р {{ product.price }} <del v-if="product.old_price"> Р {{ product.old_price }}</del></h2>
                                                </div>
                                                <div class="add-product">
                                                    <h6>Количество:</h6>
                                                    <div class="button-group">
                                                        <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                                    </span> <input type="number" class="qtyValue" value="1" />
                                                            <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                    </span> </div>
                                                        <button @click.prevent="addToCart(product )" class="btn--primary" @click="sendToParent"> Добавить </button>
                                                    </div>
                                                </div>
                                                <div class="payment-method">
                                                    <a href="#0"> <img
                                                        src="src/assets/images/payment_method/method_3.png" alt=""> </a>
                                                    <a href="#0"> <img src="src/assets/images/payment_method/method_4.png"
                                                                       alt=""> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three-single-content text-center"> <h5><a href="shop-details-3.html"> {{ product.title }} </a>
                            </h5>
                                <p><del v-if="product.old_price">Р {{ product.old_price }}</del> Р {{ product.price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div>
                        {{ product.title }}
                        <img width="180" :src="product.image_url"/>
                        <div>Р {{product.price}}</div>
                        <button @click="">Add to cart</button>
                    </div>
                </div>

            </div>
        </section>
        <!--End product-grid-->
    </main>
</template>

<script>
export default {
    props: ['product'],
    components: {
    },
    methods: {

    }
}
</script>

<style scoped>
.products {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}
</style>
