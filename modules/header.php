<!DOCTYPE html>
<html>

<head>
    <title>General Elections Special 2021</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <!--LG Navbar-->
    <nav class="bg-gray-100 top-0 shadow-lg navbar-tls fixed inset-x-0 z-10">
        <div class="mx-auto flex sm:justify-between md:justify-center lg:justify-center px-8">
            <div class="flex items-center h-16">
                <div class="hidden md:flex space-x-6">
                    <a href="#landing"
                        class="text-black-300 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#fasttalk"
                        class="text-black-300 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Fast
                        Talk</a>
                    <div class="flex items-center">
                        <img class="hidden md:block h-8 w-auto" src="images\TLS - Star 1.png" alt="Workflow">
                    </div>
                    <a href="#articles"
                        class="text-black-300 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Articles</a>
                    <a href="#voxpop"
                        class="text-black-300 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Vox
                        Populi</a>
                </div>
                <div class="lg:hidden md:hidden sm:flex items-center">
                    <img class="block lg:hidden h-8 w-auto" src="images\TLS - Star 1.png" alt="Workflow">
                </div>

            </div>
            <div class="md:hidden flex items-center">
                <button class="mob-button">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>


        <!--Mobile Navbar-->
        <div class="hidden md:hidden mobile-menu">
            <a href="#landing"
                class="block text-black-300 hover:bg-green-700 px-2 py-4 rounded-md text-sm font-medium">Home</a>
            <a href="#headtohead"
                class="block text-black-300 hover:bg-green-700 px-2 py-4 rounded-md text-sm font-medium">Head
                to Head</a>
            <a href="#fasttalk"
                class="block text-black-300 hover:bg-green-700 px-2 py-4 rounded-md text-sm font-medium">Fast
                Talk</a>
            <a href="#articles"
                class="block text-black-300 hover:bg-green-700 px-2 py-4 rounded-md text-sm font-medium">Articles</a>
            <a href="#voxpop"
                class="block text-black-300 hover:bg-green-700 px-2 py-4 rounded-md text-sm font-medium">Vox
                Populi</a>
            <a href="#" class="block text-black-300 hover:bg-green-700 px-2 py-4 rounded-md text-sm font-medium">Daily
                Tallies</a>
        </div>
    </nav>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>


</html>