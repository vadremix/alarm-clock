
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app-alarm', require('./components/Alarm.vue'));

const app = new Vue({
    el: '#app',

    data: {
        timeNow: moment().unix(),
        timeFormatted: moment().format('LTS'),
        inputHour: 0,
        inputMinute: 0,
        inputSecond: 0,
        alarms: [],
        alarmSounding: false
    },

    watch: {
        timeNow: function() {
            app.timeFormatted = moment(app.timeNow * 1000).format('LTS')
        }
    },

    methods: {
        createAlarm: function() {
            // get beginning of day
            var startOfDay = moment().startOf('day').unix();

            // compute time to add to beginning of day
            // TODO: validate input
            var alarmOffset = (parseInt(app.inputHour) * 3600) + (parseInt(app.inputMinute) * 60) + parseInt(app.inputSecond);

            var alarm = startOfDay + alarmOffset;

            // if time has already passed today, set alarm for future by adding 24 hours
            if(alarm < moment().unix()) {
                alarm += 86400;
            }

            app.alarms.unshift(alarm);

            app.inputHour = 0;
            app.inputMinute = 0;
            app.inputSecond = 0;
        },

        soundAlarm: function() {
            this.alarmSounding = true;
        }
    },

    mounted: function() {
        setInterval(function() {
            app.timeNow = moment().unix();
        }, 1000);
    }
});