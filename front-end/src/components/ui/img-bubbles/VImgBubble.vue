<template>
    <div class="img-bubble"
         :style="`background: url(${imgPath}) center center no-repeat;`">
    </div>
</template>

<script>
    import BubbleMixin from './mixins/img-bubble';

    export default {
        name: "VImgBubble",
        mixins: [BubbleMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
