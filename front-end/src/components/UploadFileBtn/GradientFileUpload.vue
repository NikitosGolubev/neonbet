<template>
    <div class="upload-gradient-btn">
        <label :for="inputId" class="upload-gradient-btn__label">
            {{ labelValue }}
        </label>
        <input @change="fileSelected" class="upload-gradient-btn__input" type="file" :id="inputId" />
    </div>
</template>

<script>
    import uuid from 'uuid/v4';

    export default {
        name: "GradientFileUpload",
        computed: {
            labelValue() {
                return this.isFileSelected ? this.selectedFileName : this.buttonValue;
            }
        },
        props: {
            buttonValue: {
                type: String,
                required: true
            }
        },
        mounted() {
            this.inputId = uuid();
        },
        data() {
            return {
                inputId: null,
                isFileSelected: false,
                selectedFileName: null,
                maxFileNameLength: 32
            }
        },
        methods: {
            fileSelected(event) {
                let fileData = event.target.files[0];
                if (fileData) {
                    this.setFileName(fileData.name);
                    this.isFileSelected = true;
                }
            },

            setFileName(fullFileName) {
                // Cutting name and extension out of given filename
                let [name, extension] = fullFileName.split(/\.(.+)$/);

                // Making filename shorter for presentation purposes
                if (name.length > this.maxFileNameLength) {
                    name = name.substr(0, this.maxFileNameLength);
                }

                this.selectedFileName = `${name}.${extension}`;
            }
        }
    }
</script>

<style scoped>

</style>