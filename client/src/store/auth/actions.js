import { requestLogin } from '@/service/Authentication';
import Cookies from "js-cookie";

export default {
  async submitLogin({state}, credentials) {
    return requestLogin(state, credentials).then(response => {
      Cookies.set('user-name', response.data.data.name);
      Cookies.set('authorization', response.data.data.token, 1/48);
      return response.data;
    });
  },

  logout() {
    Cookies.remove('authorization');
    window.router.push({ name: 'Login' });
  }

}