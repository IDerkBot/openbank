<div class="content">
    <div class="credits">
        <?
        $credits = $conn->query("SELECT * FROM `credit`");
        while ($credit = $credits->fetch_assoc()) { ?>
            <div class="credit">
                <div class="title"><?=$credit['title']?></div>
                <div class="desc"><?=$credit['description']?></div>
                <ul><?=$credit['options']?></ul>
                <a href="" class="btn link order">Заполнить заявку</a>
            </div>
        <? } ?>
    </div>
</div>