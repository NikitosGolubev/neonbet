<template>
    <!-- Page footer -->
    <footer class="footer page__footer">
        <div class="footer__content">
            <div class="footer__item_wrap">
                <div class="footer__item">
                    <!-- Logo -->
                    <router-link :to="{name: 'home'}">
                        <v-animated-logo />
                    </router-link>

                    <div>
                        <span class="text_small-sz">© Copyright 2016-2018 Livestream Gaming Ltd. Все права защищены.
                            Азартные игры могут вызывать зависимость.</span>
                    </div>
                </div>
            </div>

            <!-- Footer nav -->
            <div class="footer__item_wrap">
                <div class="footer__item">
                    <ul class="footer__nav">
                        <li class="footer__nav-item"><span class="h6">NeonOne</span></li>
                        <li class="footer__nav-item">
                            <router-link to="#">
                                <span class="link_alternative">Правила сервиса</span>
                            </router-link>
                        </li>
                        <li class="footer__nav-item">
                            <router-link to="#">
                                <span class="link_alternative">Конфиденциальность</span>
                            </router-link>
                        </li>
                        <li class="footer__nav-item">
                            <router-link to="#">
                                <span class="link_alternative">Ответственная игра</span>
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__item_wrap">
                <div class="footer__item">
                    <ul class="footer__nav">
                        <li class="footer__nav-item"><span class="h6">Информация</span></li>
                        <li class="footer__nav-item">
                            <router-link to="#">
                                <span class="link_alternative">FAQ</span>
                            </router-link>
                        </li>
                        <li class="footer__nav-item">
                            <router-link to="#">
                                <span class="link_alternative">Бонусы и акции</span>
                            </router-link>
                        </li>
                        <li class="footer__nav-item">
                            <router-link to="#">
                                <span class="link_alternative">Биткоин FAQ</span>
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__item_wrap">
                <div class="footer__item">
                    <ul class="footer__nav">
                        <li class="footer__nav-item"><span class="h6">Поддержка</span></li>
                        <li class="footer__nav-item footer__nav-item_pictured">
                            <div class="clock footer__nav-item_pick"></div>
                            <div>работаем 24/7</div>
                        </li>
                        <li class="footer__nav-item footer__nav-item_pictured">
                            <div class="phone footer__nav-item_pick"></div>
                            <div>+7 909 546 34 45</div>
                        </li>
                        <li class="footer__nav-item footer__nav-item_pictured">
                            <div class="letter footer__nav-item_pick"></div>
                            <div>support@neon.bet</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END page footer -->
</template>

<script>
    import VAnimatedLogo from "../ui/logos/VAnimatedLogo";
    export default {
        name: "MainFooter",
        components: {VAnimatedLogo}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
