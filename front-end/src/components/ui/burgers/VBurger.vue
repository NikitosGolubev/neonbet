<template>
    <div class="burger">
        <input :class="{'burger__checkbox_active': isActive}" type="checkbox" checked class="burger__checkbox burger__checkbox_hidden">
        <label>
            <div class="burger__content" @click="burgerUsed">
                <span class="burger__bar burger__bar_1"></span>
                <span class="burger__bar burger__bar_2"></span>
                <span class="burger__bar burger__bar_3"></span>
                <span class="burger__bar burger__bar_4"></span>
            </div>
        </label>
    </div>
</template>

<script>
    export default {
        name: "VBurger",
        props: {
            isActive: {
                default: false,
                type: Boolean
            }
        },
        methods: {
            burgerUsed() {
                this.$emit('burger-used');
            }
        }
    }
</script>

<style lang="sass">
    @import sass/main
</style>
