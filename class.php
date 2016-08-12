<?php
if(isset($_POST["number"]) && (!empty($_POST["number"]))) {
  $number = $_POST["number"];
    if($number % 2==0){
        echo"Even";
    }else{
        echo "Odd";
    }

  /* for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo $i;

        }
        echo"<BR>";


    }*/
}else{
    echo"enter any number";
}

/*for($i=5;$i>=1;$i--) {
    //echo $i;
    for ($j =1; $j<=$i; $j++) {
        echo $i;
    }
    echo "<br>";
}*/