<?php
global $my_array, $pick, $hp, $num, $pick;

function carpick(){
$my_array = array("1LT", "2LT", "RS", "1SS", "2SS", "ZL1", "ZL1 1LE");
$pick = $my_array[rand(0,6)];
$num =  array_search ($pick,$my_array);
$size = count($my_array);
echo"<h2>";
echo $pick;
echo"</h2>";
echo "<h2> Number of Camaro types: ". $size."</h2>";

//echo "<div></div>";

}

function vin()
{
   $arr1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        $arr2 = array(A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z);
        $r_length = rand(16,17);
        $r_nums = rand(1,3);
        $t_nums = 0;
        $pass = [];
        $digorlet;
        echo"<h2>";
        for ($i = 0; $i <= $r_length; $i++)
        {
                if ($t_nums < $r_nums)
                {
                    $digorlet = rand(0,2);
                }
                if($t_nums >= $r_nums)
                {
                    $digorlet = 0;
                }
                if($digorlet >= 1)
                {
                    array_push($pass,$arr1[rand(0,8)]);
                    $t_nums++;
                }
                if($digorlet == 0)
                {
                    array_push($pass,$arr2[rand(0,25)]);
                }
                
                echo $pass[$i];
                
        }
        echo"</h2>";
}

function plate()
{
  $arr1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        $arr2 = array(A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z);
        $r_length = 6;
        $r_nums = rand(1,2);
        $t_nums = 0;
        $pass = [];
        $digorlet;
        echo"<h2>";
        for ($i = 0; $i <= $r_length; $i++)
        {
                if ($t_nums < $r_nums)
                {
                    $digorlet = rand(0,2);
                }
                if($t_nums >= $r_nums)
                {
                    $digorlet = 0;
                }
                if($digorlet >= 1)
                {
                    array_push($pass,$arr1[rand(0,8)]);
                    $t_nums++;
                }
                if($digorlet == 0)
                {
                    array_push($pass,$arr2[rand(0,25)]);
                }
                echo $pass[$i];
        }
      echo"</h2>";
}

?>