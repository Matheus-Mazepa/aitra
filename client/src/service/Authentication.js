import axios from 'axios';

export const requestLogin = (state, credentials) => {
  return axios.post('api/login', credentials)
    .then(response => {
      return response;
    });
}

export default {
  requestLogin
};