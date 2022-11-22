<template>
  <div>
    <main class="overflow-hidden ">
        <!--Start product-grid-->
        <section class="product-grid pt-60 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="shop-grid-page-top-info justify-content-md-between justify-content-center">
                            <div class="left-box wow fadeInUp animated">
                                <p>Showing 1–12 of 50 Results</p>
                            </div>
                            <div
                                class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                                <div class="short-by">
                                    <div class="select-box"> <select class="wide">
                                        <option data-display="Short by latest">Featured </option>
                                        <option value="1">Best selling </option>
                                        <option value="2">Alphabetically, A-Z</option>
                                        <option value="3">Alphabetically, Z-A</option>
                                        <option value="3">Price, low to high</option>
                                        <option value="3">Price, high to low</option>
                                        <option value="3">Date, old to new</option>
                                    </select> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div v-for="product in products" class="col-xl-3 col-lg-4 col-6 wow fadeInUp animated">
                        <div class="products-three-single w-100 wow fadeInUp animated mt-30">
                            <div class="products-three-single-img"> <a href="shop-details-3.html" class="d-block"> <img
                                :src="product.image_url" class="first-img" alt="" /> <img
                                src="src/assets/images/home-three/productss2-hover-1.png" alt="" class="hover-img" />
                            </a>
                                <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                                </div> <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                <div class="products-grid__usefull-links">
                                    <ul>
                                        <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                    wishlist</span> </a> </li>
                                        <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                            <span>
                                                    compare</span> </a> </li>
                                        <li><a :href="`#popup${product.id}`" class="popup_link"> <i class="flaticon-visibility"></i>
                                            <span> quick view</span>
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
                                                <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                    <span>(112)</span> </div>
                                                <p class="text"> {{ product.description }}
                                                </p>
                                                <div class="price">
                                                    <h2> Р {{ product.price }} <del v-if="product.old_price"> Р {{ product.old_price }}</del></h2>
                                                </div>
                                                <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a>
                                                    <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                    </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                    </a> <a href="#0" class="color-name black">
                                                        <span>Black</span> </a> </div>
                                                <div class="add-product">
                                                    <h6>Qty:</h6>
                                                    <div class="button-group">
                                                        <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                            <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div>
                                                        <button class="btn--primary "> Add to Cart </button>
                                                    </div>
                                                </div>
                                                <div class="payment-method"> <a href="#0"> <img
                                                    src="src/assets/images/payment_method/method_1.png" alt=""> </a>
                                                    <a href="#0"> <img src="src/assets/images/payment_method/method_2.png"
                                                                       alt=""> </a> <a href="#0"> <img
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
                <div class="row">
                    <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                        <ul class="pagination text-center">
                            <li class="next"><a href="#0"><i class="flaticon-left-arrows" aria-hidden="true"></i> </a>
                            </li>
                            <li><a href="#0">1</a></li>
                            <li><a href="#0" class="active">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0">...</a></li>
                            <li><a href="#0">10</a></li>
                            <li class="next"><a href="#0"><i class="flaticon-next-1" aria-hidden="true"></i> </a>
                            </li>
                        </ul>
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
