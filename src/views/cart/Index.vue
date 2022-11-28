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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-button-box">
                            <div class="apply-coupon wow fadeInUp animated">
                                <div class="apply-coupon-input-box mt-30 "> <input type="text" name="coupon-code"
                                                                                   value="" placeholder="Coupon Code"> </div>
                                <div class="apply-coupon-button mt-30"> <button class="btn--primary style2"
                                                                                type="submit">Apply Coupon</button> </div>
                            </div>
                            <div class="cart-button-box-right wow fadeInUp animated"> <button class="btn--primary mt-30"
                                                                                              type="submit">Continue Shopping</button> <button class="btn--primary mt-30"
                                                                                                                                               type="submit">Update Cart</button> </div>
                        </div>
                    </div>
                </div>
                <div style="display: block;" class="row w-25">
                    <input style="margin: 12px 12px;" type="text" v-model="name" placeholder="Имя">
                    <input style="margin: 12px 12px;" type="text" v-model="date_of_birth" placeholder="Дата рождения">
                    <input style="margin: 12px 12px;" type="text" v-model="mob_number" placeholder="Сотовый телефон">
                    <input style="margin: 12px 12px;" type="text" v-model="address" placeholder="Адрес">
                    <button class="btn--primary mt-30" style="margin: 12px 12px;" type="submit">Отправить </button>
                </div>
                <div class="row pt-120">
                    <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                        <div class="cart-total-box">
                            <div class="inner-title">
                                <h3>Cart Totals</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                        <div class="cart-total-box mt-30">
                            <div class="table-outer">
                                <table class="cart-table2">
                                    <thead class="cart-header clearfix">
                                    <tr>
                                        <th colspan="1" class="shipping-title">Shipping</th>
                                        <th class="price">$2500.00</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="shipping"> Shipping </td>
                                        <td class="selact-box1">
                                            <ul class="shop-select-option-box-1">
                                                <li> <input type="checkbox" name="free_shipping" id="option_1"
                                                            checked=""> <label for="option_1"><span></span>Free
                                                    Shipping</label> </li>
                                                <li> <input type="checkbox" name="flat_rate" id="option_2"> <label
                                                    for="option_2"><span></span>Flat Rate</label> </li>
                                                <li> <input type="checkbox" name="local_pickup" id="option_3">
                                                    <label for="option_3"><span></span>Local Pickup</label> </li>
                                            </ul>
                                            <div class="inner-text">
                                                <p>Shipping options will be updated during checkout</p>
                                            </div>
                                            <h4>Calculate Shipping</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="total">Total</h4>
                                        </td>
                                        <td class="subtotal">$2500.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                        <div class="cart-check-out mt-30">
                            <h3>Check Out</h3>
                            <ul class="cart-check-out-list">
                                <li>
                                    <div class="left">
                                        <p>Subtotal</p>
                                    </div>
                                    <div class="right">
                                        <p>$2500.00</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Shipping</p>
                                    </div>
                                    <div class="right">
                                        <p><span>Flat rate:</span> $50.00</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Total Price:</p>
                                    </div>
                                    <div class="right">
                                        <p>$2550.00</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End cart area-->
    </div>
</template>

<script>
export default {
    name: "index",
    mounted() {
        $(document).trigger('change')
        this.getCartProducts()
    },
    data() {
        return {
            products: []
        }
    },
    methods: {
        getCartProducts() {
            this.products = JSON.parse(localStorage.getItem('cart'))
            console.log(this.products);
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
