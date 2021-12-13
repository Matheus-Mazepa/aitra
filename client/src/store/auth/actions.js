import {requestLogin} from '@/service/Authentication';

export default {
  submitLogin({state}, credentials) {
    requestLogin(state, credentials);
  }

}