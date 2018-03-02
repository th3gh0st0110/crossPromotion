<html>
<head>
    <style>
        #rowbackground {
            border: 0.04rem solid;
            border-image: url('./images/row_background.png');
            border-image-slice: 10 fill;
            height: 1.2rem;
            width: 12.08rem;
            position: relative;
            left: calc(50vw - 6.5rem);
        }

        #icon img {
            position: relative;
            left: 0.12rem;
            top: 0.12rem;
            width: 0.96rem;
            height: 0.96rem;
        }

        name {
            position: absolute;
            left: 1.30rem;
            text-align: left;
            top: 0.20rem;
            font-size: 0.24rem;
        }

        desc {
            position: absolute;
            left: 1.30rem;
            text-align: left;
            top: 0.50rem;
            font-size: 0.24rem;
        }

        #buttonClaim {
            position: absolute;
            right: 0.12rem;
            top: 0.12rem;
        }
        #btnImage:active {
            -webkit-transform: scale(1.05);
        }

        #btnImage img {
            width: 2.24rem;
            height: 0.96rem;
        }

        #rewardType {
            text-align: center;
            position: relative;
            bottom: 0.8rem;
            font-size: 0.24rem;
            color: white;
            pointer-events: none;
        }

        #rewardValue {
            text-align: center;
            position: relative;
            bottom: 0.8rem;
            font-size: 0.24rem;
            color: white;
            pointer-events: none;
        }

        #progressBackground {
            border: 0.06rem solid;
            border-image: url('./images/progress_background.png');
            border-image-slice: 5 fill;
            height: 0.04rem;
            position: absolute;
            left: 1.30rem;
            bottom: 0.12rem;
            width: 5rem;
        }

        .progressForeground {
            border: 0.06rem solid;
            border-image: url('./images/progress_foreground.png');
            border-image-slice: 5 fill;
            height: 0.04rem;
            width: 0;
            position: absolute;
            left: -0.05rem;
            bottom: -0.06rem;
        }

        .progressText {
            position: relative;
            text-align: center;
            bottom: 0.07rem;
            font-size: 0.14rem;
        }
    </style>
<script></script>
</head>
<body>
<div id="rowbackground">
    <div id="icon"><img src="<?php echo './images/' . $GLOBALS['row']->icon ?>"></div>
    <name><b><?php echo $GLOBALS['row']->name ?></b></name>
    <desc><?php echo $GLOBALS['row']->description ?></desc>
    <div id="buttonClaim">
        <div id="btnImage"><img src="./images/btn_claim.png" onclick="ClickClaim(<?php echo $index =$GLOBALS['rowIndex'];?>)"></div>
        <div id="rewardValue">
            <b>
                <?php
                echo number_format($GLOBALS['row']->reward);
                ?>
            </b>
        </div>
        <div id="rewardType">
            <b>
                <?php
                echo $GLOBALS['row']->rewardType;
                ?>
            </b>
        </div>
    </div>
    <div id="progressBackground">
        <div class="progressForeground"></div>
        <div class="progressText">100000</div>
    </div>
</div>

</body>
<script>
    function SetProgressValue(index,progress) {
        var elem =document.getElementsByClassName("progressForeground")[index];
        elem.style.width = progress * 5 + "rem";
    }

    function SetProgressText(index,text) {
         var elem2 = document.getElementsByClassName("progressText")[index];
         elem2.innerText = text;
    }

    function ClickClaim(index) {
        SetProgressValue(index,0.5);
        SetProgressText(index,100);
    }

</script>
</html>
