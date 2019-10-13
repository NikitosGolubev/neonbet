<template>
    <div class="game-logo"
         :style="`background: url(${logo}) center center no-repeat;`">
    </div>
</template>

<script>
    export default {
        name: "VGameLogo",
        props: {
            logo: {
                type: String,
                required: true
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
