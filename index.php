<!DOCTYPE html>
<html lang="en">
	<head>
		<title> The LaSallian | General Elections Special 2020 </title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="/css/css.css">-->
	</head>
    <script>
        AOS.init();
      </script>
    <body>
        <nav class="bg-white-1000 shadow-lg navbar-tls fixed w-full z-10">
            <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center h-16">
              <div class="flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:block sm:ml-6">
                  <div class="flex space-x-6">
                    <a href="#" class="text-black-300 hover:text-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium aria-current="page">Home</a>
                    <a href="#" class="text-black-300 hover:text-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Head to Head</a>
                    <a href="#" class="text-black-300 hover:text-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fast Talk</a>
                    <div class="flex items-center">
                        <img class="block lg:hidden h-8 w-auto" src="images\TLS - Star 1.png" alt="Workflow">
                        <img class="hidden lg:block h-8 w-auto" src="images\TLS - Star 1.png" alt="Workflow">
                      </div>
                    <a href="#" class="text-black-300 hover:text-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Articles</a>
                    <a href="#" class="text-black-300 hover:text-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Vox Populi</a>
                    <a href="#" class="text-black-300 hover:text-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Daily Tallies</a>
                  </div>
                </div>
              </div>
            </div> 
        </div>
         </nav>
         <section id="landing" class="flex items-center justify-center z-0">
         <div class="grid grid-cols-2 gap-8 px-4 align-middle">
            <div class="flex flex-col justify-center">
                <img src="/images/TLS - Star 1.png" class="self-center"  alt="tls-star">
                <h1 class="text-center font-bold text-2xl text-green-800">The LaSallian</h1>
                <?php 
        
                  echo "The truth will set you free.";
        
                ?>
                <h3 class="text-center font-semibold">General Elections Special 2020</h3>
            </div>
            <div class="flex flex-col justify-center">
                    <img src="images\dmitrii-matiushchenko-p-LLnsEGQ00-unsplash.jpg" class="transform scale-100" alt="cover-tls">
            </div>
          </div>
          
        </section>
        <section id="articles"></section>
        <section id="headtohead"></section>
        <section id="voxpop"></section>
    </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <!-- <script src="/js/main.js"></script> -->
</html>