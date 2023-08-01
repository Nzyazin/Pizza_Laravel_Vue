<template>
    <Header/>
    <main class="overflow-hidden">
        <!-- Start Main Slider -->
        <section class="banner-style-3 overflow-hidden">
            <!-- Banner Carousel -->
            <div class="banner-slide3 slick" >

                <!-- Slide -->
                <div class="slide">
                    <div class="contant-box position-relative">

                        <img class="bg-img hundread-vh" src="/src/assets/images/home-three/home-3-bg.jpg" alt="image">

                        <div class="content-holder p-0 absolute-content">
                            <div class="container  w-100 h-100">
                                <div class="row align-items-center justify-content-start w-100 h-100">
                                    <div class="col-xl-6 col-md-9">
                                        <div class="content-common home3c slideup position-relative">
                                            <h6 class="new wow animated fadeInUp">Сочные пиццы</h6>
                                            <h1 class="wow animated fadeInUp" data-wow-delay="0.4s">
                                                Заряжают на весь день <br> Великолепные вкусы.
                                            </h1>
                                            <p class="text wow animated fadeInUp">
                                                Постоянным посетителям каждую неделю пицца в подарок
                                            </p>
                                            <router-link :to="{name: 'home'}"
                                                class="btn--primary button style2 wow animated fadeInUp">Ассортимент</router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Slider -->
    </main>
</template>

<script>
    import Header from "../layouts/Header.vue";
    export default {
        name: "Index",
        components: {Header},
        mounted() {
            $(document).trigger('change')
        }
    }
</script>

<style scoped>

</style>
