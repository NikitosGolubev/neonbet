<template>
    <div class="upload-gradient-btn">
        <label :for="inputId" class="upload-gradient-btn__label">
            {{ representationValue }}
        </label>
        <input @change="fileSelected" class="upload-gradient-btn__input" type="file" :id="inputId" />
    </div>
</template>

<script>
    import FileUploadMixin from './mixins/file-upload';

    export default {
        name: "VButtonUploadGradient",
        mixins: [FileUploadMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
