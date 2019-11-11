<template>
    <!-- Top users section -->
    <div class="top-users card">

        <!-- Top users section header -->
        <header class="card__header top-users__header">
            <span class="h3-m0">Топ пользователей</span>
        </header>

        <!-- Top users list -->
        <div>
            <ol class="num-list">
                <!-- Top user record -->
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="AnotherUser134"
                        :balance="12004"
                        :is-current-user="true"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
                <top-users-record
                        :userpick="require('@/assets/img/avatar.png')"
                        nickname="SomeUser123"
                        :balance="12500"
                />
            </ol>
        </div>
    </div>
    <!-- END top users section -->
</template>

<script>
    import TopUsersRecord from "./TopUsersRecord";
    export default {
        name: "TopUsers",
        components: {TopUsersRecord}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
