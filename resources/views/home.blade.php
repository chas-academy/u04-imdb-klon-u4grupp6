<x-layout>
    <div class="bg-black min-h-screen">
        <div class="container px-4 max-w-full ml-8 mt-10">
            <!-- GRID STRUKTUR FÖR RUBRIKER OCH KORT -->
            <div class="grid grid-cols-2 gap-10 px-10">
                <!-- Vänster rubrik -->
                <div>
                    <h1 class="text-3xl font-bold text-white mb-4 text-left">I Fokus</h1>
                </div>
                <!-- Höger rubrik -->
                <div>
                    <h1 class="text-3xl font-bold text-white mb-4 text-left">Måste Kolla</h1>
                </div>

                <!-- Vänster kort - En film med titel och beskrivning bredvid bilden -->
                <div class="bg-[#353002] rounded-lg p-6 w-[600px] h-[400px] shadow-lg flex items-center gap-6">
                    <!-- Filmens bild (vänster) -->
                    <img src="{{ asset('images/bild1.jpg') }}" alt="Book Of Eli" 
                         class="w-[200px] h-[120px] object-cover rounded-lg">

                    <!-- Filmens info (höger) -->
                    <div class="text-left">
                        <h2 class="text-xl font-bold text-white">Book Of Eli</h2>
                        <p class="text-md text-gray-200 mt-2">
                            En drivande kämpar sig igenom ett härjat, postapokalyptiskt Amerika samtidigt som han skyddar en helig bok
                            som innehåller hemligheterna bakom mänsklighetens räddning.
                        </p>
                    </div>
                </div>

                <!-- Höger kort - Bilder med filmtitlar UNDER bilderna -->
                <div class="bg-[#353002] rounded-lg p-6 w-[600px] h-auto shadow-lg">
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ([
                            ['bild' => 'bild1.jpg', 'titel' => 'Book Of Eli (2010)'],
                            ['bild' => 'bild2.jpg', 'titel' => 'Goodfellas (1990)'],
                            ['bild' => 'bild3.jpg', 'titel' => 'Interstellar (2014)'],
                            ['bild' => 'bild4.jpg', 'titel' => 'Inception (2010)'],
                            ['bild' => 'bild5.jpg', 'titel' => 'Pulp Fiction (1994)'],
                            ['bild' => 'bild6.jpg', 'titel' => 'Gladiator (2000)'],
                            ['bild' => 'bild7.jpg', 'titel' => 'Full Metal Jacket (1984)'],
                            ['bild' => 'bild8.jpg', 'titel' => 'The Truman Show (1998)'],
                            ['bild' => 'bild9.jpg', 'titel' => 'Dune 2 (2024)']
                        ] as $film)
                        <div class="flex flex-col items-center">
                            <!-- Filmens bild -->
                            <img src="{{ asset('images/' . $film['bild']) }}" alt="{{ $film['titel'] }}" 
                                 class="w-40 h-32 object-cover rounded-lg">
                            
                            <!-- Filmens namn (UNDER bilden) -->
                            <h3 class="text-white text-md mt-2 font-semibold text-center">{{ $film['titel'] }}</h3>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- NYTT KORT UNDER BÅDA KORTEN ("Utforska Mer") -->
            <div class="mt-10">
                <h1 class="text-3xl font-bold text-white mb-4 text-center">Utforska Mer</h1>
                <div class="bg-[#353002] rounded-lg p-6 shadow-lg">
                    <div class="grid grid-cols-1 gap-3"> <!-- Minskat avstånd mellan rader -->
                        @foreach ([
                            ['bild' => 'bild8.jpg', 'titel' => 'The Truman Show (1998)'],
                            ['bild' => 'bild9.jpg', 'titel' => 'Dune 2 (2024)'],
                            ['bild' => 'bild10.jpg', 'titel' => 'The Grand Budapest Hotel (2014)'],
                            ['bild' => 'bild11.jpg', 'titel' => 'John Wick 3 (2019)'],
                            ['bild' => 'bild12.jpg', 'titel' => 'Shutter Island (2010)'],
                            ['bild' => 'bild13.jpg', 'titel' => 'John Wick (2014)'],
                            ['bild' => 'bild14.jpg', 'titel' => 'Bullet Train (2022)'],
                            ['bild' => 'bild15.jpg', 'titel' => 'Nosferatu (2024)']
                        ] as $film)
                        <div class="flex items-center gap-3"> <!-- Minskat avstånd mellan bild och text -->
                            <!-- Filmens bild (vänster) -->
                            <img src="{{ asset('images/' . $film['bild']) }}" alt="{{ $film['titel'] }}" 
                                 class="w-32 h-24 object-cover rounded-lg">

                            <!-- Filmens namn (höger) -->
                            <h3 class="text-white text-md font-semibold -mt-1">{{ $film['titel'] }}</h3>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
