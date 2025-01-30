[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/9Y3cG2WL)

# Installation/Setup

1. Clone the repository to your user/Herd directory
2. Make sure the project is showing up in Herd, if not you have to link it or something idk it worked for me
3. Start Docker Desktop
4. Open the repo in VScode and run the following console commands:

        composer update
        cp .env.example .env  
        php artisan key:generate
        docker compose up
        php artisan migrate

5. Open the site in your browser
6. Pester Terra on discord or slack if it doesn't work

___________________
möte anteckningar: https://docs.google.com/document/d/1-u5DLuDcwLrIKqimLbYnJhikdFoBjkNDHeptmRSiznI/edit?tab=t.0

ER diagram: https://dbdiagram.io/d/uo4-6797c64b263d6cf9a034174a

figma design: https://www.figma.com/design/kbI7YI3FXKayGtfz6l9tj7/U04?node-id=55-83&t=vG2UPvy1LU2QJrby-1