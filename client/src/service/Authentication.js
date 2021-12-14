import axios from 'axios';

export const requestLogin = (state, credentials) => {
  return axios.post('/login', credentials)
    .then(response => {
      return response;
    });
}

export default {
  requestLogin
};