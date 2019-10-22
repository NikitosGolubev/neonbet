<template>
    <inline-event-presentation-item class="inline-event-presentation__separator">
        <slot></slot>
    </inline-event-presentation-item>
</template>

<script>
    import InlineEventPresentationItem from "./InlineEventPresentationItem";
    export default {
        name: "InlineEventPresentationSeparator",
        components: {InlineEventPresentationItem}
    }
</script>

<style scoped>

</style>
