import RandomKeyMixin from '../../../../shared/mixins/random-key-generator';

const MAX_FILE_NAME_LENGTH = 32;

export default {
    mixins: [RandomKeyMixin],
    computed: {
        representationValue() {
            return this.isFileSelected ? this.selectedFileName : this.buttonInitVal;
        }
    },
    props: {
        buttonInitVal: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            inputId: this.uniqueKey(),
            isFileSelected: false,
            selectedFileName: null
        }
    },
    methods: {
        fileSelected(event) {
            let selectedFile = event.target.files[0];
            if (selectedFile) {
                this.setFileName(selectedFile.name);
                this.isFileSelected = true;

                this.$emit('input', selectedFile); // for V-MODEL working correct
            }
        },

        setFileName(fileName) {
            let [name, extension] = fetchDataFromFileName(fileName);
            name = shortenFileName(name);

            this.selectedFileName = `${name}.${extension}`;
        }
    }
};


function shortenFileName(fileName) {
    if (fileName.length > MAX_FILE_NAME_LENGTH) {
        fileName = fileName.substr(0, MAX_FILE_NAME_LENGTH);
    }
    return fileName;
}

function fetchDataFromFileName(fileName) {
    return fileName.split(/\.(.+)$/);
}
