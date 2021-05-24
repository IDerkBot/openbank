<div class="content">
    <form action="order.php" method="post">
        <?
            $id = $_GET['id'];
            $card = $conn->query("SELECT * FROM card WHERE id = '$id'")->fetch_assoc();
        ?>
        <h3 class="title">Оформление карты <?=$card['title']?></h3>
        <label>ФИО: <input type="text" name=""></label>
        <label>Номер телефона: <input type="text" name=""></label>
        <input type="submit" value="Оставить заявку">
    </form>
</div>