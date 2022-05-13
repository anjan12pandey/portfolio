import moment from "moment";

export default{
    methods: {
        formatDate(value) {
            if (value) {
              return moment(value).format("MMMM Do YYYY, h:mm:ss a'");
            }
        },
    }
}