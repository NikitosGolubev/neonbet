const DEFAULT_SIZE = 'md';

const SIZES = new Map([
    ['sm', 'btn_sm'],
    [DEFAULT_SIZE, ''],
    ['lg', 'btn_lg']
]);

export default {
    props: {
        size: {
            type: String,
            default: DEFAULT_SIZE
        }
    },
    computed: {
        sizeClass() {
            return SIZES.get(this.size);
        }
    },
    created() {
        if (!SIZES.has(this.size)) {
            console.warn(undefinedSizeWarningMessage(this.size));
            this.size = DEFAULT_SIZE;
        }
    }
}

function undefinedSizeWarningMessage(size) {
    return `${size} button size is not supported. Your choice was aligned with defaults. (${DEFAULT_SIZE})`;
}
