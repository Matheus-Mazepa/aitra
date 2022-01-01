import { fetch, create, edit, fetchActivity, setAsFinished } from '@/service/ActivityService';

export default {
  // eslint-disable-next-line no-unused-vars
  setAsFinished({state}, {projectId, id}) {
    setAsFinished(projectId, id).then(response => {
      if (response.status === 200)
        window.location.reload();
    });
  },

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
    }).catch(error => {
      state.errors = error.response.data.errors;
    });
  },

  // eslint-disable-next-line no-unused-vars
  editActivity({state}, {payload, projectId, id}) {
    edit(payload, projectId, id).then(response => {
      if (response.status === 200)
        window.router.push({ name: 'activities', params: { projectId: projectId } });

    }).catch(error => {
      state.errors = error.response.data.errors;
    });
  }
};
