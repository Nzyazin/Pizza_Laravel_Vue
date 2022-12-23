<template>
  <div>
    <header class="header-style-3">
        <!-- Start Desktop Menu -->
        <div class="menubox">
            <div class="container-fluid">
                <div class="row d-lg-none d-block">
                    <div class="mobile-menu ">
                        <div class="mobile-menu__menu-top border-bottom-0">
                            <div class="container">
                                <div class="row">
                                    <div class="menu-info d-flex justify-content-between align-items-center">
                                        <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                                            href="/" class="logo"> <img src="src/assets/images/logo/logo.png"
                                                alt="" width="90" height="90"> </a>
                                        <div class="cart-holder">
                                            <a href="#0" class="cart cart-icon position-relative">
                                                <i class="flaticon-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-closer"></div>
                        <div class="mobile-menu__sidebar-menu">
                            <div class="menu-closer two"> <span> Закрыть меню </span> <span class="cross"><i
                                        class="flaticon-cross"></i></span> </div>
                          <ul class="page-dropdown-menu">
                            <li class="dropdown-list"> <router-link :to="{name: 'main'}"> <span>Главная </span> </router-link></li>
                            <li class="dropdown-list"> <router-link :to="{name: 'pizza'}"> <span>Заказать </span> </router-link></li>
                            <li class="dropdown-list"> <router-link :to="{name: 'cart'}"> <span>Корзина </span> </router-link></li>
                            <li class="dropdown-list"> <router-link :to="{name: 'new'}"> <span>New </span> </router-link></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="d-lg-block d-none">
                    <div class="row g-0 position-relative">
                        <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
                            <div class="logo"> <a href="/"> <img src="src/assets/images/logo/logo.png" width="90" height="90" alt=""> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 g-0 p-0">
                            <div class="row g-0 holder">
                                <div class="col-12">
                                    <div class="some-info">
                                        <p class="d-flex align-items-center"> <span class="icon"> <i
                                                    class="flaticon-power"></i> </span> Добро пожаловать в магазин</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-one"> </div>
                            <div class="row g-0 holder">
                                <div class="col-12">
                                    <div class="mega-menu-default mega-menu d-lg-block d-none">
                                        <div class="d-flex align-items-center justify-content-between ">
                                            <nav>
                                                <ul
                                                class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                                  <li class="dropdown-list"> <router-link :to="{name: 'main'}"> <span>Главная</span> </router-link></li>
                                                  <li class="dropdown-list"> <router-link :to="{name: 'pizza'}"> <span>Заказать </span> </router-link></li>
                                                    <li class="dropdown-list"> <router-link :to="{name: 'cart'}"> <span>Корзина </span> </router-link></li>
                                                    <li class="dropdown-list"> <router-link :to="{name: 'new'}"> <span>New </span> </router-link></li>
                                                </ul>
                                            </nav>
                                            <div class="right d-flex align-items-center justify-content-end" >
                                                <ul class="main-menu__widge-box d-flex align-items-center ">
                                                    <li class="cartm"> <a href="#" class="number cart-icon" > <i
                                                        class="flaticon-shopping-cart" ></i><span
                                                        class="count" >{{ $store.state.main.products.length }}</span> </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticy-header">
            <div class="mobile-menu d-lg-none d-block">
                <div class="mobile-menu__menu-top border-bottom-0">
                    <div class="container">
                        <div class="row">
                            <div class="menu-info d-flex justify-content-between align-items-center">
                                <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                                    href="/" class="logo"> <img src="src/assets/images/logo/logo.png" width="90" height="90" alt=""> </a>
                                <div class="cart-holder">
                                    <a href="#" class="cart cart-icon position-relative">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container position-relative d-lg-block d-none">
                <div class="d-flex align-items-center justify-content-between"> <a href="/" class="logo me-2">
                        <img src="src/assets/images/logo/logo.png" width="90" height="90" alt=""> </a>
                    <div class="mega-menu-default mega-menu d-lg-block d-none">
                        <div class="container ">
                            <div class="row">
                              <nav>
                                  <ul
                                      class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                    <li class="dropdown-list"> <router-link :to="{name: 'main'}"> <span>Главная</span> </router-link></li>
                                    <li class="dropdown-list"> <router-link :to="{name: 'pizza'}"> <span>Заказать </span> </router-link></li>
                                    <li class="dropdown-list"> <router-link :to="{name: 'cart'}"> <span>Корзина </span> </router-link></li>
                                    <li class="dropdown-list"> <router-link :to="{name: 'new'}"> <span>New </span> </router-link></li>
                                  </ul>
                              </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-cart-closer"></div>

        <pizzalist/>

    </header>

    <router-view></router-view>

    <!--  Footer Three start -->
    <footer class="footer-default footer-3 ">
        <div class="footer-default__shap_1 position-absolute "> <img src="src/assets/images/shape/footer-shape-1.png"
                alt=""> </div>
        <!--Start Footer-->
        <div class="footer-default__main-footer position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="company-info">
                                <div class="footer-title">
                                    <h4> Офис</h4>
                                </div>
                                <div class="text1">
                                    <p>Киров</p>
                                </div>
                                <div class="text2">
                                    <p>Москва</p>
                                </div>
                                <div class="text3">
                                    <p>Пермь</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Информация </h4>
                            </div>
                            <ul class="footer-links">
                                <li><a href="about-us.html">О нас</a></li>
                                <li><a href="contact.html">Контакты </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Соц сети </h4>
                            </div>
                            <div class="footer-newsletter">

                                <div class="newsletter-bottom d-flex align-items-center">
                                    <div class="footer-title-box">
                                        <p>Следуйте за нами:</p>
                                    </div>
                                    <div class="footer__medio-boxx  medio-boxx  d-flex align-items-center">
                                        <ul>
                                            <li><a href="https://www.facebook.com/" target="_blank" class="active"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="https://www.youtube.com/" target="_blank"><i
                                                        class="flaticon-youtube"></i></a></li>
                                            <li><a href="https://twitter.com/"><i class="flaticon-twitter"
                                                        target="_blank"></i></a></li>
                                            <li><a href="https://www.instagram.com/"><i class="flaticon-instagram"
                                                        target="_blank"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- footer-bottom Footer-->
        <div class="footer_bottom position-relative">
            <div class="container">
                <div class="footer_bottom_content">
                    <div class="copyright wow fadeInUp animated">
                        <p>© 2022 <a href="index.html">Магазин.</a> Все права защищены.</p>
                    </div>
                    <div class="footer-payment wow fadeInUp animated">
                        <a href="#0"> <img src="src/assets/images/home-four/method-1.jpg" alt="payment"> </a>
                        <a href="#0"> <img src="src/assets/images/home-four/method-2.jpg" alt="payment"> </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>
</template>
<script>
/*
export default {
    name: 'App',
    components: {
    },
    mounted() {
        $(document).trigger('change')
        this.getCartProducts()
    },
    data() {
        return {
            products: []
        }
    },
    computed: {
        cartTotalCost() {
            let i = 0;
            for (let index = 0; index < this.products.length; index++) {
                i += this.products[index].price * this.products[index].qty;
            }
            return i;
        },
        cartTotalQty() {
            let i = 0;
            for (let index = 0; index < this.products.length; index++) {
                i += this.products[index].qty;
            }
            return i;
        }
    },
    methods: {

    }
}
*/
import Pizzalist from "./views/counter/Pizzalist.vue";
export default {
    name: "App",
    components: {Pizzalist},
    mounted() {
        $(document).trigger('change')
        this.$store.dispatch('main/getProducts')
    },
    computed: {
        products() {
            return this.$store.state.main.products
        }
    },
    methods: {

    }
}
</script>
<style>

</style>
