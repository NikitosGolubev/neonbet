<template>
    <li class="glide__slide">
        <div class="carousel__slide">
            <!-- Slider header -->
            <span class="carousel__header h1">{{header}}</span>

            <!-- Slider tagline -->
            <p class="carousel__tagline attention">{{tagline}}</p>

            <!-- Slider action call -->
            <a :href="detailsUrl" class="carousel__action-call">
                <v-button-outline-simple-fillable size="lg">
                    Подробнее
                </v-button-outline-simple-fillable>
            </a>
        </div>
    </li>
</template>

<script>
    import VButtonOutlineSimpleFillable from "../ui/buttons/VButtonOutlineSimpleFillable";
    export default {
        name: "UpperCarouselDefaultSlide",
        components: {VButtonOutlineSimpleFillable},
        props: {
            header: {
                type: String,
                required: true
            },

            tagline: {
                type: String,
                required: true
            },

            detailsUrl: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
