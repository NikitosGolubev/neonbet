<template>
    <span class="admin-panel-logo h5 primary-light">
        NeonOne<span class="primary-light_bg alternative">ADMIN</span>
    </span>
</template>

<script>
    export default {
        name: "VAdminLogo"
    }
</script>

<style lang="sass">
    @import "../../../sass/admin/settings"

    .admin-panel-logo
        @extend %removeUserSelect
</style>
