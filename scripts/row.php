<html>
<head>
    <style>
        body {
            font-family:Tahoma;
        }
        .rowbackground {
            border: 4px solid;
            border-image: url('./images/row_background.png')  ;
            border-image-slice:  25 fill;
            height: 128px;
            width: 1208px;
            position: relative;
            left: 36px;
        }
        .icon{
            position: relative;
            left: 12px;
            top: 12px;
            width: 104px;
            height: 104px;
        }
        name{
            position: absolute;
            left: 130px;
            text-align: left;
            top: 20px;
            font-size: 24px;
        }
        desc{
            position: absolute;
            left: 130px;
            text-align: left;
            top: 50px;
            font-size: 24px;
        }
        .buttonClaim{
            position: absolute;
            right: 12px;
            top: 12px;
        }
        rewardValue{
            position: absolute;
            top: 20%;
            right: 38%;
            font-size: 24px;
            color: white;
        }
        rewardType{
            position: absolute;
            text-align: right;
            left: 50%;
            font-size: 24px;
            color: white;
        }
    </style>

</head>
<body>
<div class="rowbackground">
    <img src="<?php echo './images/'.$GLOBALS['row']->icon?>" class="icon">
    <name><b><?php echo $GLOBALS['row']->name?></b></name>
    <desc><?php echo $GLOBALS['row']->description?></desc>
    <div class="buttonClaim">
        <input type="image" src="./images/btn_claim.png" class="btnImage">
        <rewardValue><b><?php echo $GLOBALS['row']->reward?></b></rewardValue>
        <rewardType><b>GOLD</b></rewardType>
    </div>
</div>

</body>
</html>