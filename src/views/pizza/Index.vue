<template>
    <div>
        <main class="overflow-hidden ">
                <!--Start product-grid-->
                <section class="product-grid pt-60 pb-120">
                    <div class="container">

                        <div class="cards">
                            <div v-for="product in products" class="col-xl-3 col-lg-4 col-6 wow fadeInUp animated">
                                <div class="products-three-single w-100 wow fadeInUp animated mt-30">
                                    <div class="products-three-single-img"> <a :href="`#popup${product.id}`" class="d-block popup_link"> <img
                                        :src="product.image_url" class="first-img" alt="" /> <img
                                        :src="product.image_url" alt="" class="hover-img" />
                                    </a>
                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">Новая</span>
                                        </div> <a @click.prevent="addToCart(product.id, true)" href="cart.html" class="addcart btn--primary style2"> Добавить </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a :href="`#popup${product.id}`" class="popup_link"> <i class="flaticon-visibility"></i>
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
                                                                <button @click.prevent="addToCart(product.id)" class="btn--primary "> Добавить </button>
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

                    </div>
                </section>
                <!--End product-grid-->
            </main>
    </div>

</template>

<script>
export default {
  name: "Pizza",
  mounted() {
    $(document).trigger('change')
    this.getPizza()
  },
    data() {
      return {
          products: []
      }
    },
  methods: {
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
    getPizza() {
      this.axios.get('http://127.0.0.1:8000/api/pizza')
          .then( res => {
            this.products = res.data.data
          })
        .finally(v => {
            $(document).trigger('change')
        })
    }
  }
}
</script>

<style scoped>

</style>
