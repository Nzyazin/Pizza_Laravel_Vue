<template>
    <div>
        <Header/>
        <!--Start cart area-->
        <section class="cart-area pt-120 pb-120">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="cart-table-box">
                            <div class="table-outer">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                    <tr>
                                        <th class="">Пицца</th>
                                        <th class="price">Штука</th>
                                        <th>Количество</th>
                                        <th>Итого</th>
                                        <th class="hide-me"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="product in carts" :key="product.id">
                                        <td>
                                            <div class="thumb-box"> <a href="shop-details-1.html" class="thumb">
                                                <img :src="product.product.image" :alt="product.product.title">
                                            </a> <a href="shop-details-1.html" class="title">
                                                <h5> {{ product.product.title }} </h5>
                                            </a> </div>
                                        </td>
                                        <td>{{ product.quantity }}</td>
                                        <td class="qty">
                                            <div class="qtySelector text-center">
                                                <span @click.prevent="" class="decreaseQty"><i class="flaticon-minus"></i> </span>
                                                <input type="number" class="qtyValue" :value="product.quantity" />
                                                <span @click.prevent="increaseToCart" class="increaseQty"> <i class="flaticon-plus"></i> </span> </div>
                                        </td>
                                        <td class="sub-total">Р {{ product.product.price * product.quantity }}</td>
                                        <td>
                                            <div @click.prevent="" class="remove"> <i class="flaticon-cross"></i> </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 9px;" class="row mt--30">
                    <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                        <div class="cart-check-out mt-30">
                            <h3>Итоговая сумма</h3>
                            <ul class="cart-check-out-list">
                                <li>
                                    <div class="left">
                                        <p>Итоговая сумма:</p>
                                    </div>
                                    <div class="right">
                                        <p>Р {{ cartPrice }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="display: block;" class="row w-25">
                    <input style="margin: 12px 12px;" type="text" v-model="name" placeholder="Имя">
                    <input style="margin: 12px 12px;" type="text" v-model="date_of_birth" placeholder="YYYY-MM-DD">
                    <input style="margin: 12px 12px;" type="text" v-model="mob_number" placeholder="Сотовый телефон">
                    <input style="margin: 12px 12px;" type="text" v-model="address" placeholder="Адрес">
                    <button @click.prevent="storeOrder" class="btn--primary mt-30" style="margin: 12px 12px;" type="submit">Отправить </button>
                </div>
            </div>
        </section>
        <!--End cart area-->
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import Header from "../layouts/Header.vue";
export default {
    name: "cart",
    components: {Header},
    computed: {
        carts() {
            return this.$store.state.cart.cart
        },
        ...mapGetters({
            cartPrice: 'cart/cartPrice',
        })
    },
    mounted() {
        $(document).trigger('change')
    },
    methods: {
        increaseToCart() {
            this.$store.dispatch('cart/increaseCart', {
                product: this.product,
                quantity: 1,
            })
        }
    }
}
</script>

<style scoped>

</style>
