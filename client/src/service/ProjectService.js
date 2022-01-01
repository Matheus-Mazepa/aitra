import axios from 'axios';
import Cookies from "js-cookie";

export const fetch = () => {
  return axios.get('/projects', {
    headers: {
      contentType: 'application-json',
      'Authorization': 'Bearer '  + Cookies.get('authorization') || ''
    }
  })
    .then(response => {
      return response;
    });
}

export const fetchProject = (id) => {
  return axios.get(`/projects/${id}`, {
    headers: {
      contentType: 'application-json',
      'Authorization': 'Bearer '  + Cookies.get('authorization') || ''
    }
  })
    .then(response => {
      return response;
    });
}

export const create = (payload) => {
  return axios.post('/projects', {
    project: {
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

export const edit = (payload, id) => {
  return axios.put(`/projects/${id}`, {
    project: {
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
  fetch,
  create,
  edit
};