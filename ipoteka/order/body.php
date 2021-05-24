<div class="content wrapper">
    <form action="order.php">
        <?
            $id = $_GET['id'];
            $mortgage = $conn->query("SELECT * FROM mortgage WHERE id = '$id'")->fetch_assoc();
        ?>
        <h3 class="title">Оформление заявки на ипотеку "<?=$mortgage['title']?>"</h3>
        <label>ФИО: <input type="text" name="fullname"></label>
        <label>Номер телефона: <input type="text" name="phone"></label>
        <input type="submit" value="Оставить заявку">
    </form>
</div>