<?php 

    session_start();
    $query = $_SESSION['articles'];
    if($query->have_posts()){
        // write the article card 

    }

?>
<!DOCTYPE html>
<html lang="en">
<!-- The information will originate here. 
The database will be queried, then information should be stored
into a key-value array. 

Implement foreach so that multiple articleCards are displayed.

Let Tailwind handle scaling gracefully.-->

<body>
    <h1 class="pl-20 pb-10 text-green-700 text-6xl font-bold" data-aos="zoom-in">Articles</h1>
    <div class="px-20 grid grid-cols-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <?php 
                // test query
                    $query = $_SESSION['articles'];
                    if($_SESSION["articles"]->have_posts()){
                        while($query->have_posts()){
                            $query->the_post();
                            $authors = array();
                            $title = get_the_title();
                            $link = wp_get_shortlink();
                            $thumburl = get_the_post_thumbnail_url();
                            $authStr;
                            for($i = 0; $i < count(get_multiple_authors()); $i++){

                                $first_name = get_multiple_authors()[$i]->get_user_object()->$display_name['first_name'][0]." ";
                                $last_name = get_multiple_authors()[$i]->get_user_object()->$display_name['last_name'][0];
                                $full_name = $first_name.$last_name; 
                                
                                array_push($authors, $full_name);
                            }

                           

                            for($i = 0; $i < count($authors); $i++){
                            if(is_null($authors[$i + 1]) && count($authors) > 1){
                                $authStr = $authStr." & ".$authors[$i];
                            } else {
                                $authStr = $authStr ." ". $authors[$i];
                            }
                            }
                            createCard($title, $authStr, $link, $thumburl);
                            $authStr = "";
                        }
                    } else {
                        echo "LMAO";
                    }

                    wp_reset_postdata();

                ?>
    </div>
</body>

</html>
<?php 
    function createCard($title, $authors, $link, $img){
    echo "<div class='tls-card rounded shadow-lg hover:text-green-500 hover:shadow-2xl h-auto' data-aos='fade-right'>
        <a href='$link' target='_blank'><img class='w-full' src='".$img."' target='_blank'>
        <div class='px-6 py-4'>
            <div class='font-bold text-xl mb-2 text-center'>".$title."</div></a>
            <p class='font-normal text-l mb-1 text-center text-black'>by <span
                    class='font-semibold text-gray-500'>".$authors."</span></p>
        </div>
    </div>";
    }
?>