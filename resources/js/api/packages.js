import axios from "axios";

export default {
    create(data) {
        return axios.post("package", data);
    }
};
