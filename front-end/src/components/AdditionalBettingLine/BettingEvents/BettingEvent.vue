<template>
    <div class="additional-event">
        <betting-event-main :dropdown-key="dropdownKey" :event="event" />

        <dropdown-element :key-id="dropdownKey">
            <betting-event-additional-option
                    v-for="addOpt in event.additionalOptions"
                    :key="uniqueKey()"
                    :event="event"
                    :additional-event="addOpt"
            />
        </dropdown-element>
    </div>
</template>

<script>
    import BettingEventMain from "./BettingEventMain";
    import DropdownElement from "../../SiblingsDropdown/SiblingsDropdown";
    import BettingEventAdditionalOption from "./BettingEventAdditionalOption";
    import BettingEventMixin from './mixins/betting-event';
    import RandomKeyMixin from '../../../shared/mixins/random-key-generator';

    export default {
        name: "BettingEvent",
        components: {BettingEventAdditionalOption, BettingEventMain, DropdownElement},
        mixins: [BettingEventMixin, RandomKeyMixin],
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
