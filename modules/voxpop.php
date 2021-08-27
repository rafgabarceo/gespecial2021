<!DOCTYPE html>
<html lang="en">

<body>
    <!--I cant seem to make this section fit to screen. Its like the containers overflow or something so there's always a scroll bar. 
    I'm not sure if its due to a utility from Tailwind or im missing something. 
    Maybe you can fix it-->
    <div class="containervox m-auto">
        <h2 class="font-bold text-green-700 text-center text-3xl mb-4">VOX POPULI</h2>
        <h1 class="font-bold text-center text-2xl mb-5">General Elections 2021</h1>
        <p class="font-normal text-l mt-2 text-center text-black">by <span class="font-semibold text-gray-500">Anton
                Trivino, Apa Reyta, Eunice Uy Tan, Lauren Sason,
            </span> & <span class="font-semibold text-gray-500">Nelcze Zulueta</span></p>
        <p class="text-gray-700 text-base text-center mt-1 text-lg">
            For this year's General Elections, <span class="font-bold">The LaSallian's</span> photographers ask
            students what type of
            leader they
            want to see the USG rally behind for the 2022 national elections.
        </p>
    </div>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-5 max-h-screen slideshow-container">
        <div class="p-20 w-full mySlides fade">
            <div class="bg-white rounded-lg shadow-lg">
                <img src="https://images.unsplash.com/photo-1591848478625-de43268e6fb8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cHJvdGVzdHxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <div class="p-6">
                    <p class="font-bold text-l mt-2 text-center text-black">Name</p>
                </div>
            </div>
        </div>
        <div class="containervox m-auto mySlides fade">
            <blockquote className="p-4 italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 quote">
                <div className="stylistic-quote-mark" aria-hidden="true">
                    &ldquo;
                </div>
                <p className="mb-2"></p>
            </blockquote>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</body>

</html>
<?php

function createSlide($name, $image, $answer){
    echo ' 
    <div class="p-20 w-full mySlides fade">
                <div class="bg-white rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1591848478625-de43268e6fb8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cHJvdGVzdHxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <div class="p-6">
                        <p class="font-bold text-l mt-2 text-center text-black">Name</p>
                    </div>
                </div>
            </div>
            <div class="containervox m-auto mySlides fade">
                <blockquote className="p-4 italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 quote">
                    <div className="stylistic-quote-mark" aria-hidden="true">
                        &ldquo;
                    </div>
                    <p className="mb-2"></p>
                </blockquote>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>';

}

?>