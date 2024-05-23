<html>
    <HEAD>
        <META HTTP-EQUIV="Content-Type" Content="text/html; charset=iso-8859-2">
        <TITLE>Kolejność 3 liczb</TITLE>
</HEAD>
    <BODY>
    <form action = "phpBarski.php" method="POST">
Wpisz 1 liczbę: <input type="text" name="liczba1"><br>
Wpisz 2 liczbę: <input type="text" name="liczba2"><br>
Wpisz 3 liczbę: <input type="text" name="liczba3"><br>
<input type="submit" value="wyslij">
</form>
</BODY>
</html>




<?php
//Zad 1
echo('Hello!');

//Zad 2
print("<body bgcolor='yellow'> <b>Hello!</b></body>");

//Zad 3
    phpinfo()

//Zad 4
    $imie = "Jakub"
    $nazwisko = "Labendzki"
    print("Nazywam się: " . $imie . " " . $nazwisko);

//Zad 5
    $bokA = 5;
    $bokB = 7;
    print("Pole prostokąta o bokach ". $bokA . " i ". $bokB. " wynosi: ".$bokA*$bokB." a jego a jego obwód ". 2*$bokA + 2*$bokB)

//Zad 6
    define ("Kwota_do_odjęcia", 436.20);
    define ("Stawka_podatkowa", 0.19);
    print ("Podatek od dochodu 5000 PLN w 2022 roku wynosi: ");
    printf ("%0.2f", (Kwota_do_odjęcia - Stawka_podatkowa));
    print (' PLN');

//Zad 7
    $login = $_POST['Dziennik'];
    $pasword = $_POST['pomidor'];

    if ($login == "pomidor" && $pasword == "Dziennik") {
        print ("<h1>dostęp do strony <img src='obrazek.img'>"); }
        else {
            print("Złe login lub hasło.");
        }

//Zad 8
    $a = 2;
    $b = 3;
    $c = 1;


    print ("<B>a</B> ma wartość $a<BR>");
    print ("<B>a</B> ma wartość $b<BR>");
    print ("<B>a</B> ma wartość $c<BR>");


    if ($a>$b>$c) {
        print ("Większą liczbą jest a, ma warość $a");
    } elseif ($a==$b) {
        print ("Liczby a i b są sobie równe, obaj mają wariość $a");
    } else {
        print ("Większą liczbą jest b, ma wartość $b");
    }

//Zad 9
$n = 10;
$tab = array();
for ($i = 0; $i < $n; $i++) {
    $Random = rand(10, 99);
    $tab[$i] = $Random;
    print($tab[$i] . " ");
}

$size = count($tab);
for ($i = 0; $i < $size - 1; $i++) {
    for ($j = 0; $j < $size - $i - 1; $j++) {
        if ($tab[$j] > $tab[$j + 1]) {
            $temp = $tab[$j];
            $tab[$j] = $tab[$j + 1];
            $tab[$j + 1] = $temp;
        }
    }
}


echo("\nSorted array: ");
foreach ($tab as $value) {
    echo $value . " ";
}

//Zad 10 - funkcje wbudowane
$datetime = new DateTime();

echo date("Y/m/d");

    $malpa = false;
    $kropa = false;
    $dlugosc = $_POST["mail"];
    for($i = 0;$i<strlen($dlugosc);$i++)
    {
        if($dlugosc[$i] == '@')
        {
            $malpa = true;
        }
        if($dlugosc[$i] == '.')
        {
            $kropa = true;
        }
    }
    if($kropa && $malpa)
    {
        echo "Poprawny mail";
    }
    else
    {
        echo "Niepoprawny mail!";
    }

?>

