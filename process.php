
<?php

$ch1 = "";  $ch2 = "";
if ((isset($_POST["check1"])) && ($_POST["check1"]=='Válasz1')) { 

    $ch1 = " checked ";
    
    echo  "<br> Külföldi állampolgár vagy külföldi lakcímmel rendelkezik: IGEN"."<br><br>";

  } 
  if ((isset($_POST["check2"])) && ($_POST["check2"]=='Válasz2')) { 

    $ch2 = " checked ";

    echo  "<br>Külföldi állampolgár vagy külföldi lakcímmel rendelkezik: NEM"."<br><br>";

  } 
        echo "<table border='1' width='40%' cellspacing='0'>";
        echo "<tr><td>Vezetéknév: </td>", "<td>$_POST[name]</td></tr>";       
        echo "<tr><td>Keresztneve: </td>", "<td>$_POST[name2]</td></tr>";       
        echo "<tr><td>Telefonszám: </td>", "<td>$_POST[phone]</td></tr>";  
        echo "<tr><td>Telefonszám: </td>", "<td>$_POST[phone]</td></tr>";
        
        echo "<tr><td>A teljes vagyonának volumene: </td>", "<td>$_POST[radio]</td></tr>";   
        
        
        echo "<tr><td>Az munkabér (nyugdíj, ösztöndíj,stb.) és járulék jellegű utalások összege:</td>", "<td>$_POST[vol0]</td></tr>";
        echo "<tr><td>Egyéb fenntartási költségek (pl. rezsi, iroda bérleti díj, stb.) összege:  </td>", "<td>$_POST[vol1]</td></tr>";
        echo "<tr><td>A bankkártyás vásárlások összege:</td>", "<td>$_POST[vol2]</td></tr>";
        echo "<tr><td>A belföldi utalások - jóváírás összege:</td>", "<td>$_POST[vol3]</td></tr>";
        echo "<tr><td>belföldi utalások - terhelés (fentiektől eltérő jogcímen)</td>", "<td>$_POST[vol4]</td></tr>";
        echo "<tr><td>Külföldi utalások jóváírás összege: </td>", "<td>$_POST[vol5]</td></tr>";
        echo "<tr><td>külföldi utalások terhelés:</td>", "<td>$_POST[vol6]</td></tr>";
        echo "<tr><td>Készpénz tranzakciók (ATM, pénztár) összege:</td>","<td>$_POST[vol7]</td></tr>";