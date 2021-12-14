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

export default {
  fetch
};