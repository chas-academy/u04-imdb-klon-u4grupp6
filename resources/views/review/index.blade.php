<x-layout>
    <body class="bg-gray-950 text-orange-50">
        <div class="container mx-auto p-6">
            <!-- Titel -->
            <h1 class="text-3xl font-bold text-yellow-600 text-center mb-6">{{ title }}</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <!-- Film Video och Filmbeskrivning -->
                <div class="bg-lime-950 w-full rounded-lg shadow-lg p-4">
                    <!-- Video -->
                    <div class="relative pb-[56.25%]"> <!-- 16:9 Aspect Ratio -->
                        <iframe class="absolute top-0 left-0 w-full h-full" 
                                src="https://www.youtube.com/embed/nulvWqYUM8k" 
                                title="Nosferatu Trailer" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    
                    <!-- Filmbeskrivning -->
                    <div class="mt-4">
                        <h3 class="text-2xl font-semibold text-yellow-600 mb-2">Filmbeskrivning</h3>
                        <p class="text-orange-50 text-sm">
                        En gotisk berättelse om besatthet mellan en hemsökt ung
                               kvinna i 1800-talets Tyskland och den uråldriga transsylvanska vampyren som förföljer henne
                               och för med sig otalig fasa
                        </p>
                    </div>
                </div>

                <!-- Bilder -->
                <div class="bg-lime-950 w-full rounded-lg shadow-lg p-4">
                    <!-- Bilder -->
                    <div>
                        <h2 class="text-2xl font-semibold text-yellow-600">Bilder</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                            <img class="rounded-lg" 
                                 src="https://resizing.flixster.com/2v8gOcJ0XR7bFJWkuUdN_ZW6UvQ=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzAxMjk0NTBlLTUxNjMtNDNkOS04NWM5LTE2MmFiMWEwOTRlMC5qcGc=" 
                                 alt="Nosferatu Image 1">
                        </div>
                    </div>

                    <!-- Genre -->
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-yellow-600">Genre</h2>
                        <p class="text-orange-50 text-sm">Horror, Thriller</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-layout>
