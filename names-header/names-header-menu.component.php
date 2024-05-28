
<div class="menu-wrapper-names-header" id="menu">
    <div class="menu-title">Menu</div>
    <li>
        <label class="option-decor">&#9825;&nbsp;
            <a href="<?php echo $homePath ?>">Domov</a>
        &nbsp;&#9825;</label>
    </li>
    <li>
        <label class="option-decor">&#9825;&nbsp;
            <a href="<?php echo $uploadsPath ?>">Vaše nahrané fotky</a>
        &nbsp;&#9825;</label>
    </li>
    <li>
        <label class="option-decor">&#9825;&nbsp;
            <a href="<?php echo $ourStoryPath ?>">Náš príbeh</a>
        &nbsp;&#9825;</label>
    </li>
    <li>
        <label class="option-decor">&#9825;&nbsp;
            <a href="<?php echo $logisticsPath ?>">Ako sa tam dostanem?</a>
        &nbsp;&#9825;</label>
    </li>
    <li>
        <label class="option-decor">&#9825;&nbsp;
            <?php if(isMobileDevice()) : ?>
                <a style="color: gray;">Zahraj sa (len pre PC)</a>
            <?php else : ?>
                <a href="<?php echo $gamesPath ?>">Zahraj sa</a>
            <?php endif; ?>
        &nbsp;&#9825;</label>
    </li>
</div>
<div class="names-in-header">Domka & Michal</div>