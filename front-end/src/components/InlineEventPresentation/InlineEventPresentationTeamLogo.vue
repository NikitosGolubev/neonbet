<template>
    <inline-event-presentation-item
        class="inline-event-presentation__team-logo"
        :style="`background-image: url(${logo});`"
        :class="selectClasses"
    >
    </inline-event-presentation-item>
</template>

<script>
    import BrightDullModesMixin from '../../shared/mixins/bright-dull-modes';

    import InlineEventPresentationItem from "./InlineEventPresentationItem";

    export default {
        name: "InlineEventPresentationTeamLogo",
        mixins: [BrightDullModesMixin],
        components: {InlineEventPresentationItem},
        props: {
            logo: {
                type: String,
                required: true
            }
        },
        computed: {
            selectClasses() {
                return {
                    'inline-event-presentation__team-logo_select-bright': this.isBrightSelect,
                    'inline-event-presentation__team-logo_select-dull': this.isDullSelect
                };
            }
        }
    }
</script>

<style scoped>

</style>
