export default {
    props: {
        dateTime: {
            type: String,
            required: true
        }
    },
    computed: {
        time() {
            return this.$moment(this.dateTime).format('HH:mm');
        },

        date() {
            return this.$moment(this.dateTime).format('D ddd');
        }
    }
}
