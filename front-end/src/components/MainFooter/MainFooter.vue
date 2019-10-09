<template>
    <!-- Page footer -->
    <footer class="footer page__footer">
        <div class="footer__content">
            <div class="footer__item_wrap">
                <div class="footer__item">
                    <!-- Logo -->
                    <a href="#">
                        <v-animated-logo />
                    </a>

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
                        <li class="footer__nav-item"><a href="#" class="link_alternative">Правила сервиса</a></li>
                        <li class="footer__nav-item"><a href="#" class="link_alternative">Конфиденциальность</a></li>
                        <li class="footer__nav-item"><a href="#" class="link_alternative">Ответственная игра</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__item_wrap">
                <div class="footer__item">
                    <ul class="footer__nav">
                        <li class="footer__nav-item"><span class="h6">Информация</span></li>
                        <li class="footer__nav-item"><a href="#" class="link_alternative">FAQ</a></li>
                        <li class="footer__nav-item"><a href="#" class="link_alternative">Бонусы и акции</a></li>
                        <li class="footer__nav-item"><a href="#" class="link_alternative">Биткоин FAQ</a></li>
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
