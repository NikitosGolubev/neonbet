<template>
    <div class="simple-score">
        <span v-if="!isEmpty">{{score1}}</span>
        <span class="simple-score__separator">-</span>
        <span v-if="!isEmpty">{{score2}}</span>
    </div>
</template>

<script>
    export default {
        name: "VSimpleScore",
        props: {
            isEmpty: {
                default: false,
                type: Boolean
            },
            score1: {
                type: Number,
                default: 0
            },
            score2: {
                type: Number,
                default: 0
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
