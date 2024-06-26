
<style type="text/css">
    <?php
        include("names-header.component".$GLOBALS["mobile"].".css")
    ?>
</style>
<div class="title-names-header" id="slide-names-header" <?php if(isMobileDevice()) { echo 'onclick="showMenu()"'; } ?>>
    <div class="background-picture"></div>
    <?php
        $homePath = "/";
        $ourStoryPath = "/nas-pribeh";
        $logisticsPath = "/doprava";
        $gamesPath = "/hry";
        $uploadsPath = "/fotky";

        include("names-header-menu.component.php")
    ?>
    <div class="menu-hint">
        <i class="fa fa-bars" aria-hidden="true" style="color: var(--borderColor);"></i>
    </div>
</div>

<script>
    makeAnimation();
    function makeAnimation(){
        if (sessionStorage.getItem("animationMade")) { 
            document.getElementById('menu').style.animationName = 'none';
            document.getElementById('menu').style.animationDuration = 'none';
            return; 
        }
        document.getElementById('menu').style.animationName = 'header-slide';
        document.getElementById('menu').style.animationDuration = '2s';
        
        setTimeout(() => {
            sessionStorage.setItem("animationMade", true);
        }, 2000);
    }

    menuShowed = false;
    function hideMenu(){
        if (menuShowed) {
            document.getElementById("menu").style.maxHeight = '0vh';
            menuShowed = false;
        }
    }

    function showMenu(){
        if (!menuShowed) {
            setTimeout(() => {
                document.getElementById("menu").style.maxHeight = '50vh';
                menuShowed = true;
            }, 100);
        }
    }
</script>