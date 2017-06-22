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
                            <input class="input-hour" type="number" maxlength="2" />:
                            <input class="input-minute" type="number" maxlength="2" />:
                            <input class="input-second" type="number" maxlength="2" />
                            <label class="input-toggle-wrapper">
                                <input class="input-toggle" type="checkbox">
                                <div class="toggle-ampm">am / pm</div>
                            </label>
                            <button>Save</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- clock display -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
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
                            <app-alarm></app-alarm>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>