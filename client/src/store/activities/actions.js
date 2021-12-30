import { fetch } from '@/service/ActivityService';

export default {
  fetchActivities({state}, projectId) {
    fetch(projectId).then(response => {
      state.activities = response.data;
    });
  },
};
