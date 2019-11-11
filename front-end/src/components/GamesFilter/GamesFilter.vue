<template>
    <div class="games-filter card">
        <header class="games-filter__header card__header">
            <div><span class="h3-m0 alternative">Игры</span></div>

            <div class="games-filter__switcher">
                <div class="games-filter__switcher-sign">Выбрать всё</div>

                <v-default-toggle />

                <div class="games-filter__dropdown-trigger">
                    <dropdown-gradient-trigger :key-id="dropdownKey" />
                </div>
            </div>
        </header>

        <dropdown-element :apply-dropdown-at="1198" :key-id="dropdownKey">
            <main-scroll classes="games-filter__content">
                <games-filter-record name="Counter-Strike" :logo-path="require(`@/assets/img/csgo.png`)" />
                <games-filter-record name="Dota 2" :logo-path="require(`@/assets/img/dota2.png`)" />
                <games-filter-record name="NBA 2k19" :logo-path="require(`@/assets/img/nba.png`)" />
                <games-filter-record name="Call of Duty" :logo-path="require(`@/assets/img/callofduty.png`)" />
            </main-scroll>
        </dropdown-element>
    </div>
</template>

<script>
    import GamesFilterRecord from "./GamesFilterRecord";
    import VDefaultToggle from "../ui/toggles/VDefaultToggle";
    import DropdownElement from "../SiblingsDropdown/SiblingsDropdown";
    import DropdownGradientTrigger from "../SiblingsDropdown/trigger-variations/SiblingsDropdownGradientTrigger";
    import randomKeyGenerator from '../../shared/mixins/random-key-generator';


    export default {
        name: "GamesFilter",
        components: {
            VDefaultToggle,
            GamesFilterRecord,
            DropdownGradientTrigger,
            DropdownElement
        },
        mixins: [randomKeyGenerator],
        data() {
            return {
                dropdownKey: this.uniqueKey()
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
