<html>
<head>
    <style>
        table.scroll{
            width: 1280px;
            height: 720px;
            position: relative;
            top: 6px;
        }
        table.scroll tbody {
            overflow-y: hidden;
            display: block;
        }
        td{
            padding-top: 6px;
            padding-bottom: 6px;
        }
        @media (-webkit-min-device-pixel-ratio: 2) {
            table.scroll{
                width: calc(1280px/2);
                height: calc(720px/2);
                top: calc(6px/2);
            }
            td{
                padding-top: calc(6px/2);
                padding-bottom: calc(6px/2);
            }
        }
        @media (-webkit-min-device-pixel-ratio: 3) {
            table.scroll{
                width: calc(1280px/3);
                height: calc(720px/3);
                top:calc(6px/3);
            }
            td{
                padding-top: calc(6px/3);
                padding-bottom: calc(6px/3);
            }
        }
    </style>
</head>
<body>
<table class="scroll">
    <tbody>
    <?php
    $json = json_decode(file_get_contents(__DIR__.'/../config/CrossPromotionConfig.txt'));
    $arrayItem = ConvertToArray($json);
    for ($i = 0;$i<count($arrayItem);$i++){
        echo  "<tr>\n";
        echo "<td>\n";
        $GLOBALS['row']=$arrayItem[$i];
        include('./scripts/row.php');
        echo "</td>\n";
        echo "</tr>\n";
    }

    function ConvertToArray($dict){
        $a = new ArrayObject();
        foreach ($dict->items as $value){
            $a->append($value);
        }
        return bubbleSort($a);
    }
    function cmp($a, $b)
    {
        if ($a->id == $b->id) {
            return 0;
        }
        return ($a->id < $b->id) ? -1 : 1;
    }
    function bubbleSort(ArrayObject $array) {
        $array_size = count($array);
        for($i = 0; $i < $array_size; $i ++) {
            for($j = 0; $j < $array_size; $j ++) {
                if ($array[$i]->id < $array[$j]->id) {
                    $tem = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $tem;
                }
            }
        }
        return $array;
    }
    ?>
    </tbody>
</table>
</body>
</html>