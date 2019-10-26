import FieldMixin from './field';
import ErrorPrintingMixin from './error-printer';

export default {
    mixins: [ErrorPrintingMixin, FieldMixin],
    props: {
        disabledClasses: {
            type: Array,
            default: () => []
        }
    }
};
