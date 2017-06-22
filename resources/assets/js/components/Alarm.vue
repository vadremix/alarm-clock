<template>
    <div>
        <div class="alarm-time" :class="{ dismissed: dismissed }">
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
                alarmTime: moment(this.alarm * 1000).format('LTS'),
                dismissed: false
            }
        },

        watch: {
            alarm: function() {
                this.alarmTime = moment(this.alarm * 1000).format('LTS')

                if(this.alarm >= this.clock) {
                    this.dismissed = false;
                }
            },

            clock: function() {
                if(this.alarm === this.clock) {
                    this.$emit('alarm-trigger', true);
                    this.dismissed = true;
                }
            }
        },

        created: function() {
            if(this.alarm <= this.clock) {
                this.dismissed = true;
            }
        }
    }
</script>