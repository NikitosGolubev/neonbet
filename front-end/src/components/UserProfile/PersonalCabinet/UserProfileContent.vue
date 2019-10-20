<template>
    <div class="main-user-profile__data">
        <div class="user-avatar_wrap">
            <div class="user-avatar main-user-profile__avatar user-profile-avatar"
                 :style="`background: url(${user.avatar}) center center no-repeat;`">
            </div>
            <div class="user-avatar_border"></div>
        </div>

        <div class="main-user-profile__details">
            <div class="main-user-profile__details-item">
                <span class="main-user-profile__nickname">{{user.nickname}}</span>
            </div>
            <div class="balance main-user-profile__details-item">
                <div class="money balance__money-pick"></div>
                <div class="balance__content">{{ user.balance }}</div>
            </div>
            <div class="main-user-profile__details-item text_medium-sz">
                <v-button-upload-gradient v-model="user.avatar" button-init-val="Изменить аватар" />
            </div>
        </div>
    </div>
</template>

<script>
    import VButtonUploadGradient from "../../ui/buttons/VButtonUploadGradient";

    export default {
        name: "UserProfileContent",
        components: {VButtonUploadGradient},
        props: {
            user: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
