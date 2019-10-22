<template>
    <inline-event-presentation-item class="inline-event-presentation__team-name" :class="selectClasses">
        <slot></slot>
    </inline-event-presentation-item>
</template>

<script>
    import BrightDullModesMixin from '../../shared/mixins/bright-dull-modes';

    import InlineEventPresentationItem from "./InlineEventPresentationItem";
    export default {
        name: "InlineEventPresentationTeamName",
        mixins: [BrightDullModesMixin],
        components: {InlineEventPresentationItem},
        computed: {
            selectClasses() {
                return {'inline-event-presentation__team-name_select-dull': this.isDullSelect}
            }
        }
    }
</script>

<style scoped>

</style>
