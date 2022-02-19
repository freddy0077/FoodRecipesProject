import axios from 'axios';
// import qs from 'qs';

const url = process.env.VUE_APP_API_BASE_URL;

function list() {
  return axios.get(`${url}/api/recipes`)
    .then(response => {
      return {
        list: (response.data),
      };
    });
}

function get(id) {
  const options = {
    headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json',
    },
  };

  return axios.get(`${url}/api/recipes/${id}`, options)
    .then( (response) => {
      return response.data;
    });
}
export default {
  list,
  get,
};
