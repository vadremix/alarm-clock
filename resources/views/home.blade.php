<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alarm Clock Example</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        <div id="app">
            <!-- input -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Create Alarm</h2>
                            <input class="input-time input-hour" v-model="inputHour" type="text" maxlength="2" />:
                            <input class="input-time input-minute" v-model="inputMinute" type="text" maxlength="2" />:
                            <input class="input-time input-second" v-model="inputSecond" type="text" maxlength="2" />
                            <!--<label class="input-toggle-wrapper">
                                <input class="input-toggle" type="checkbox">
                                <span class="toggle-ampm">am / pm</span>
                            </label>-->
                            <button @click="createAlarm">Save</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- clock display -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Clock</h2>
                            <span v-cloak class="clock">@{{ timeFormatted }}</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- alarms -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Alarms</h2>
                            <div v-for="alarm in alarms">
                                <app-alarm :alarm="alarm" :clock="timeNow"></app-alarm>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>