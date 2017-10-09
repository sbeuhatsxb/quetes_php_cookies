# quetes_php_cookies
quetes_php_cookies - PHP session_start() et cookies
Critères de validation

On peut s'identifier de manière simple avec seulement un nom d'utilisateur,
Le nom d'utilisateur donné lors de l'identification est repris sur toutes les pages depuis les sessions,
Mon panier est stockée dans mes cookies et est affiché sur la page "Panier".
On ne peux accéder qu'a la page login.php et index.php tant qu'on est pas connecté. login.php devient inaccessible une fois connecté, l'utilisateur est redirigé vers la page index.php s'il tente d'y accéder.
L'utilisateur peux également se délogger à l'aide d'un bouton "déconnexion".
