<!DOCTYPE html>
<html lang="en">
<!-- The information will originate here. 
The database will be queried, then information should be stored
into a key-value array. 

Implement foreach so that multiple articleCards are displayed.

Let Tailwind handle scaling gracefully.-->
<body>
    <h1 class="pl-10 text-green-700 text-6xl thelasallian-animation">Articles</h1>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <?php include_once "modules/articleCard.php"?>
    </div>
</body>

</html>