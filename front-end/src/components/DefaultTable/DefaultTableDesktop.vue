<template>
    <div v-show="isVisible" v-observe-visibility="visibilityChanged">
        <slot></slot>
    </div>
</template>

<script>
    // Mixins
    import desktopMixin from './mixins/desk';

    export default {
        name: "DefaultTableDesktop",
        mixins: [desktopMixin]
    }
</script>