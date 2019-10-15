<template>
    <div class="my-bets">
        <selected-bets-open-btn @click.native="adjustSelectedBets" :num-events-picked="0" />

        <div @click="adjustSelectedBets" v-if="isOpened" class="my-bets__content_bg"></div>

        <transition name="slide-side">
            <div class="my-bets__content_wrap" v-if="isOpened">
                <selected-bets-close-btn @click.native="adjustSelectedBets" :num-events-picked="0" />

                <selected-bets-content />
            </div>
        </transition>
    </div>
</template>

<script>
    import SelectedBetsOpenBtn from "./SelectedBetsOpenBtn";
    import SelectedBetsCloseBtn from "./SelectedBetsCloseBtn";
    import SelectedBetsContent from "./SelectedBetsContent";

    export default {
        name: "SelectedBets",
        components: {SelectedBetsContent, SelectedBetsCloseBtn, SelectedBetsOpenBtn},
        data() {
            return {
                isOpened: false
            }
        },
        methods: {
            adjustSelectedBets() {
                this.isOpened = !this.isOpened;
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
