<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        #banner {
            position: relative;
        }

        #banner img {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 96px;
        }

        #logo {
            position: absolute;
        }

        #btn_close {
            position: absolute;
        }

        #btn_close:active {
            -webkit-transform: scale(1.05);
        }

        @media (-webkit-min-device-pixel-ratio: 1) {
            #banner img {
                width: 100%;
                height: 96px;
            }
            #logo{
                top: 16px;
                left: 24px;
            }
            #logo img{
                width: 72px;
                height: 64px;
            }
            #btn_close{
                right: 24px;
                top: 16px;
            }
            #btn_close img{
                width: 64px;
                height: 64px;
            }
        }
        @media (-webkit-min-device-pixel-ratio: 1.5) {
            #banner img {
                width: 100%;
                height: calc(96px/1.5);
            }
            #logo{
                top: calc(16px/1.5);
                left: calc(24px/1.5);
            }
            #logo img{
                width: calc(72px/1.5);
                height: calc(64px/1.5);
            }
            #btn_close{
                right: calc(24px/1.5);
                top: calc(16px/1.5);
            }
            #btn_close input{
                width: calc(64px/1.5);
                height: calc(64px/1.5);
            }
        }
        @media (-webkit-min-device-pixel-ratio: 2) {
            #banner img {
                width: 100%;
                height: calc(96px/2);
            }
            #logo{
                top: calc(16px/2);
                left: calc(24px/2);
            }
            #logo img{
                width: calc(72px/2);
                height: calc(64px/2);
            }
            #btn_close{
                right: calc(24px/2);
                top: calc(16px/2);
            }
            #btn_close input{
                width: calc(64px/2);
                height: calc(64px/2);
            }
        }
        @media (-webkit-min-device-pixel-ratio: 3) {
            #banner img {
                width: 100%;
                height: calc(96px/3);
            }
            #logo{
                top: calc(16px/3);
                left: calc(24px/3);
            }
            #logo img{
                width: calc(72px/3);
                height: calc(64px/3);
            }
            #btn_close{
                right: calc(24px/3);
                top: calc(16px/3);
            }
            #btn_close input{
                width: calc(64px/3);
                height: calc(64px/3);
            }
        }
    </style>
</head>

<body>
<div id="banner"><img src="./images/banner.png" alt="Banner"></div>
<div id="logo"><img src="./images/logo.png" alt="Logo"></div>
<div id="btn_close"><input type="image" src="./images/btn_close.png" alt="Close" onclick="CloseWindow()"></div>

<script>
    function CloseWindow() {
        var objWindow = window.open(location.href, "_self");
        objWindow.close();
    }
</script>

</body>
</html>