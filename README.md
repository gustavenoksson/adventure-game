# Horror House

Text about the project and why it exists. This would also be a great place to link the project on One.com.

This project is an adventure game where the user has to solve riddles to make it to the end. The project was inspired by halloween and is therefore in a spooky setting.

Website: https://gusweb.se/adventure-game/php/index.php

# Installation

1. Clone this repository to your computer.
2. Open cloned folder in Visual Studio Code and start localhost.
3. To acess index.php add /php/ after localhost (http://localhost:8000/php/index.php).

# Code Review

Code review written by [Adam Garali](https://github.com/Adishumla).

1. `index.php:19` - Kom ihåg att filtrera användarinput, i detta fall gör det inget om användaren skriver in konstiga tecken. Men, som Hans säger så är det en bra vanesak att filtrera inputs.
2. `all files` - Vissa filer har få kommenterarer och vissa har inga kommentarer. Även om det är lät att förstå vad som händer i koden så är det bra att ha kommentarer för att förtydliga vad som händer.
3. `chapterthree:10-11` - Kod som inte används bör tas bort, det är bra att ha en ren kodbas.
4. `styles.css` - Det är inte nödvändigt men att della upp CSS i olika filer kan göra det lättare att hitta och förstå vad som händer i koden.
5. `chaptertwo.php:23` - Man kopplar labels till inputs med hjälp av `for` och `id` attributen. Det hjälper till med tillgänglighet och användarvänlighet. (designen är snygg!)

# Testers

Tested by the following people:

1. Emma Hedlund
2. Tobias Åhlund
