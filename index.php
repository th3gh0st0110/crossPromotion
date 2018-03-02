<html>
<head>
    <meta name="viewport" content="width=1280, initial-scale=1 maximum-scale=1.0, user-scalable=no">
    <style>
        :root{
            font-size: 100px;
            font-family: Tahoma;
        }
        @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

        body {
            opacity:0;
            -webkit-animation:fadeIn ease-in 1;
            -moz-animation:fadeIn ease-in 1;
            animation:fadeIn ease-in 1;

            -webkit-animation-fill-mode:forwards;
            -moz-animation-fill-mode:forwards;
            animation-fill-mode:forwards;

            -webkit-animation-duration:1s;
            -moz-animation-duration:1s;
            animation-duration:1s;
        }
    </style>
    <script></script>
</head>
<body>
<?php
include './scripts/banner.php';
include './scripts/table.php';

?>

<script>
     document.documentElement.style.fontSize=100/(window.devicePixelRatio)+"px";
</script>
</body>
</html>
