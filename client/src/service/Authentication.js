import axios from 'axios';

export const requestLogin = (state, credentials) => {
  axios.post('login', credentials)
    .then(response => {
      console.log(response);
    });
}

export default {
  requestLogin
};