<?php  function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up.browser|up.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
?>
<!DOCTYPE html>
<html>

<body>


    <?php if(!isMobile()){
                   
                    echo '<div class="grid grid-cols-2 gap-8 px-4 align-middle"><div class="landing-text">
                    <img src="images/TLS - Star 1.png" class="thelasallian-star" alt="tls-star">
                    <h1 class="thelasallian-text thelasallian-animation">On the line</h1>
                    <h3 class="thelasallian-sub thelasallian-animation">General Elections Special 2021</h3>
                    </div>';
                    echo '<div class="flex flex-col justify-center">
                    <div>';
                    echo '<img class="top" src="images/landing/top.png" class="bg-fixed" />';
                    echo '<img class="handwpaper" src="images/landing/handwpaper.png" />';
                    echo '<img class="box" src="images/landing/halfbox.png" />';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div><img class="fade h-auto w-screen" src="images/cover-mobile.png"/>'; 
                    echo '<div class="landing-text" style="margin-top: -20vh;">
                    <img src="images/TLS - Star 1.png" class="thelasallian-star items-center m-auto" alt="tls-star" style="height: 200px; width: auto;">
                    <p class="text-8xl font-bold thelasallian-animation text-center pt-10">On the line</p>
                    <p class="text-3xl font-light thelasallian-animation text-center ">General Elections Special 2021</p>
                    </div>';
                    echo '</div>';
                }
                ?>
</body>

</html>