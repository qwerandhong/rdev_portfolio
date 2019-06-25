import Vue from 'vue'
import Vuex from 'vuex'
// import axios from 'axios'

Vue.use(Vuex);

const module = {
    namespace: true,
    state: {
        loading: false,
    },
    mutations: { //synchronous
        changeLoading(state, payload){
            state.loading = payload;
        },
    },

    actions: { //asynchronous
        changeLoading(state, payload){
            state.commit('changeLoading', payload);
        },
    },

    getters: {
        loading(state){
            return state.loading;
        },
    }
}

const store = new Vuex.Store({
    modules: {
        normal: module
    }
});


export default store;