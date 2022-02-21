import axios from 'axios';
import qs from 'qs';

// const url = process.env.VUE_APP_API_BASE_URL;
const url = 'http://34.251.55.9:9171';

function list(params) {
  const options = {
    params: params,
    paramsSerializer: function (params) {
      return qs.stringify(params, {encode: false});
    }
  };
  return axios.get(`${url}/api/recipes`,options)
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
