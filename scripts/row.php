<html>
<head>
    <style>
        body {
            font-family: Tahoma;
        }

        .rowbackground {
            border: 4px solid;
            border-image: url('./images/row_background.png');
            border-image-slice: 25 fill;
            height: 128px;
            width: 1208px;
            position: relative;
            left: 36px;
        }

        .icon {
            position: relative;
            left: 12px;
            top: 12px;
            width: 104px;
            height: 104px;
        }

        name {
            position: absolute;
            left: 130px;
            text-align: left;
            top: 20px;
            font-size: 24px;
        }

        desc {
            position: absolute;
            left: 130px;
            text-align: left;
            top: 50px;
            font-size: 24px;
        }

        .buttonClaim {
            position: absolute;
            right: 12px;
            top: 12px;
        }
        .buttonClaim:active{
            transform: scale(1.05);
        }
        .rewardType {
            text-align: center;
            position: relative;
            bottom: 85px;
            font-size: 24px;
            color: white;
            pointer-events: none;
        }
        .rewardValue {
            text-align: center;
            position: relative;
            bottom: 85px;
            font-size: 24px;
            color: white;
            pointer-events: none;
        }

        .progressBackground {
            border: 6px solid;
            border-image: url('./images/progress_background.png');
            border-image-slice: 5 fill;
            height: 4px;
            position: absolute;
            left: 130px;
            bottom: 12px;
            width: 500px;
        }

        .progressForeground {
            border: 6px solid;
            border-image: url('./images/progress_foreground.png');
            border-image-slice: 5 fill;
            height: 4px;
            width: 0;
            position: absolute;
            left: -5px;
            bottom: -6px;
        }

        .progressText {
            position: relative;
            text-align: center;
            bottom: 7px;
            font-family: Tahoma;
            font-size: 14px;
        }
    </style>

</head>
<body>
<div class="rowbackground">
    <img src="<?php echo './images/' . $GLOBALS['row']->icon ?>" class="icon">
    <name><b><?php echo $GLOBALS['row']->name ?></b></name>
    <desc><?php echo $GLOBALS['row']->description ?></desc>
    <div class="buttonClaim">
        <input type="image" src="./images/btn_claim.png" class="btnImage" onclick="ClickClaim()">
        <div class="rewardValue">
            <b>
                <?php
                echo number_format($GLOBALS['row']->reward);
                ?>
            </b>
        </div>
        <div class="rewardType">
            <b>
                <?php
                echo $GLOBALS['row']->rewardType;
                ?>
            </b>
        </div>
    </div>
    <div class="progressBackground">
        <div class="progressForeground"></div>
        <div class="progressText">100000</div>
    </div>
</div>

</body>
<script>
    function SetProgressValue($progress) {
        var elem = document.getElementsByClassName("progressForeground")[0];
        elem.style.width = $progress*500;
    }

    function SetProgressText($text) {
        var elem2 = document.getElementsByClassName("progressText")[0];
        elem2.innerText = $text;
    }
    function ClickClaim() {

    }
</script>
</html>
