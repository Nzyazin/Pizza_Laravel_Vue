<template>
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
                                        href="/" class="logo"> <img src="/src/assets/images/logo/logo.png"
                                                                    alt="" width="90" height="90"> </a>
                                        <div class="cart-holder">
                                            <router-link :to="{name: 'cart'}" class="cart cart-icon position-relative">

                                                <i class="flaticon-shopping-cart">{{cartItemCount}}</i>
                                            </router-link>
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
                                <li class="dropdown-list"> <router-link :to="{name: 'home'}"> <span>Заказать </span> </router-link></li>
                                <li class="dropdown-list"> <router-link :to="{name: 'cart'}"> <span>Корзина </span> </router-link></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-lg-block d-none">
                    <div class="row g-0 position-relative">
                        <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
                            <div class="logo"> <a href="/"> <img src="/src/assets/images/logo/logo.png" width="90" height="90" alt=""> </a>
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
                                                    <li class="dropdown-list"> <router-link :to="{name: 'home'}"> <span>Заказать </span> </router-link></li>
                                                    <li class="dropdown-list"> <router-link :to="{name: 'cart'}"> <span>Корзина </span> </router-link></li>
                                                </ul>
                                            </nav>
                                            <div class="right d-flex align-items-center justify-content-end" >
                                                <ul class="main-menu__widge-box d-flex align-items-center ">
                                                    <li class="cartm"> <router-link :to="{name: 'cart'}" class="number cart-icon" > <i
                                                        class="flaticon-shopping-cart" ></i><span
                                                        class="count" >{{ cartItemCount }}</span> </router-link></li>
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
                                href="/" class="logo"> <img src="/src/assets/images/logo/logo.png" width="90" height="90" alt=""> </a>
                                <div class="cart-holder">
                                    <router-link :to="{name: 'cart'}" class="cart cart-icon position-relative">
                                        {{cartItemCount}}
                                        <i class="flaticon-shopping-cart"></i>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container position-relative d-lg-block d-none">
                <div class="d-flex align-items-center justify-content-between"> <a href="/" class="logo me-2">
                    <img src="/src/assets/images/logo/logo.png" width="90" height="90" alt=""> </a>
                    <div class="mega-menu-default mega-menu d-lg-block d-none">
                        <div class="container ">
                            <div class="row">
                                <nav>
                                    <ul
                                        class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                        <li class="dropdown-list"> <router-link :to="{name: 'main'}"> <span>Главная</span> </router-link></li>
                                        <li class="dropdown-list"> <router-link :to="{name: 'home'}"> <span>Заказать </span> </router-link></li>
                                        <li class="dropdown-list"> <router-link :to="{name: 'cart'}"> <span>Корзина </span> </router-link></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-cart-closer"></div>
    </header>
</template>

<script>
import { mapGetters } from 'vuex';
export default {
    components: { },
    computed: {
        ...mapGetters({
            cartItemCount: 'cart/cartItemCount'
        })
    }
};
</script>
<style scoped>

</style>
