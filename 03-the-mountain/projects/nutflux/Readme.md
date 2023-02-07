# NUTFLUX

> Netflix-like project with Laravel & VueJS
 
* * *

Le but de ce projet est de réaliser un *netflix-like*, aux fonctionnalités un peu plus basiques, pour découvrir le framework Laravel (PHP, backend) et VueJS (JavaScript, frontend).

## Laravel : backend

Grâce à la puissance de Laravel, vous allez gérer les inscriptions et les connexions.

Vous aurez plusieurs types d'entités : `Account`, `User`, `Film`, `List`.

Chaque compte (`Account`) peut avoir 3 utilisateurs (`User`) maximum.

Chaque film peut-être ajouté dans une liste propre à un utilisateur ; il existe trois listes : 

- À regarder plus tard
- Favoris
- Déjà vu   

Le téléchargement est illegal mais il vous faudra alors remplacer la série ou le film par son trailer YouTube.

## VueJS : frontend

Pour la partie frontend vous devrez gérer les données envoyées par Laravel et les afficher grace au fonctionnalités de VueJS.

Votre interface doit gérer la manipulation de chaque type de données.

De plus, vos visiteurs doivent pouvoir faire une recherche dans les films sur les critères suivants :

- les acteurs
- le résumé
- le titre
- date de sortie

Lors de l'affichage des détails d'un film/série, vous devrez afficher le poster du film, son résumé, les acteurs, le titre, et le trailer Youtube de celui ci.
