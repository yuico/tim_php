<!DOCTYPE html>
<!--
tim holton app
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title></title>
    </head>
    <body>
        
        <?php

        echo "<h3 class='txt'>Thank you for your order. Here it is:</h3>"; 
        
        function cal($size, $coffeeNum, $creamNum, $sugarNum, $type) {
            
            if($type == regular){ 
                $creamNum=1;
                $sugarNum=1; 
            }elseif($type == dd){
                $creamNum=2;
                $sugarNum=2;  
            }elseif($type == tt){
                $creamNum=3;
                $sugarNum=3;    
            }elseif($type == bl){
                $creamNum=0;
                $sugarNum=0;    
            }elseif($type == bs){
                $creamNum=0;
                $sugarNum=1;    
            }elseif($type == bss){
                $creamNum=0;
                $sugarNum=2;    
            }elseif($type == bss){
                $creamNum=0;
                $sugarNum=3;    
            }
                
            for($i=1; $i<=$coffeeNum; $i++){
                echo "<div class='orderPage'>
                        <img id='cup' src='img/cup.jpg' class='$size'>";
                if($creamNum > 0) {
                    echo "<img id='plus' src='img/plus.jpg' alt='banner'>";
                }
                for($y=0; $y<$creamNum; $y++) {       
                    echo "<img id='cream' src='img/cream.jpg'>";
                }         
                if($sugarNum > 0) {
                    echo "<img id='plus' src='img/plus.jpg' alt='banner'>";
                }
                for($z=0; $z<$sugarNum; $z++) {
                    echo "<img id='sugar' src='img/sugar.jpg'>";
                }
                echo "</div>";  
            } 
            echo "<div class='txt'></div>"; 
        } 

        function price($coffeeNum, $size) {
            if($size == small) {
                $totalCost = 1.5 * $coffeeNum * 1.13;
                echo "Cost: \$1.50 + tax = \$$totalCost";
            }elseif($size == medium) {
                $totalCost = 2 * $coffeeNum * 1.13;
                echo "Cost: \$2 + tax = \$$totalCost";
            }elseif($size == large) {
                $totalCost = 2.5 * $coffeeNum * 1.13;
                echo "Cost: \$2.50 + tax = \$$totalCost";
            }elseif($size == extraLarge) {
                $totalCost = 3 * $coffeeNum * 1.13;
                echo "Cost: \$3 + tax = \$$totalCost"; 
            }           
        }
        
        $coffeeNum = $_POST['coffeeNum'];
        $size = $_POST['size'];
        $creamNum = $_POST['creamNum'];
        $sugarNum = $_POST['sugarNum'];
        $type = $_POST['orderType'];

        cal($size, $coffeeNum, $creamNum, $sugarNum, $type);
        price($coffeeNum, $size);

        ?>

    </body>
</html>
 
