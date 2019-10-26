import FieldMixin from './field';

export default {
    mixins: [FieldMixin],
    props: {
        disabledClasses: {
            type: Array,
            default: () => ['field_secondary-disabled']
        },

        isStableStyling: {
            type: Boolean,
            default: false
        }
    },
    computed: {
        stableStylingClasses() {
            if (this.isStableStyling) {
                return ['field_secondary-stable'];
            }

            return '';
        }
    }
}
