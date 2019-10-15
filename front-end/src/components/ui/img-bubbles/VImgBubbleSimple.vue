<template>
    <div class="simple-img-bubble"
         :style="`background: url(${imgPath}) center center no-repeat;`">
    </div>
</template>

<script>
    import BubbleMixin from './mixins/img-bubble';

    export default {
        name: "VImgBubbleSimple",
        mixins: [BubbleMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
