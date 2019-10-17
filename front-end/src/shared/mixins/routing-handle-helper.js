export default {
    methods: {
        isRouteActive(url) {
            return this.$route.path === url;
        }
    }
};
