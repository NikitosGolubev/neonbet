import {required, minLength, maxLength} from 'vuelidate/lib/validators';

export default {
    data() {
        return {
            queryMinLen: 3,
            queryMaxLen: 100
        }
    },
    validations: {
        query: {
            required,
            minLength: minLength(3),
            maxLength: maxLength(100)
        },

        type: {
            required
        }
    },
    computed: {
        getQueryErrorMessage() {
            if (!this.$v.query.required) return 'Обязательно для заполнения';
            if (!this.$v.query.minLength) return `Значение должно содержать минимум ${this.queryMinLen} символа`;
            if (!this.$v.query.maxLength) return `Значение может содержать максимум ${this.queryMaxLen} символов`;

            return null;
        },

        getTypeErrorMessage() {
            return 'Обязательно для заполнения';
        },

        isValidationSucceeded() {
            return !this.$v.$anyError;
        }
    },
    methods: {
        validate() {
            this.$v.$touch();
        }
    }
};
