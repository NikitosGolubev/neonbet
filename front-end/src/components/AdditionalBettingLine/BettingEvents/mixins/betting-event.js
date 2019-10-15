export default {
    props: {
        event: {
            type: Object,
            required: true
        }
    },
    methods: {
        coef(num) {
            return num+"%";
        }
    }
};
