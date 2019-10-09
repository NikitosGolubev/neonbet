<template>

    <div class="carousel glide">
        <!-- Previous control -->
        <div data-glide-el="controls">
            <span class="carousel__controls" data-glide-dir="<">
                <svg class="carousel__controls_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="199.404px" height="199.404px" viewBox="0 0 199.404 199.404" xml:space="preserve">
                    <g>
                        <polygon points="135.412,0 35.709,99.702 135.412,199.404 163.695,171.119 92.277,99.702 163.695,28.285 	"/>
                    </g>
                </svg>
            </span>
        </div>

        <!-- Slides -->
        <div class="glide__track carousel__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide">
                    <div class="carousel__slide">
                        <!-- Slider header -->
                        <span class="carousel__header h1">Раздаём скины</span>

                        <!-- Slider tagline -->
                        <p class="carousel__tagline attention">Делай ставки - получай лут!</p>

                        <!-- Slider action call -->
                        <a class="carousel__action-call btn btn_outline-simple-fillable btn_lg" href="#">
                            Подробнее
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Next control -->
        <div data-glide-el="controls">
            <span class="carousel__controls" data-glide-dir=">">
                <svg class="carousel__controls_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="199.404px" height="199.404px" viewBox="0 0 199.404 199.404" xml:space="preserve">
                    <g>
                        <polygon points="63.993,199.404 163.695,99.702 63.993,0 35.709,28.285 107.127,99.702 35.709,171.119 	"/>
                    </g>
                </svg>
            </span>
        </div>
    </div>

</template>

<script>
    import Glide from '@glidejs/glide';

    export default {
        name: "UpperCarousel",
        mounted() {
            this.carousel = this.initCarousel();
        },
        data() {
            return {
                carousel: null
            }
        },
        methods: {
            initCarousel: () => {
                return new Glide('.carousel', {
                    type: 'carousel',
                    autoplay: 8000
                }).mount();
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
