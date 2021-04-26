<link rel = "stylesheet" type = "text/css" href = "style.css"/>
<?php
    
    $pass = $_POST["pswd"];
    $Items = $_POST["Items"];
    //$Pencil = $_POST["Pencil"];
    //$Pen = $_POST["Pen"];
    $PaperCost = 00.02;
    $PenCost = 11.92;
    $PencilCost = 04.15;
    $PaperAm = $_POST["PaperQuant"];
    $PenAm = $_POST["PenQuant"];
    $PencilAm = $_POST["PencilQuant"];
    $Shipping = $_POST["Shipping"];
    $ShipCost = 0;

    if ($Shipping == "Over Night"){
        $ShipCost = 50;
    }
    if($Shipping == "Three Days"){
        $ShipCost = 5;
    }
    $Total = ($PaperAm*$PaperCost)+($PenAm*$PenCost)+($PencilAm*$PencilCost)+$ShipCost;
    echo "<p>Welcome! Great to have you shopping with us! Your password is: " .$pass. "</p><br>";

    echo "<table border=\"1\">";
    echo "<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>";
    echo "<tr><td>Paper</td><td class=\"display\">".$PaperAm."</td><td class=\"display\">$".$PaperCost."</td><td class=\"display\">$".$PaperAm*$PaperCost."</td></tr>";
    echo "<tr><td>Paper</td><td class=\"display\">".$PenAm."</td><td class=\"display\">$".$PenCost."</td><td class=\"display\">$".$PenAm*$PenCost."</td></tr>";
    echo "<tr><td>Paper</td><td class=\"display\">".$PencilAm."</td><td class=\"display\">$".$PencilCost."</td><td class=\"display\">$".$PencilAm*$PencilCost."</td></tr>";
    echo "<tr><td>Shipping</td><td colspan=\"2\" class=\"display\">".$Shipping."</td><td class=\"display\">$".$ShipCost.".00</td></tr>";
    echo "<tr><td colspan=\"3\">Total Cost</td><td>$".$Total."</tr>";



?>