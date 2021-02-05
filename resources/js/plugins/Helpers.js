const numeral = require('numeral');

export default {

    install(Vue, options) {

        Vue.filter('dateFormat', function (value, format) {
            if (value) {
                return moment(String(value)).format(format || "DD.MM.YYYY")
            }
        });

        Vue.filter('dateFormatForHuman', function (value, format) {
            if (value) {
                return moment(String(value)).format(format || "DD MMMM YYYY")
            }
        });

        Vue.filter('timeFormat', function (value, format) {
            if (value) {
                return moment(String(value)).format(format || "H:mm")
            }
        });
        Vue.filter('datetimeFormat', function (value, format) {
            if (value) {
                return moment(String(value)).format(format || "DD.MM.YYYY H:mm")
            }
        });
        
        Vue.prototype.laraPaginate = (data) => {
            let pagination = {}
            let paginate = Object.keys(data).filter(key => {
                return data[key] != data.data
            }).map(key => {
                pagination[key] = data[key]
            })

            return pagination
        },

        Vue.prototype.getIndex = (array, key, value) => {
            return array.findIndex(i => i[key] == value)
        },

        Vue.prototype.$objectPropToArray = (array, key) => {
            let result = [];
            array.map(item => {
                result.push(item[key])
            });
            return result;
        },

        Vue.prototype.laravelValidation = (err) => {
            if (err.response) {
                if (err.response.status === 422) {
                    return err.response.data.errors;
                }
            }
            return {};
        },

        Vue.prototype.$scrollTo = (selector) => {
            let selectedProductsComponent = document.querySelector(selector);
            if (selectedProductsComponent) {
                selectedProductsComponent.scrollIntoView({ behavior: 'smooth', block: 'end'});
            } else {
                console.log('not found selector');
            }
        }
    }
};
