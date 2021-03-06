import { fetch, create, edit, fetchProject } from '@/service/ProjectService';

export default {
  fetchProjects({state}) {
    fetch().then(response => {
      state.projects = response.data;
    });
  },

  fetchProject({state}, id) {
    fetchProject(id).then(response => {
      state.project = response.data;
    });
  },

  // eslint-disable-next-line no-unused-vars
  createProject({state}, payload) {
    create(payload).then(response => {
      if (response.status === 201)
        window.router.push({ name: 'projects' });
    }).catch(error => {
      state.errors = error.response.data.errors;
    });
  },

  // eslint-disable-next-line no-unused-vars
  editProject({state}, {payload, id}) {
    edit(payload, id).then(response => {
      if (response.status === 200)
        window.router.push({ name: 'projects' });

    }).catch(error => {
      state.errors = error.response.data.errors;
    });
  }
};
