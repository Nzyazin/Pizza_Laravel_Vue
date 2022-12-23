<template>
    <div class="side-cart d-flex flex-column justify-content-between">
        <div class="top">
            <div class="content d-flex justify-content-between align-items-center">
                <h6 class="text-uppercase">Корзина {{  }}</h6> <span class="cart-close text-uppercase">X</span>
            </div>
            <div class="cart_items">
                <div v-for="product in products" class="items d-flex justify-content-between align-items-center">
                    <div class="left d-flex align-items-center"> <a href="shop-details-1.html"
                                                                    class="thumb d-flex justify-content-between align-items-center"> <img :src="product.image_url"
                                                                                                                                          :alt="product.title"> </a>
                        <div class="text"> <a href="shop-details-1.html">
                            <h6>{{  product.title }}</h6>
                        </a>
                            <p>{{ product.qty }} X <span>Р {{ product.price }}</span> </p>
                        </div>
                    </div>
                    <div class="right">
                        <div @click.prevent="" class="item-remove"> <i class="flaticon-cross"></i> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="total-ammount d-flex justify-content-between align-items-center">
                <h6 class="text-uppercase">Итого:</h6>
                <h6 class="ammount text-uppercase">Р {{ }}</h6>
            </div>
            <div class="button-box d-flex justify-content-between"> <router-link to="/cart" class="btn_black"> В корзину
            </router-link>  </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Pizzalist",
    props: ["product"],
    data() {
        return {

        }
    },
    methods: {
    }
}
</script>

<style>

</style>
