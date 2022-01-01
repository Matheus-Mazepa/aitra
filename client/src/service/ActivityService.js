import axios from 'axios';
import Cookies from "js-cookie";

export const fetch = (projectId) => {
  return axios.get(`/projects/${projectId}/activities`, {
    headers: {
      contentType: 'application-json',
      'Authorization': 'Bearer '  + Cookies.get('authorization') || ''
    }
  })
    .then(response => {
      return response;
    });
}

export const setAsFinished = (projectId, id) => {
  return axios.patch(`/projects/${projectId}/activities/${id}`, {
    'activity': {
      is_finished: true
    }
  },{
    headers: {
      contentType: 'application-json',
      'Authorization': 'Bearer '  + Cookies.get('authorization') || ''
    }
  })
    .then(response => {
      return response;
    });
}

export const fetchActivity = (projectId, id) => {
  return axios.get(`/projects/${projectId}/activities/${id}`, {
    headers: {
      contentType: 'application-json',
      'Authorization': 'Bearer '  + Cookies.get('authorization') || ''
    }
  })
    .then(response => {
      return response;
    });
}

export const create = (payload, projectId) => {
  return axios.post(`/projects/${projectId}/activities`, {
    activity: {
      name: payload.name,
      start_date: payload.startDate,
      finish_date: payload.finishDate
    }
  },{
    headers: {
      contentType: 'application-json',
      'Authorization': 'Bearer '  + Cookies.get('authorization') || ''
    }
  })
    .then(response => {
      return response;
    });
}

export const edit = (payload, projectId, id) => {
  return axios.put(`/projects/${projectId}/activities/${id}`, {
    activity: {
      name: payload.name,
      start_date: payload.startDate,
      finish_date: payload.finishDate
    }
  },{
    headers: {
      contentType: 'application-json',
      'Authorization': 'Bearer '  + Cookies.get('authorization') || ''
    }
  })
    .then(response => {
      return response;
    });
}

export default {
  fetch
};