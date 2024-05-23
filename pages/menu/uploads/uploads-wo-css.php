
<div id="main-gallery-view" class="main-view">

    <div class="gallery-title">
        Svatební
    </div>

    <?php

        //delete inapp files 
        $images = glob($showFromDirectory."*");
        array_map('unlink', $images);

        //fetch from outer folder
        $images = glob($copyFromDirectory."*");

        foreach( $images as $image ) {
            copy($image, $showFromDirectory . basename($image));
        }

        $images = glob($showFromDirectory."*");

        function iterateImages ($image) {
            $videoExts = array("mov", "mp4", "avi", "wmv", "avchd", "webm", "flv", "3gp");
            if( in_array(strtolower(pathinfo($image, PATHINFO_EXTENSION)), $videoExts) ) {
                echo '<video controls> <source src="'.$image.'" type="video/mp4"> </video>';
            } else {
                echo '<img src="'.$image.'" alt="photo" onclick="openImage(this);">';
            }
        }
    ?>

    <?php if (empty($images)) : ?>
        <div style="text-align: center;">
            Žiadne fotky
        </div>
    <?php endif; ?>

    <div id="gallery-wrapper" class="gallery-wrapper">
        <?php for ($i=0; $i < $numOfGalleryColumns; $i++) : ?>
            <div class="gallery-column">
                <?php
                    for ($j=$i; $j < count($images); $j+=$numOfGalleryColumns) { 
                        iterateImages($images[$j]);    
                    }
                ?>
            </div>
        <?php endfor; ?>        
    </div>

    <div id="highlighted-image" class="highlighted-image">
        <span onclick="closeImage()" class="closebtn">
            &times;
        </span>
        <img id="expandedImg">
        <div id="imgtext"></div>
    </div>

    <script>
        isVideoReady();
        function isVideoReady(){
            var videos = document.getElementsByTagName("video");
            console.log(videos);

            for (let index = 0; index < videos.length; index++) {
                const element = videos[index];
                element.addEventListener('error', function (e) {

                var date = new Date();
                var milliSecs = date.getMilliseconds();
                var curr_src = $(element).attr('src');
                var curr_src_arr = curr_src.split("?");
                var new_src = curr_src_arr+"?t="+milliSecs;

                $(element).attr('src',new_src);
                $(element).find('source').attr('src',new_src);
                element.load();
                }, false);
                
            }
        }
        function openImage(imgs) {
            document.getElementById("slide-names-header").style.display = 'none';
            if (document.getElementById("home-button")) {
                document.getElementById("home-button").style.display = 'none'; 
            }
            document.getElementById("border-app").style.opacity = 0.5;
            document.getElementById("gallery-wrapper").style.opacity = 0.5;
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "flex";
        }

        function closeImage() {
            document.getElementById("highlighted-image").style.display='none';
            document.getElementById("slide-names-header").style.display = 'block';
            if (document.getElementById("home-button")) {
                document.getElementById("home-button").style.display = 'flex';   
            }
            document.getElementById("border-app").style.opacity = 1;
            document.getElementById("gallery-wrapper").style.opacity = 1;
        }
    </script>

</div>
