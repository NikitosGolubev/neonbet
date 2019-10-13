<template>
    <div class="score">
        <div class="score__concrete" :class="winnerClasses(1)">
            {{ score1 }}
        </div>

        <div class="score__separator">:</div>

        <div class="score__concrete" :class="winnerClasses(2)">
            {{ score2 }}
        </div>
    </div>
</template>

<script>
    export default {
        name: "VScore",
        props: {
            score1: {
                type: Number,
                required: true
            },
            score2: {
                type: Number,
                required: true
            }
        },
        computed: {
            result() {
                if (this.score1 > this.score2) return 1;
                if (this.score1 < this.score2) return 2;
                return 0;
            }
        },
        methods: {
            winnerClasses(resultNum) {
                if (resultNum === this.result) return 'score_winner';
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
