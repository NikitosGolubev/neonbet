<template>
    <div class="main-user-profile__data">
        <!-- Avatar -->
        <router-link :to="{name: 'cabinet'}">
            <div class="link_default">
                <div class="user-avatar_wrap">
                    <div class="user-avatar main-user-profile__avatar"
                         :style="`background: url(${require('@/assets/img/avatar.png')}) center center no-repeat;`">
                    </div>
                    <div class="user-avatar_border"></div>
                </div>
            </div>
        </router-link>

        <!-- Nickname, balance -->
        <div class="main-user-profile__details">
            <div class="main-user-profile__details-item">
                <router-link :to="{name: 'cabinet'}">
                    <span class="main-user-profile__nickname link_default">Никнейм</span>
                </router-link>
            </div>
            <div class="balance main-user-profile__details-item">
                <div class="money balance__money-pick"></div>
                <div class="balance__content">12500</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UserProfileContent"
    }
</script>

<style scoped>

</style>
