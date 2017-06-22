<template>
    <div>
        <div class="alarm-time">
            {{ alarmTime }}
        </div>
    </div>
</template>

<script>
    var moment = require('moment');

    export default {
        props: ['alarm', 'clock'],

        data: function() {
            return {
                alarmTime: moment(this.alarm * 1000).format('LTS')
            }
        },

        watch: {
            alarm: function() {
                this.alarmTime = moment(this.alarm * 1000).format('LTS')
            },

            clock: function() {
                if(this.alarm === this.clock) {
                    console.log('Alarm going off!');
                }
            }
        }
    }
</script>