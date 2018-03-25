<?php 
require_once("connect.php");
$id = $_GET['q'];
$query = "select * from bnoisesResult where quiz_s_id=".$id."";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$ques = explode(",",(string)$row['que_seq']);
$ans = explode(",",(string)$row['que_ans_seq']);
$length = sizeof($ques);
$i=0;
function getAns($num){
    switch($num){
        case 1:
            return "ans_a";
            break;
        case 2:
            return "ans_b";
            break;
        case 3:
            return "ans_c";
            break;
        case 4:
            return "ans_d";
            break;
    }
}
                require_once("getevent.php");
                echo "<div class='x_panel'>";
                echo "<div class='x_title'>";
                        echo "<h2>Event :- ".$row1['name']."(Round - ".$row['quiz_round'].")</h2>";
                echo "<div class='clearfix'></div>";
                    echo "</div>";
                    echo "<div class='x_content'>";
                        echo "<br />";
                    echo "<table class='table'>";
                      echo "<thead>";
                        echo "<tr>";
                          echo "<th>Question</th>";
                        //   echo "<th>Your Answer</th>";
                          echo "<th>Correct Answer</th>";
                        echo "</tr>";
                      echo "</thead>";
                      echo "<tbody>";
                        while($i<$length){
                        $query = "select * from bnoises where q_id=".$ques[$i];
                        $result = mysqli_query($conn,$query);
                        $row  =  mysqli_fetch_assoc($result);
                        echo '<td>'.($i+1).' . '.$row['q_que'].'</td>';
                        // echo '<td>'.$row[getAns((int)$ans[$i])].'</td>';
                        echo '<td>'.$row[getAns((int)$row['correct_ans'])].'</td>';
                        echo '</tr>';
                        $i+=1;
                        }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    echo "</div>";
?>