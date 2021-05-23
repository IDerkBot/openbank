<div class="content">
    <div class="cards">
        <?
        $cards = $conn->query("SELECT * FROM `card`");
        while ($card = $cards->fetch_assoc()) { ?>
            <div class="card">
                <img src="<?=$card['image']?>" class="card-img">
                <div class="card-info">
                    <div class="card-title"><?=$card['title']?></div>
                    <a href="" class="btn link card">Оформить карту</a>
                </div>
            </div>
        <? } ?>
    </div>
</div>