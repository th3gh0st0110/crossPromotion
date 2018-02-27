<html>
<head>
    <style>
        table.scroll{
            width: 1280px;
            height: 980px;
        }
        table.scroll tbody {
            overflow-y: scroll;
            display: table;
        }
    </style>
</head>
<body>
<table class="scroll">
    <tbody>
    <?php
    for ($i = 1; $i <= 10; $i++) {
       echo  "<tr>\n";
       echo "<td>\n";
       include('./scripts/row.php');
       echo "</td>\n";
       echo "</tr>\n";
    }
    ?>
    </tbody>
</table>
</body>
</html>