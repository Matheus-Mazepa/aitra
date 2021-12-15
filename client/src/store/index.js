import Vue from 'vue'
import Vuex from 'vuex'
import auth from './auth'
import projects from './projects'
import activities from './activities'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    auth,
    projects,
    activities
  }
})
