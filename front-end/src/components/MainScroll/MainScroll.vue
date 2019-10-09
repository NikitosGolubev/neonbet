<template>
    <simplebar :class="this.classes+' custom-scroll'">
        <slot></slot>
    </simplebar>
</template>

<script>
    import simplebar from 'simplebar-vue';
    import 'simplebar/dist/simplebar.min.css';

    export default {
        name: "Scroll",
        props: {
            classes: {
                type: String,
                default: ''
            }
        },
        components: {
            simplebar
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
