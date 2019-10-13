<template>
    <user-profile>
        <div class="card__header">
            <header class="index-user-profile__header">
                <span class="h3-m0">Профиль</span>
            </header>
        </div>

        <div class="card__content">
            <user-profile-content />

            <user-profile-nav />
        </div>
    </user-profile>
</template>

<script>
    import UserProfile from "../../../../components/UserProfile/UserProfile";
    import UserProfileContent from "../../../../components/UserProfile/UserProfileContent";
    import UserProfileNav from "../../../../components/UserProfile/UserProfileNav";

    export default {
        name: "HomeUserProfile",
        components: {
            UserProfileNav,
            UserProfileContent,
            UserProfile
        }
    }
</script>

<style scoped>

</style>
