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
                                        <th><div class="pizza_header">Пицца</div></th>
                                        <th><div class="pizza_price">Штука</div></th>
                                        <th><div class="pizza_qty">Количество</div></th>
                                        <th><div class="pizza_total">Итого</div></th>
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
                            <h3>К оплате</h3>
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
                <form style="display: block;" class="row client_form">
                    <input style="margin: 12px 12px; text-transform: capitalize;" type="name" v-model="name" placeholder="Имя">
                    <input style="margin: 12px 12px;" type="date" placeholder="Дата рождения" v-model="date_of_birth" min="1899-12-31" max="2005-12-31">
                    <input style="margin: 12px 12px;" type="tel" v-mask="'8##########'" v-model="mob_number" placeholder="Сотовый телефон">                    
                    <input style="margin: 12px 12px;" type="address" v-model="address" placeholder="Адрес">                
                    <button @click.prevent="storeOrder" class="btn--primary mt-30" style="margin: 12px 12px;" type="submit">Отправить </button>
                </form>
            </div>
        </section>
        <!--End cart area-->
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import IncrDecr from "../cart/IncrDecr.vue"
import Header from "../layouts/Header.vue";
import {TheMask} from 'vue-the-mask';

export default {
    name: "cart",
    components: {
        TheMask,
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

    methods: {
        storeOrder() {
            if(this.$store.state.cart.cart == 0) {
                alert('Выберите товар')
            } else {
                if(!this.name || !this.date_of_birth || !this.mob_number || !this.address) {
                    alert('Заполните данные покупателя')           
            } else {
                    this.axios.post('http://admin.pizza.local/api/orders', {
                    'products' : this.$store.state.cart.cart,
                    'name'     : this.name,
                    'date_of_birth': this.date_of_birth,
                    'mob_number': this.mob_number,
                    'address' : this.address,
                    'total_price': this.cartPrice,
                })                 
                    .then(res => {
                        alert('Заказ оформлен', res)
                        this.$store.state.cart.cart = [];
                    })
                    .catch(function (error) {
                        if (error.response) {
                        // Запрос был сделан, и сервер ответил кодом состояния, который
                        // выходит за пределы 2xx
                        console.log(error.response.data);
                        console.log(error.response.status);
                        console.log(error.response.headers);
                        } else if (error.request) {
                        // Запрос был сделан, но ответ не получен
                        // `error.request`- это экземпляр XMLHttpRequest в браузере и экземпляр
                        // http.ClientRequest в node.js
                        alert('Сервис временное не работает')
                        console.log(error.request);
                        } else {
                        // Произошло что-то при настройке запроса, вызвавшее ошибку
                        console.log('Error', error.message);
                        }
                        alert('Сервис временное не работает')
                        console.log(error.config);
                    })
                this.products,
                this.name = null,
                this.date_of_birth = null,
                this.mob_number = null,
                this.address = null
                }           
            }
            
        }
    },

    data() {
        return {
            products: [],
            errors: [],
            name: '',
            date_of_birth: '',
            mob_number: '',
            address: '',
            total_price: '',            
        }
    }

}
</script>

<style scoped>

</style>
