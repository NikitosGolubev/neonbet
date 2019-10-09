<template>
    <div class="card__content games-filter__concrete">
        <games-filter-game :name="name" :logo-path="logoPath" />

        <v-default-toggle />
    </div>
</template>

<script>
    import GamesFilterGame from "./GamesFilterGame";
    import VDefaultToggle from "../ui/toggles/VDefaultToggle";

    export default {
        name: "GamesFilterRecord",
        components: {VDefaultToggle, GamesFilterGame},
        props: {
            name: {
                type: String,
                required: true
            },
            logoPath: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
