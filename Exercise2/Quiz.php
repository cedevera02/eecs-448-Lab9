<?php
    $Continent = $_POST["Continent"];
    $Bones = $_POST["Bones"];
    $City = $_POST["City"];
    $Symbol = $_POST["Symbol"];
    $Math = $_POST["Math"];
    $Right = 0;
    if ($Continent == "Asia"){
        $Right++;
    }
    if($Bones == "206"){
        $Right++;
    }
    if($City == "Paris"){
        $Right++;
    }
    if($Symbol == "U"){
        $Right++;
    }
    if($Math == "1"){
        $Right++;
    }
    echo "<p>Question 1: What i the largest continent in the world?</p><br>";
    echo "<p>You answered: ".$Continent."</p>";
    echo  "<p>Correct answer: Asia</p>";
    echo "<p>Question 2: How many bones are there in the human body?</p><br>";
    echo "<p>You answered: ".$Bones."</p>";
    echo  "<p>Correct answer: 206</p>";
    echo "<p>Question 3: What is known as the \"City of Love\"?</p><br>";
    echo "<p>You answered: ".$City."</p>";
    echo  "<p>Correct answer: Paris</p>";
    echo "<p>Question 4: What is the chemical symbol for Uranium?</p><br>";
    echo "<p>You answered: ".$Symbol."</p>";
    echo  "<p>Correct answer: U</p>";
    echo "<p>Question 5: What is 1+1?</p><br>";
    echo "<p>You answered: ".$Math."</p>";
    echo  "<p>Correct answer: 1</p>";
    
    echo "<p>You answered " .$Right. " questions correctly</p>";
    $Right = ($Right/5.0)*100;
    echo "<p>You scored " .$Right. "%</p>";
?>