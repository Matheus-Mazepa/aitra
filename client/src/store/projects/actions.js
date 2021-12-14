import { fetch } from '@/service/ProjectService';

export default {
  fetchProjects({state}) {
    fetch().then(response => {
      state.projects = response.data;
    });
  },
};
