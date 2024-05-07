
<style type="text/css">
    <?php
        include("questionnaire-redirection.component.css");
    ?>
</style>

<div class="collection-wrapper bottom-right">
    <div class="oblacik right-side">
        <img src="assets/images/oblacik.png" alt="Oblacik" style="width: 15vw; height: auto;">
        <p class="oblacik-text">
            Ahoj,<br>Čo o mne vieš?
        </p>
    </div>
    <div class="person" style="display: flex;">
        <form action="/mitko" method="post" style="display: flex;">
            <input type="hidden" name="personName" value="mitko">
            <button type="submit" class="hidden-button"></button>
        </form>
        <img src="assets/images/mitko.png" alt="Mitko" style="width: inherit;">
    </div>
</div>

<div class="collection-wrapper bottom-left">
    <div class="oblacik left-side">
        <img src="assets/images/oblacik.png" alt="Oblacik" style="width: 15vw; height: auto;">
        <p class="oblacik-text" style="transform: scaleX(-1);">
            Ahoj,<br>Čo o mne vieš?
        </p>
    </div>
    <div class="person" style="display: flex;">
        <form action="/domka" method="post" style="display: flex;">
            <input type="hidden" name="personName" value="domka">
            <button type="submit" class="hidden-button"></button>
        </form>
        <img src="assets/images/domka.png" alt="Domka" style="width: inherit;">
    </div>
</div>
