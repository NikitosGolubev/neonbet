<template>
    <v-burger @burger-used="adjustSidebar" :is-active="isSidebarActive" />
</template>

<script>
    import adjustSidebar from './mixins/adjust-sidebar';
    import VBurger from "../ui/burgers/VBurger";

    export default {
        name: "UserSidebarBurger",
        components: {VBurger},
        mixins: [adjustSidebar]
    }
</script>
