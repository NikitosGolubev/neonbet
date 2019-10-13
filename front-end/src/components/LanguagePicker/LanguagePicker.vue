<template>
    <div class="circular-language-picker">
        <ul class="circular-language-picker__list">
            <language-picker-item :is-active="true">Ru</language-picker-item>
            <language-picker-item>En</language-picker-item>
        </ul>
    </div>
</template>

<script>
    import LanguagePickerItem from "./LanguagePickerItem";
    export default {
        name: "LanguagePicker",
        components: {LanguagePickerItem}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
