import axios from "axios";
export default axios.create({
    baseURL: "http://my-history.gotechjsc.com/api/",
    headers: {
        "Content-type": "application/json",
        'Accept': '*/*',
        'X-Requested-With': 'XMLHttpRequest',
        'Authorization': 'Bearer ' + sessionStorage.getItem('access_token'),
    }
});
