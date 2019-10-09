<template>
    <div class="games-filter__game-data">
        <!-- Game logotype with gradient border -->
        <div class="games-filter__game-logo_wrap" :class="activeClasses">
            <div class="games-filter__game-logo">
                <img :alt="name" class="games-filter__game-logo_img" :src="logoPath" />
            </div>
            <div class="games-filter__game-logo_border"></div>
        </div>

        <!-- Game name -->
        <div class="games-filter__game-name">{{name}}</div>
    </div>
</template>

<script>
    export default {
        name: "GamesFilterGame",
        props: {
            name: {
                type: String,
                required: true
            },
            logoPath: {
                type: String,
                required: true
            },
            isActive: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            activeClasses() {
                return {'games-filter__game-logo_active': this.isActive};
            }
        }
    }
</script>

<style scoped>

</style>
