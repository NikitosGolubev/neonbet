<template>
    <!-- Profile navigation -->
    <nav class="main-user-profile__nav">
        <router-link :to="{name: 'cabinet.deposit'}">
            <span class='link_primary-gradient'>Пополнить счёт</span>
        </router-link>
        <router-link :to="{name: 'cabinet'}">
            <span class='link_primary-gradient'>Настройки профиля</span>
        </router-link>
    </nav>
</template>

<script>
    export default {
        name: "UserProfileNav"
    }
</script>

<style scoped>

</style>
