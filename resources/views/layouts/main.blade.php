<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Server</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex flex-col md:flex-row items-center">
                   <li>
                       DDM
                   </li>
                   <li class="md:ml-16">
                       <a href="#" class="hover:text-gray-300">Movies</a>
                   </li>
                   <li class="md:ml-6">
                       <a href="#" class="hover:text-gray-300">TV Shows</a>
                   </li>
                   <li class="md:ml-6">
                       <a href="#" class="hover:text-gray-300">Actors</a>
                   </li>
                </ul>
                <div flex flex-col md:flex-row items-center>
                    <div class="relative">
                        <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    </div>
                </div>
            </div>    
        </nav>
        @yield('content')
    </body>
</html>