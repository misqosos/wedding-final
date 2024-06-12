
<div class="main-view">
    <?php
        if (!isMobileDevice()) {
            include("components/home-button.html"); 
        }
    ?>
    <div class="main-title">Náš príbeh</div>
    
    <div class="photo-line">
        <img src="assets/images/spolu/domka-sama.png" alt="spolu" class="image-smaller" style="rotate: 10deg;">
        <img src="assets/images/spolu/michal-sam.png" alt="spolu" class="image-smaller" style="rotate: -15deg;">
        &nbsp;&nbsp;&nbsp;&nbsp;<div class="dots">=</div>
        <img src="assets/images/spolu/spolocna-main.png" alt="spolu" class="image-bigger" style="rotate: 4deg;">
    </div>
    
    <div class="between-text">
        Od prvého rande, cez dlhé rozhovory v parku až pred oltár.
    </div>
    
    <div class="photo-line">
        <img src="assets/images/spolu/snubak.png" alt="spolu" class="image-bigger" style="rotate: -4deg;">
        <img src="assets/images/spolu/oznamenie.png" alt="spolu" class="image-bigger" style="rotate: 2deg;">
        <img src="assets/images/spolu/obrucky.png" alt="spolu" class="image-bigger" style="rotate: -5deg;">
    </div>
    
    <div class="dots">
        ...
    </div>

<?php if(isMobileDevice()) : ?>
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik">
                <img src="assets/images/spolu/spolu1.jpg" alt="spolu" style="width: 100%; height: auto;">
            </div>
            <div class="text-under-photo">Kostol sv. Jána Nepomuckého</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu2.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Liberty Island</div> 
        </div>
    </div>
    
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu3.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Rockyho schody, Philadelphia</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu4.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Dve lásky &hearts;</div> 
        </div>
    </div>
    
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu5.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Karolyho palác</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu6.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Zmrzlinka v parku</div> 
        </div>
    </div>
    
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu7.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">New York</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu8.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Rangers vs. Flyers 3:1</div> 
        </div>
    </div>
    
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu9.jpg" alt="spolu" style="width: auto; height: 100%;"></div>
            <div class="text-under-photo">Kávička</div> 
        </div>
    </div>
<?php else : ?>
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik">
                <img src="assets/images/spolu/spolu1.jpg" alt="spolu" style="width: 100%; height: auto;">
            </div>
            <div class="text-under-photo">Kostol sv. Jána Nepomuckého</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu2.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Liberty Island</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu3.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Rockyho schody, Philadelphia</div> 
        </div>
    </div>
    
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu4.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Dve lásky &hearts;</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu5.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Karolyho palác</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu6.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Zmrzlinka v parku</div> 
        </div>
    </div>
    
    <div class="photo-line">
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu7.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">New York</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu8.jpg" alt="spolu" style="width: 100%; height: auto;"></div>
            <div class="text-under-photo">Rangers vs. Flyers 3:1</div> 
        </div>
        <div class="ramik" style="rotate: <?php echo rand(-4,4) ?>deg;">
            <div class="image-ramik"><img src="assets/images/spolu/spolu9.jpg" alt="spolu" style="width: auto; height: 100%;"></div>
            <div class="text-under-photo">Kávička</div> 
        </div>
    </div>
<?php endif; ?>