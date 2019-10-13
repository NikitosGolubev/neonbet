<template>
    <div>
        <div @click="showPlayer" class="live-sensor" :class="liveSensorStateClass">
            <div class="live-sensor__status"></div>
            <div class="live-sensor__text">Live</div>
        </div>

        <div v-if="isPlayerActive">
            <twitch-player @close-player="closePlayer" :broadcast-url="broadcastUrl" />
        </div>
    </div>
</template>

<script>
    import TwitchPlayer from "../GamePlayer/TwitchPlayer";
    export default {
        name: "LiveSensor",
        components: {TwitchPlayer},
        computed: {
            liveSensorStateClass() {
                return this.isLive ? 'live-sensor_enabled' : 'live-sensor_disabled';
            }
        },
        props: {
            isLive: {
                type: Boolean,
                default: false
            },

            broadcastUrl: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                isPlayerActive: false
            }
        },
        methods: {
            showPlayer() {
                if (this.isLive) this.isPlayerActive = true;
            },

            closePlayer() {
                this.isPlayerActive = false;
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
