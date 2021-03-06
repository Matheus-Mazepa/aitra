import Cookies from 'js-cookie';

export default function auth({next, router}) {
  if (!Cookies.get('authorization')) {
    return router.push({ name: 'login' });
  }

  return next();
}