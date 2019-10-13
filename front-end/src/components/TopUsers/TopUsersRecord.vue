<template>
    <li class="top-users__record_wrap card__content" :class="currentUserClasses">
        <div class="top-users__record">
            <div class="top-users__record_left">
                <!-- Avatar -->
                <div class="user-avatar_wrap">
                    <div class="user-avatar top-users__avatar"
                         :style="`background: url(${userpick}) center center no-repeat;`">
                    </div>
                    <div class="user-avatar_border"></div>
                </div>

                <!-- Nickname -->
                <div class="top-users__nickname">{{nickname}}</div>
            </div>

            <div class="top-users__record_right">
                <!-- Balance -->
                <div class="balance">
                    <div class="money balance__money-pick"></div>
                    <div class="balance__content">{{balance}}</div>
                </div>
            </div>
        </div>
    </li>
</template>

<script>
    export default {
        name: "TopUsersRecord",
        computed: {
            currentUserClasses() {
                return {
                    'primary-gradient_bg': this.isCurrentUser,
                    'alternative': this.isCurrentUser
                }
            }
        },
        props: {
            balance: {
                type: Number,
                required: true
            },

            nickname: {
                type: String,
                required: true
            },

            userpick: {
                type: String,
                required: true
            },

            isCurrentUser: {
                default: false,
                type: Boolean
            }
        }
    }
</script>

<style scoped>

</style>
