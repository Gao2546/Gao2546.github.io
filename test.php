<?php   
        if (isset($_POST["submit"])){
            echo "Good".'<br>';
            echo "Name:".$_POST["Name"].'<br>';
            echo "Sur Name:".$_POST["Sur_Name"].'<br>';
        }
        $save_text = fopen("save_text.txt","a");
        fwrite($save_text, $_POST["Name"].'\n');
        fwrite($save_text, $_POST["Sur_Name"].'\n');
        fclose($save_text);


        echo "<script>";
        echo "alert('great')";
        echo "</script>";
        
        echo "<script>";
        echo "console.log(10)";
        echo "</script>";


        if (isset($_POST["pizza"])){
            echo "byb";
        }

        if (5<3){
            echo "help";
        }
        
        function dog($pss){
            
            echo($pss);

        }

        dog($_POST["Name"]);

    
    

?>
