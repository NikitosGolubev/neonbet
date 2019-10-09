<template>
    <user-profile>
        <div class="card__header">
            <user-profile-header />
        </div>

        <div class="card__content">
            <user-profile-content />

            <user-profile-nav />
        </div>
    </user-profile>
</template>

<script>
    import UserProfile from "../../../../components/UserProfile/UserProfile";
    import UserProfileHeader from "../../../../components/UserProfile/UserProfileHeader";
    import UserProfileContent from "../../../../components/UserProfile/UserProfileContent";
    import UserProfileNav from "../../../../components/UserProfile/UserProfileNav";

    export default {
        name: "HomeUserProfile",
        components: {
            UserProfileNav,
            UserProfileContent,
            UserProfile,
            UserProfileHeader
        }
    }
</script>

<style scoped>

</style>
