<!DOCTYPE html>
<html lang="zh-tw">

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <?php
        $A = "hello!";
        $B = "my friend.<br/>\n";
        $C = "today is goodday";
        echo "$A $B $C <hr/>";
        echo "\$A=" . $A . "  \$B=" . $B . "  \$C=" . $C;
        ?>
        <hr/>
        <h2>測試陣列</h2>
        <?php
        $a[0] = 0;
        $a[1] = 2;
        $a[2] = "jj";
        $a[3] = 5.5;
        echo "格式一：不顯示KEY值";
        foreach ($a as $value) {
            echo "$value <br/>";
        }
        echo "格式二：顯示Key值<br/>";
        foreach ($a as $key => $value) {
            echo "a[$key] = $value<br/>";
        }
        $testArray = array(0, 8, 9, 3, 2, 1, 9, 6, 88, 1);
        $sum = 0;
        foreach ($testArray as $key => $value) {
            $sum +=$value;
            echo "第" . ++$key . "值等於" . $value . "總計" . $sum . "<br/>";
        }

        echo "<HR><H2>測試物件</H2>";
        $thisYear = new testClass();
        $nestYear = new testClass();
        $nestYear->addOld(1);

        echo "HI 我是 $thisYear->id ，今年我$thisYear->old 歲"
        . "，明年我$nestYear->old 歲";

        class testClass {

            var $id = "yang";
            var $old = 30;

            function addOld($year) {
                $this->old = $this->old + $year;
            }

        }
        echo "<br/>目前作業系統是" . PHP_OS;
        ?>
    </body>

</html>
