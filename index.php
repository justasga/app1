<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="look.css">
    <title>KMI skaičiuoklė</title>
</head>
<body>
    <form>
        <input type="text" name="height" placeholder="METERS...">
        <input type="text" name="mass" placeholder="KILOGRAMS">
        <br>
        <button type="submit" name="submit" value="submit" >CALCULATE</button>
    </form>
<p>answer</p>
    <?php
        // if (isset($_GET['submit'])) {
        //     $height = $_GET['height'];
        //     $weight = $_GET['weight'];

        //     function bmi($weight,$height) {
        //         $bmi = $weight/($height*$height);
                
        //         } 
        //        $bmi = bmi($mass,$height);


        //     if ($bmi <= 18.5) {
        //         echo  "UNDER";
        
        //         } else if ($bmi > 18.5 && $bmi <=24.9 ) {
        //             echo  "NORMAL WEIGHT";
        
        //         } else if ($bmi > 24.9 && $bmi <= 29.9) {
        //             echo "OVERWEIGHT";
        
        //         } else if ($bmi > 30.0) {
        //             echo "OBESE";
        //     }
           
        //     echo "Your BMI value is " . $bmi . " and you are : "; 
            

            
        // }

        if ($_GET['submit']) { 
            $mass = $_GET['mass'];
            $height = $_GET['height'];
        
            function bmi($mass,$height) {
                $bmi = $mass/($height*$height);
                return $bmi;
            }   
        
            $bmi = bmi($mass,$height); 
        
            if ($bmi <= 18.5) {
                $output = "UNDERWEIGHT";
        
                } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                $output = "NORMAL WEIGHT";
        
                } else if ($bmi > 24.9 AND $bmi<=29.9) {
                $output = "OVERWEIGHT";
        
                } else if ($bmi > 30.0) {
                $output = "STOP EATING PLS";
            }
            echo "<p> Your BMI value is  " . $bmi . "  and you are : </p> "; 
            echo "<p> $output </p>";
        }
?>
<section class="main">
    <img src="phpshrek.png" alt="picture">

</section>


</body>
</html>