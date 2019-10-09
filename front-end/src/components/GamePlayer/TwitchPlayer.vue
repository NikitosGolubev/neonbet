<template>
    <div class="broadcast-player">
        <div @click="$emit('close-player')" class="red-cross broadcast-player__close item-btn"></div>

        <iframe class="broadcast-player__content"
                :src="broadcastUrl"
                frameborder="no"
                scrolling="no"
                allowfullscreen="true">
        </iframe>
    </div>
</template>

<script>
    export default {
        name: "TwitchPlayer",
        props: {
            broadcastUrl: {
                type: String,
                required: true
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
