import moment from 'moment';

export default {
    props: {
        dateTime: {
            type: String,
            required: true
        }
    },
    computed: {
        time() {
            return moment(this.dateTime).format('HH:mm');
        },

        date() {
            return moment(this.dateTime).format('D ddd');
        }
    }
}
