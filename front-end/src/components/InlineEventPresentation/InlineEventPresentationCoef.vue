<template>
    <inline-event-presentation-item class="inline-event-presentation__coef" :class="selectClasses">
        <slot></slot>
    </inline-event-presentation-item>
</template>

<script>
    import BrightDullModelsMixin from '../../shared/mixins/bright-dull-modes';

    import InlineEventPresentationItem from "./InlineEventPresentationItem";

    export default {
        name: "InlineEventPresentationCoef",
        mixins: [BrightDullModelsMixin],
        components: {InlineEventPresentationItem},
        computed: {
            selectClasses() {
                return {
                    'inline-event-presentation__coef_select-bright': this.isBrightSelect,
                    'inline-event-presentation__coef_select-dull': this.isDullSelect
                };
            }
        }
    }
</script>
