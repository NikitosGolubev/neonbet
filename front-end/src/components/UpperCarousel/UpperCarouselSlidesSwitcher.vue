<template>
    <div data-glide-el="controls">
        <span class="carousel__controls" :data-glide-dir="direction">
            <svg class="carousel__controls_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="199.404px" height="199.404px" viewBox="0 0 199.404 199.404" xml:space="preserve">
                <slot></slot>
            </svg>
        </span>
    </div>
</template>

<script>
    export default {
        name: "UpperCarouselSlidesSwitcher",
        props: {
            direction: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
