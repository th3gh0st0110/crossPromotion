<html>
<head>
    <style>
        table.scroll{
            width: 1280px;
            height: 980px;
            position: relative;
            top: 12px;
        }
        table.scroll tbody {
            overflow-y: hidden;
            display: block;
        }
        td{
            padding-top: 12px;
            padding-bottom: 12px;
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