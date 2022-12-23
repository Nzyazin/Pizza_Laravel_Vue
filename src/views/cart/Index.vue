<template>
    <div>
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
                                    <tr v-for="product in products">
                                        <td>
                                            <div class="thumb-box"> <a href="shop-details-1.html" class="thumb">
                                                <img :src="product.image_url" :alt="product.title">
                                            </a> <a href="shop-details-1.html" class="title">
                                                <h5> {{ product.title }} </h5>
                                            </a> </div>
                                        </td>
                                        <td>Р {{ product.price }}</td>
                                        <td class="qty">
                                            <div class="qtySelector text-center">
                                                <span @click.prevent="minusQty(product)" class="decreaseQty"><i class="flaticon-minus"></i> </span>
                                                <input type="number" class="qtyValue" :value="product.qty" />
                                                <span @click.prevent="plusQty(product)" class="increaseQty"> <i class="flaticon-plus"></i> </span> </div>
                                        </td>
                                        <td class="sub-total">Р {{ product.price * product.qty }}</td>
                                        <td>
                                            <div @click.prevent="removeProduct(product.id)" class="remove"> <i class="flaticon-cross"></i> </div>
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
                                        <p>Р {{ cartTotalCost }}</p>
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
export default {
    name: "cart",
    computed: {
        cartTotalCost() {
            let i = 0;
            for ( let index = 0; index < this.products.length; index++) {
                i += this.products[index].price * this.products[index].qty;
            }
            return i;
        }
    },
    mounted() {
        $(document).trigger('change')
        this.getCartProducts()
    },
    data() {
        return {
            products: [],
            name: '',
            date_of_birth: '',
            mob_number: '',
            address: '',
        }
    },
    methods: {
        storeOrder() {
            this.axios.post('http://127.0.0.1:8000/api/cart', {
                'products': this.products,
                'name': this.name,
                'date_of_birth': this.date_of_birth,
                'mob_number': this.mob_number,
                'address': this.address,
                'total_price': this.cartTotalCost,
            })
                .then( res => {
                    console.log(res);
                })
                .finally(v => {
                    $(document).trigger('change')
                })
        },
        getCartProducts() {
            this.products = JSON.parse(localStorage.getItem('cart'))
        },

        minusQty(product) {
          if(product.qty === 0 ) return
          product.qty--
            this.updateCart()
        },

        plusQty(product) {
            product.qty++
            this.updateCart()
        },

        removeProduct(id) {
            this.products = this.products.filter( product => {
                return product.id !== id
            })
            this.updateCart()
        },

        updateCart() {
          localStorage.setItem('cart', JSON.stringify(this.products))
        },

        addToCart(id, isSingle) {

            let qty = isSingle ? 1 : $('.qtyValue').val()

            let cart = localStorage.getItem('cart')
            $('.qtyValue').val(1)
            let newProduct = [
                {
                    'id': id,
                    'qty': qty,
                }
            ]
            if(!cart) {
                localStorage.setItem('cart', JSON.stringify(newProduct))
            } else {
                cart = JSON.parse(cart)
                cart.forEach(productInCart => {
                    if (productInCart.id === id) {
                        productInCart.qty = Number(productInCart.qty) + Number(qty)
                        newProduct = null
                    }

                })
                Array.prototype.push.apply(cart, newProduct)
                localStorage.setItem('cart', JSON.stringify(cart))
            }
        },

    }
}
</script>

<style scoped>

</style>
