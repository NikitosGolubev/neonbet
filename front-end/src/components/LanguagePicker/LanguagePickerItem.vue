<template>
    <li class="circular-language-picker__list-item">
        <a href="#" :class="activeClass">
            <slot></slot>
        </a>
    </li>
</template>

<script>
    export default {
        name: "LanguagePickerItem",
        computed: {
            activeClass() {
                return this.isActive ? 'link_alternative-active' : 'link_alternative';
            }
        },
        props: {
            isActive: {
                default: false,
                type: Boolean
            }
        }
    }
</script>

<style scoped>

</style>
