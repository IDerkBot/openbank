<?
    include_once($_SERVER['DOCUMENT_ROOT'] . "/lib/db_connect.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/lib/header.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/lib/menu.php");
    
    $type = "mortgage";
    $fullanme = $_POST['fullname'];
    $phone = $_POST['phone'];
    $sum_credit = $_POST['sum'];
    $term = $_POST['term'];
    $link->query("INSERT INTO request (`type`,`fullanme`,`phone`,`sum_credit`,`term`) VALUES('$type','$fullname','$phone','$sum_credit','$term')");

    echo '<div class="content">';
    echo '<div class="alert">';
    echo 'Спасибо за оставленную заявку, в ближайшее время мы вам позвоним для уточнение информации';
    echo '</div>';
    echo '</div>';

    include_once($_SERVER['DOCUMENT_ROOT'] . "/lib/footer.php");
?>