<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .banner {
            position: relative;
            text-align: center;
            color: white;
        }

        .logo {
            position: absolute;
            top: 16px;
            left: 24px;
        }

        .btn_close {
            position: absolute;
            right: 24px;
            top: 16px;
        }
        .btn_close:active{
            transform: scale(1.05);
        }

    </style>
</head>

<body>
<div class="banner">
    <img src="./images/banner.png" alt="Banner" width="1280" height="96">
    <img src="./images/logo.png" alt="Logo" class="logo">
    <input type="image" src="./images/btn_close.png" alt="Close" class="btn_close" onclick="CloseWindow()">
</div>

<script>
    function CloseWindow() {
        var objWindow = window.open(location.href,"_self");
        objWindow.close();
    }
</script>

</body>
</html>