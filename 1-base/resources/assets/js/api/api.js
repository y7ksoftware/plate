import axios from 'axios';

export function getData() {

    return axios.get('/get-data')
        .then((response) => {
            return response.data;
        });

}
