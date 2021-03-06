<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="msapplication-tap-highlight" content="no" />

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes" />

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>CORNUCOPIA</title>

        <script src="/framework.js?hash=<?=rand()?>"></script>
        <script src="/calculator.test.js?hash=<?=rand()?>"></script>
        <script src="/calculator.js?hash=<?=rand()?>"></script>
        <script src="/frontend.test.js?hash=<?=rand()?>"></script>
        <script src="/frontend.js?hash=<?=rand()?>"></script>
        <script>
            gifs = ["https://giphy.com/embed/aQUGAeZ1fBWpy", "https://giphy.com/embed/bZBmitwUwKtDa", "https://giphy.com/embed/damb8okh8wt7dCKZ5Z"];
        </script>
        <style>
            html {
                height: 100%;
            }

            body {
                background: #ff0000;
                height: 100%;
                font-family: sans-serif;
                margin: 0;
                padding: 0;
            }

            h1 {
                text-align: center;
                color: #fff;
                background: #00ff00;
                margin: 0;
                padding: 20px 0;
            }

            form {
                width: 640px;
                padding: 20px;
                box-sizing: border-box;
                box-shadow: 0 0 50px rgba(0, 0, 0, .5);
                margin: 0 auto;
                margin-top: 40px;
                max-width: 90%;
                background: #ff00ff;
            }

            form fieldset {
                margin: 0;
                padding: 0;
                border: none;
                margin-bottom: 20px;
                overflow: hidden;
            }

            form label {
                display: block;
            }

            form input[type="number"], form input[type="text"] {
                line-height: 50px;
                border: 1px solid #ccc;
                height: 50px;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                padding-left: 5px;
                width: 100%;
                background: #fff;
            }

            form input.error {
                border-color: #f00;
            }

            span {
                color: #fff;
            }

            form input[type="submit"] {
                line-height: 50px;
                height: 50px;
                margin: 0;
                padding: 0;
                padding-left: 5px;
                width: 100%;
                border: none;
                font-size: 30px;
                color: #ffffff;
                background: #00ff00;
            }

            .result {
                font-size: 20px;
                margin-top: 20px;
                display: none;
            }
        </style>
    </head>
    <body style="">
        <h1>Ferry Cost Calculator</h1>
        <form action="#" onsubmit="transport_cost(); return false;">
            <fieldset>
                <label>Cost per transport in £</label>
                <input type="text" name="cost_of_transport" value="0.25" placeholder="Cost per transport in £" />
            </fieldset>

            <fieldset>
                <label>Bags of corn 🌽</label>
                <input type="number" name="bags_of_corn" value="" placeholder="Bags of corn" />
            </fieldset>

            <fieldset>
                <label>Geese 🦢</label>
                <input type="number" name="geese" value="" placeholder="Geese" />
            </fieldset>

            <input type="submit" value="CALCULATE 🌽" />

            <div class="result">

            </div>
        </form>
        <iframe src="about:blank;" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen style="margin: 0 auto; display: block;"></iframe><p><a href="https://giphy.com/gifs/animation-seattle-ferry-damb8okh8wt7dCKZ5Z">via GIPHY</a></p>
    </body>
</html>