const state = {
    isSidebarActive: false
};

const actions = {
    adjustSidebar({state, commit}) {
        commit('reverseSidebarState');
    }
};

const mutations = {
    reverseSidebarState(state) {
        state.isSidebarActive = !state.isSidebarActive;
    }
};

const getters = {};

export default {
    namespaced: true,
    state,
    actions,
    getters,
    mutations
};