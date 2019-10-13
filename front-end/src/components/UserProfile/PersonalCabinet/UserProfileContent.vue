<template>
    <div class="main-user-profile__data">
        <!-- Avatar -->
        <div class="user-avatar_wrap">
            <div class="user-avatar main-user-profile__avatar user-profile-avatar"
                 :style="`background: url(${require('@/assets/common/img/avatar.png')}) center center no-repeat;`">
            </div>
            <div class="user-avatar_border"></div>
        </div>

        <div class="main-user-profile__details">
            <div class="main-user-profile__details-item">
                <span class="main-user-profile__nickname">Никнейм</span>
            </div>
            <div class="balance main-user-profile__details-item">
                <div class="money balance__money-pick"></div>
                <div class="balance__content">12500</div>
            </div>
            <div class="main-user-profile__details-item text_medium-sz">
                <gradient-file-upload button-value="Изменить аватар" />
            </div>
        </div>
    </div>
</template>

<script>
    import GradientFileUpload from "../../UploadFileBtn/GradientFileUpload";
    export default {
        name: "UserProfileContent",
        components: {GradientFileUpload}
    }
</script>

<style scoped>

</style>
