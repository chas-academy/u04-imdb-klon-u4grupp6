[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/9Y3cG2WL)

# Installation/Setup

1. Clone the repository to your user/Herd directory
2. Make sure the project is showing up in Herd, if not you have to link it or something idk it worked for me
3. Start Docker Desktop
4. Open the repo in VScode and run the following console commands:
    ``
    composer update
    cp .env.example .env
    php artisan key:generate
    docker compose up
    php artisan migrate
    ``
5. Open the site in your browser
6. Pester Terra on discord or slack if it doesn't work
