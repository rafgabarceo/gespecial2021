<!DOCTYPE html>
<html lang="en">

<body>
    <!--I cant seem to make this section fit to screen. Its like the containers overflow or something so there's always a scroll bar. 
    I'm not sure if its due to a utility from Tailwind or im missing something. 
    Maybe you can fix it-->
    <div class="containervox m-auto">
        <h2 class="font-bold text-green-700 text-center text-6xl mb-4">VOX POPULI</h2>
        <h1 class="font-bold text-center text-4xl mb-1">General Elections 2021</h1>
        <p class="font-normal text-lg mt-2 text-center text-black">by <span class="font-semibold text-gray-500">Anton
                Trivino, Apa Reyta, Eunice Uy Tan, Lauren Sason,
            </span> & <span class="font-semibold text-gray-500">Nelcze Zulueta</span></p>
        <p class="text-gray-700 text-base text-center mt-1 text-lg">
            For this year's General Elections, <span class="font-bold">The LaSallian's</span> photographers ask
            students what type of
            leader they
            want to see the USG rally behind for the 2022 national elections.
        </p>
    </div>

    <?php  
                require_once("../scripts/voxParse.php");
                $dir = "../images/vox/";
                $files = array_diff(scandir($dir), array('.', '..'));    
                natsort($files);
                $images = array_values($files); 
                $responses = fopen("../scripts/responses.txt", "r");
                //print_r(parseText($responses));
                $parsedText = parseText($responses);
                fclose($responses);
                for($i = 0; $i < 19; $i++){
                    $name = $parsedText['names'][$i];
                    $answers = $parsedText['answers'] [$i];
                    $image = $images[$i];
                    createSlide($name, $image, $answers);
                }
        ?>

</body>

</html>
<?php

function createSlide($name, $image, $answer){
    echo "<div class='carousel-vox'>
    <div class='p-10 grid grid-cols-2'>
        <div class='p-20 w-full'>
            <div class='bg-gray-50 rounded-lg shadow-lg'>
                <img src='../images/vox/".$image."'>
                <div class='p-6'>
                    <p class='font-bold text-l mt-2 text-center text-black'>".$name."
                    </p>
                </div>
            </div>
        </div>
        <div class='containervox m-auto'>
            <p class='mb-2 px-10 pl-5 text-lg'>".$answer."</p>
        </div>
    </div>";

}

?>