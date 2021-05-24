<div class="content">
    <div class="mortgages">
        <?
        $mortgages = $conn->query("SELECT * FROM `mortgage`");
        while ($mortgage = $mortgages->fetch_assoc()) { ?>
            <div class="mortgage">
                <div class="title"><?=$mortgage['title']?></div>
                <div class="desc"><?=$mortgage['description']?></div>
                <div class="rate"><?=$mortgage['rate']?></div>
                <a href="order/index.php?id=<?=$mortgage['id']?>" class="btn link">Оставить заявку</a>
            </div>
        <? } ?>
    </div>
</div>