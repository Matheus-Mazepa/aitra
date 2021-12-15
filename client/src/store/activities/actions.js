import { fetch } from '@/service/ActivityService';

export default {
  fetchActivities({state}) {
    fetch().then(response => {
      state.activities = response.data;
    });
  },
};
