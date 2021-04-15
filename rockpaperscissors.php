<?php

echo "<h1>ROCK PAPER SCISSORS GAME</h1>"."<br>";
echo "Rule:"."<br>";
echo "1 paper beats rock"."<br>";
echo "2 rock beats scissors"."<br>";
echo "3 scissors beats paper"."<br>";

?>
<!DOCTYPE html>
<html>
    <head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
</head> 
           <?php
               echo "first iteration-"."<br>";

            ?>
<body>

 <table style="width:100%">
  <tr>
    <th>player1</th>
    <th>player2</th> 
    <th>player3</th>
    <th>player4</th>
  </tr>
  <tr>
    <td>
        <?php
         $choice=array('rock','paper','scissors');
         $p=rand(0,2);
         $r1=$choice[$p];
         echo $r1."<br>";
      
        ?>
    
    </td>
    <td>
        <?php
         $choice=array('rock','paper','scissors');
         $p=rand(0,2);
         $r2=$choice[$p];
         echo $r2."<br>";
         ?>
    </td>
    <td>
        <?php
        $choice=array('rock','paper','scissors');
         $p=rand(0,2);
         $r3=$choice[$p];
         echo $r3."<br>";
         ?>
    </td>
    <td>
       <?php
         $choice=array('rock','paper','scissors');
         $p=rand(0,2);
         $r4=$choice[$p];
         echo $r4."<br>";
         ?>
    </td>
  </tr>
  
 </table>
 <?php
   echo "<br>";
 ?>


 <table>
      <table style="width:100%">
         <tr>
         
            <th>Total</th>
            <th>  </th>
            <th colspan = "4">Against</th>
            
         </tr>
         
         <tr>
            <td>  </td>
            <td>  </td>
            <td>player1</td>
            <td>player2</td> 
            <td>player3</td>
            <td>player4</td>
         </tr>
         <tr>

         <tr>
            <td rowspan = "4">player wins</td>
            <td>player1</td>
            <td>
           <?php
           if($r1==$r1||$r2==$r2||$r3==$r3)
           {
               echo "-";

           }
           else
           {
               echo " nothing ";
           }
           //$w="";
           //$win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
           //$w=array_rand($win);
           //$result="";
           //if($r1==$w)
           //{
            // $result=" ";
           //}
           //elseif($in[$w]==$r1)
           //{
             //  $result="0";

           //}
           //else{
           //    $result="1";
           //}
           //echo  $result;
         
         ?>

         </td>
          <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r1==$r2);
            if($r1!=$r2&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
            //switch($r1==$r2)
            //{
    //case "rock==scissors":
     // echo "1";
     // break;
   // case "scissors==paper":
     // echo "1";
     // break;
    //case "paper==rock ":
     // echo "1";
     // break;
    //default:
     // echo "0";
   
            //}
            
            
            ?>
            
            
             </td>
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r1==$r3);
            if($r1!=$r3&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>
            
            
             </td> 
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r1==$r4);
            if($r1!=$r4&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>
            </td>
         </tr>
         <tr>
         <td>player2</td>
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r2==$r1);
            if($r2!=$r1&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>


            
             </td>
            <td> 
            <?php
           if($r1==$r1||$r2==$r2||$r3==$r3)
           {
               echo "-";

           }
           else
           {
               echo " ";
           }
           ?>
            
            </td>
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r2==$r3);
            if($r2!=$r3&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>


            
            
             </td> 
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r2==$r4);
            if($r2!=$r4&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>
            
            
             </td>
            
         </tr>
         <tr>
         <td>player3</td>
            <td> 
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r3==$r1);
            if($r3!=$r1&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>



            </td>
            <td> 

            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r3==$r2);
            if($r3!=$r2&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>
            
            
            </td>
            <td>
            <?php
           if($r1==$r1||$r2==$r2||$r3==$r3)
           {
               echo "-";

           }
           else
           {
               echo " ";
           }
           ?>
            
             </td> 
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r3==$r4);
            if($r3!=$r4&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>

            
            
            
             </td>


         </tr>
         <tr>
         <td>player4</td>
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r4==$r1);
            if($r4!=$r1&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>

            
            
             </td>
            <td>
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r4==$r2);
            if($r4!=$r2&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>

            
             </td>
            <td> 
            <?php
            $win=['rock'=>'scissors','paper'=>'rock','scissors'=>'paper'];
            $m1=($r4==$r3);
            if($r4!=$r3&&$win)
            {
                echo"1";

            }
            else{
                echo"0";
            }
                ?>
            
            
            
            </td> 
            <td>
            <?php
           if($r1==$r1||$r2==$r2||$r3==$r3)
           {
               echo "-";

           }
           else
           {
               echo " ";
           }
           ?>
            
             </td>
         </tr>

        
         
      </table>

</body>





    //<?php
    //$a=0;
    //$p1=array('rock','paper','scissors');
   // echo "first iteration-"."<br>";
   // for($a=0;$a<50;$a++)
   // {
   //     for($p1=0;$p1<=2;$p1++)
   //     {
   //     echo $p1;
   //     }
  //  }
 //?>
        

</html>