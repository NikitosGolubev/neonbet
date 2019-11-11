const MAIN_CONTENT_CLASS_COLLAPSED = 'admin-panel__main_collapsed';
const MAIN_CONTENT_CLASS_NOT_COLLAPSED = 'admin-panel__main_uncollapsed';

export default {
    data() {
        return {
            isMenuOpened: true
        };
    },
    computed: {
        mainContentPositioningClass() {
            return this.isMenuOpened ? MAIN_CONTENT_CLASS_NOT_COLLAPSED : MAIN_CONTENT_CLASS_COLLAPSED;
        }
    },
    watch: {
        isMenuOpened(val) {
            if (!val) {
                this.$refs.mainContainer.classList.remove(MAIN_CONTENT_CLASS_NOT_COLLAPSED);
            } else {
                this.$refs.mainContainer.classList.remove(MAIN_CONTENT_CLASS_COLLAPSED);
            }
        }
    },
    methods: {
        adjustMenu() {
            this.isMenuOpened = !this.isMenuOpened;
        }
    }
};
