<template>

    <div class="carousel glide">
        <!-- Previous control -->
        <upper-carousel-slides-switcher direction="<">
            <g><polygon points="135.412,0 35.709,99.702 135.412,199.404 163.695,171.119 92.277,99.702 163.695,28.285 	"/></g>
        </upper-carousel-slides-switcher>

        <!-- Slides -->
        <div class="glide__track carousel__track" data-glide-el="track">
            <ul class="glide__slides">
                <upper-carousel-default-slide
                    header="Раздаём скины"
                    tagline="Делай ставки - получай лут!"
                    details-url="/details"
                />
            </ul>
        </div>

        <!-- Next control -->
        <upper-carousel-slides-switcher direction=">">
            <g><polygon points="63.993,199.404 163.695,99.702 63.993,0 35.709,28.285 107.127,99.702 35.709,171.119 	"/></g>
        </upper-carousel-slides-switcher>
    </div>

</template>

<script>
    import Glide from '@glidejs/glide';
    import UpperCarouselSlidesSwitcher from "./UpperCarouselSlidesSwitcher";
    import UpperCarouselDefaultSlide from "./UpperCarouselDefaultSlide";

    export default {
        name: "UpperCarousel",
        components: {UpperCarouselDefaultSlide, UpperCarouselSlidesSwitcher},
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
