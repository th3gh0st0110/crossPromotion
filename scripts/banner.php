<html>
<head>
    <style>
        .banner {
            position: relative;
            text-align: center;
            color: white;
            left: -8px;
            top: -8px;
        }
        #bannerImg img{
            width: 100vw;
            height: 0.96em;
        }
        #logo {
            position: absolute;
            top: 0.16em;
            left: 0.24em;
        }
        #logo img{
            width: 0.72em;
            height: 0.64em;
        }

        #btnClose {
            position: absolute;
            right: 0.1em;
            top: 0.16em;
        }
        #btnClose:active{
            -webkit-transform: scale(1.05);
        }
        #btnClose img{
            width: 0.64em;
            height: 0.64em;
        }

    </style>
</head>

<body>
<div class="banner">
    <div id="bannerImg"><img src="./images/banner.png" alt="Banner"></div>
    <div id="logo"><img src="./images/logo.png" alt="Logo"></div>
    <div id="btnClose"><img src="./images/btn_close.png" alt="Close"onclick="CloseWindow()"></div>
</div>

<script>
    function CloseWindow() {
        var objWindow = window.open(location.href,"_self");
        objWindow.close();
    }
</script>

</body>
</html>