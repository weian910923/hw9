<!DOCTYPE html>
<html>
<body>
    <?php
            $name = $_POST["name"]
       $Student_1 = array("num"=>'1104108101',"name"=>'王建銘',"class"=>'四資工一甲',"address"=>'高雄市三民區建工路415號');
       $Student_2 = array("num"=>'1104108102',"name"=>'段嘉興',"class"=>'四資工一甲',"address"=>'高雄市新興區錦田路555號');
       $Student_3 = array("num"=>'1104108103',"name"=>'林佳純',"class"=>'四資工一甲',"address"=>'高雄市鼓山區美術館路85號');
       $Student_4 = array("num"=>'1104108104',"name"=>'王智傑',"class"=>'四資工一甲',"address"=>'高雄市左營區文自路925號');
       $csie = array($Student_1,$Student_2,$Student_3,$Student_4);
        
    foreach($csie as $key =>$output){
        if ($name == $csie[$key]['num']){
            echo "<b><高應大學生資料查詢系統></b><br>";
            echo "<b>你查詢的結果如下:</b><br>";
            echo "學號: " $csie[$key]['num'] "<br>";
            echo "姓名: " $csie[$key]['name'] "<br>";
            echo "班級: " $csie[$key]['class'] "<br>";
            echo "地址: " $csie[$key]['address'] "<br>";
            break;
        }
        else if ($name == $csie[$key]['name']){
            echo "<b>高應大學生資料查詢系統</b><br>";
            echo "<b>你查詢的結果如下:</b><br>";
            echo "學號: " $csie[$key]['num'] "<br>";
            echo "姓名: " $csie[$key]['name'] "<br>";
            echo "班級: " $csie[$key]['class'] "<br>";
            echo "地址: " $csie[$key]['address'] "<br>";
            break;
        }
        else if ($name != $csie[$key]['name'] && $check != $csie[$key]['num']) {
                echo "<b>高應大學生資料查詢系統</b><br>";
                echo "<b>查無此學生資料，請重新輸入</b>";
                
            }

    ?>
</body>
</html>