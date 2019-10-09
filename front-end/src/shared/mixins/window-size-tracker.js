/**
 * This mixin helps to observe window size changes. Both width and height.
 */
export default {
    data() {
        return {
            windowWidth: 0,
            windowHeight: 0,
            isMounted: false
        }
    },
    methods: {
        windowResizeDetected() {
            this.windowWidth = window.innerWidth;
            this.windowHeight = window.innerHeight;
        }
    },
    created() {
        window.addEventListener('resize', this.windowResizeDetected);
        this.windowResizeDetected();
    },
    mounted() {
        this.isMounted = true;
    },
    destroyed() {
        window.removeEventListener('resize', this.windowResizeDetected);
    }
};