<x-layout>

    <body class="bg-gray-950 text-orange-50">
        <div class="container mx-auto p-6">
            <!-- Titel -->
            <h1 class="text-3xl font-bold text-yellow-600 text-center mb-6">Nosferatu</h1> <!-- byt ut TITEL  -->

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <!-- Film Video och Filmbeskrivning -->
                <div class="bg-lime-950 w-full rounded-lg shadow-lg p-4">
                    <!-- Video -->
                    <div class="relative pb-[56.25%]"> <!-- 16:9 Aspect Ratio -->
                        <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/nulvWqYUM8k" title="Nosferatu Trailer" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Filmbeskrivning -->
                    <div class="mt-4">
                        <h3 class="text-2xl font-semibold text-yellow-600 mb-2">Filmbeskrivning</h3>
                        <p class="text-orange-50 text-sm">
                            En gotisk berättelse om besatthet mellan en hemsökt ung
                            kvinna i 1800-talets Tyskland och den uråldriga transsylvanska vampyren som förföljer henne
                            och för med sig otalig fasa.
                        </p>

                        <!-- Kommentarer -->
                        <div class="mt-6">
                            <h3 class="text-2xl font-semibold text-yellow-600 mb-4">Lägg till en kommentar</h3>
                            <textarea name="comment" rows="4"
                                class="w-full border border-orange-50 rounded-lg p-3 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Skriv din kommentar här..." required></textarea>

                            <div class="mt-4 flex justify-end">

                                <button type="submit"
                                    class="bg-yellow-600 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Skicka kommentar
                                </button>
                            </div>
                            </form>
                        </div>

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

                    <!-- Lägg till i din lista -->
                    <div class="mt-4 flex"></div>
                    <button type="button"
                        class="bg-yellow-600 text-white px-4 py-1 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                        Lägg till i din lista
                        </button>
                </div>
            </div>
        </div>
    </body>
</x-layout>