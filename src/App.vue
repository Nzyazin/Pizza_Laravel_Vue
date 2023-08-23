<template>
  <div>
    <router-view></router-view>

    <!--  Footer Three start -->
    <footer class="footer-default footer-3 ">
        <div class="footer-default__shap_1 position-absolute "> <img src="/src/assets/images/shape/footer-shape-1.png"
                alt=""> </div>
        <!--Start Footer-->
        <div class="footer-default__main-footer position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mt-30 wow fadeInUp animated">
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

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Информация </h4>
                            </div>
                            <ul class="footer-links">
                                <li><a href="">О нас</a></li>
                                <li><a href="">Контакты </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mt-30 wow fadeInUp animated">
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
                                            <li><a href="" target="_blank" class="active"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="" target="_blank"><i
                                                        class="flaticon-youtube"></i></a></li>
                                            <li><a href=""><i class="flaticon-twitter"
                                                        target="_blank"></i></a></li>
                                            <li><a href=""><i class="flaticon-instagram"
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
                        <a href="#0"> <img src="/src/assets/images/home-four/method-1.jpg" alt="payment"> </a>
                        <a href="#0"> <img src="/src/assets/images/home-four/method-2.jpg" alt="payment"> </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>
</template>
<script>
export default {
    name: "App",
    components: {
    },
    mounted() {
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
