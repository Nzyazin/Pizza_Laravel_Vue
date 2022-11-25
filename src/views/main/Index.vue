<template>
    <main class="overflow-hidden">


<!-- Start Main Slider -->
<section class="banner-style-3 overflow-hidden">
    <!-- Banner Carousel -->
    <div class="banner-slide3 slick" data-slick='{"dots": true, "infinite": true, "speed": 600, "slidesToShow": 1,
        "slidesToScroll": 1, "arrows": false, "autoplay": true, "autoplaySpeed": 6000,
         "fade": false, "pauseOnHover": false}'>

        <!-- Slide -->
        <div class="slide">
            <div class="contant-box position-relative">

                <img class="bg-img hundread-vh" src="src/assets/images/home-three/home-3-bg.jpg" alt="image">

                <div class="content-holder p-0 absolute-content">
                    <div class="container  w-100 h-100">
                        <div class="row align-items-center justify-content-start w-100 h-100">
                            <div class="col-xl-6 col-md-9">
                                <div class="content-common home3c slideup position-relative">
                                    <h6 class="new wow animated fadeInUp">NEW COLLECTION</h6>
                                    <h1 class="wow animated fadeInUp" data-wow-delay="0.4s">
                                        Run anywhere <br> comfort everywhere.
                                    </h1>
                                    <p class="text wow animated fadeInUp">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vehicula
                                        faucibus massa est elit maecenas.
                                    </p>
                                    <a href="shop-grid.html"
                                        class="btn--primary button style2 wow animated fadeInUp">Shop
                                        Collection</a>
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
    export default {
        name: "Index",
        mounted() {
            $(document).trigger('change')
        }
    }
</script>

<style scoped>

</style>
