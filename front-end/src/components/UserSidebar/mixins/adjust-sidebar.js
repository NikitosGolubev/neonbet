import {mapState, mapActions} from 'vuex';

export default {
    computed: {
        ...mapState({
            isSidebarActive: state => state.sidebar.isSidebarActive
        })
    },
    methods: {
        ...mapActions('sidebar', [
            'adjustSidebar'
        ])
    }
};
