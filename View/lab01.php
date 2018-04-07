
<!DOCTYPE html>
<html>
<body>
<?php
echo "
Małpy!
";



$zmienna="Definicja-";
echo
"<h2>Przykładowa \n $zmienna...</h2>";
echo
"$zmienna\n", "Ssaki o czterech chwytnych kończynach\n.";
print
"Zwykle większe od małpiatek\n.";
echo

"Obejmuje małpy szerokonose i małpy wąskonose\n.";

class Student {
var $surname;
var $name;
function
__construct($surname, $name){
    $this->surname = $nazwisko;
    $this->name = $name;
}
function setSurname($surname){$this->surname= $surname;}
function getName(){return $this->name;}
}

$s = 
"To JEST \"przykładowy\" <b>ciąg 'tekstowy'</b>";
echo "<br>\n 1 ". $s ;
echo "<br>\n 2 ". addslashes($s);
echo "<br>\n 3 ". crc32($s) ;
echo "<br>\n 4 ". explode(" ", $s) ;
echo "<br>\n 5 ". htmlspecialchars($s) ;
echo "<br>\n 6 ". htmlspecialchars_decode (htmlspecialchars($s)) ;
echo "<br>\n 7 ". implode (" ", explode(" ", $s)) ;
echo "<br>\n 8 ". md5($s) ;
echo "<br>\n 9 ". sha1($s) ;
echo "<br>\n";
?>
</body>
</html>
