import { fetch, create, edit, fetchActivity } from '@/service/ActivityService';

export default {
  fetchActivities({state}, projectId) {
    fetch(projectId).then(response => {
      state.activities = response.data;
    });
  },

  fetchActivity({state}, {projectId, id}) {
    console.log(projectId, id);
    fetchActivity(projectId, id).then(response => {
      state.activity = response.data;
    });
  },

  // eslint-disable-next-line no-unused-vars
  createActivity({state}, {payload, projectId}) {
    create(payload, projectId).then(response => {
      if (response.status === 201)
        window.router.push({ name: 'activities', params: { projectId: projectId } });

    });
  },

  // eslint-disable-next-line no-unused-vars
  editActivity({state}, {payload, projectId, id}) {
    edit(payload, projectId, id).then(response => {
      if (response.status === 200)
        window.router.push({ name: 'activities', params: { projectId: projectId } });

    });
  }
};
