<template>
    <section class="responsive-sidebar__user-profile">
        <user-profile>
            <user-profile-content />

            <user-profile-nav />
        </user-profile>
    </section>
</template>

<script>
    import UserProfile from "../UserProfile/UserProfile";
    import UserProfileContent from "../UserProfile/UserProfileContent";
    import UserProfileNav from "../UserProfile/UserProfileNav";
    export default {
        name: "UserSidebarProfile",
        components: {UserProfileNav, UserProfileContent, UserProfile}
    }
</script>

<style scoped>

</style>
