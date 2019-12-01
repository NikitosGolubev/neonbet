export default {
    props: ['value'],
    methods: {
        valueChanged(val) {
            this.$emit('input', val);
        }
    }
};
