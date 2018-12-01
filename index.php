<?php 
    require_once('auto.php');
    include('car.php');
    include('buss.php');

    $vw = new Car(20, 8);
?>

<h1>Auto</h1>

<?
    echo($vw->move(5));
    echo('<br>');

    echo($vw->rotateRight());
    echo('<br>');

    echo($vw->move(0.5));
    echo('<br>');

    echo($vw->rotateLeft());
    echo('<br>');

    echo($vw->move(1));
    echo('<br>');

    echo($vw->rotateRight());
    echo('<br>');

    echo($vw->move(2));
    echo('<br>');

    echo($vw->rotateRight());
    echo('<br>');

    echo($vw->move(0.6));
    echo('<br>');

    echo($vw->rotateRight());
    echo('<br>');

    echo($vw->move(1));
    echo('<br>');

    echo($vw->rotateLeft());
    echo('<br>');

    echo($vw->rotateLeft());
    echo('<br>');

    echo($vw->move(1));
    echo('<br>');

    echo($vw->rotateLeft());
    echo('<br>');

    echo($vw->move(0.6));
    echo('<br>');

    echo($vw->rotateRight());
    echo('<br>');

    echo($vw->move(0.3));
    echo('<br>');

    echo($vw->rotateRight());
    echo('<br>');

    echo($vw->move(3));
    echo('<br>');

    echo($vw->rotateLeft());
    echo('<br>');

    echo($vw->move(0.2));
    echo('<br>');

?>
    <h1>Bus</h1>
<?php
    $buss = new Buss(30);

    echo($buss->move(2));
    echo('<br>');

    echo($buss->rotateRight());
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(1));
    echo('<br>');

    echo($buss->stop(10));
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->stop(10));
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(2));
    echo('<br>');

    echo($buss->stop(15));
    echo('<br>');

    echo($buss->move(1));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(2));
    echo('<br>');

    echo($buss->rotateRight());
    echo('<br>');

    echo($buss->move(1));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->stop(3));
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->stop(2));
    echo('<br>');

    echo($buss->move(10));
    echo('<br>');
?>