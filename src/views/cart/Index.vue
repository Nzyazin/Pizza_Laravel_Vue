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
                                        <IncrDecr v-for="product in carts" :key="product.id" :product="product"/>

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
                    <input style="margin: 12px 12px; text-transform: capitalize;" type="name" v-model="name" class="js-name" id="input_id" data-role="name-mask" placeholder="Имя">
                    <input style="margin: 12px 12px;" placeholder="Дата рождения" v-model="date_of_birth" id="date-mask">
                    <input style="margin: 12px 12px;" type="tel" v-model="mob_number" placeholder="Сотовый телефон">
                    <input style="margin: 12px 12px;" v-model="address" type="name" placeholder="Адрес">                    
                    <button @click.prevent="storeOrder" class="btn--primary mt-30" style="margin: 12px 12px;" type="submit">Отправить </button>
                </div>
            </div>
        </section>
        <!--End cart area-->
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import IncrDecr from "../cart/IncrDecr.vue"
import Header from "../layouts/Header.vue";
export default {
    name: "cart",
    components: {
        Header,
        IncrDecr
    },
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

    data() {
        return {
            products: [],
            name: '',
            mob_number: '',
            address: '',
            date_of_birth: '',
        }
    }

}
</script>

<style scoped>

</style>
