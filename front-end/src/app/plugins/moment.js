import moment from 'moment';

export default {
    install: function(Vue, options) {
        Vue.prototype.$moment = function (args) {
            return moment(args).locale('ru');
        }
    }
};
