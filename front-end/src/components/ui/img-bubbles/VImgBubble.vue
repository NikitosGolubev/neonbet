<template>
    <div class="team-logo-bubble"
         :style="`background: url(${imgPath}) center center no-repeat;`">
    </div>
</template>

<script>
    export default {
        name: "VImgBubble",
        props: {
            imgPath: {
                type: String,
                required: true
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
