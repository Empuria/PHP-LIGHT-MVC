# PHP-LIGHT-MVC
Light PHP MVC Framework using Spot ORM and Twig templating

Ce framework PHP a été créé en suivant les instructions de SupInfo :
https://www.supinfo.com/articles/single/3697-creer-une-architecture-mvc-complete-sans-framework-php

Pour utiliser twig il faut cependant remplacer le code du constructeur Controller.php issu du tuto par celui-ci :

$loader = new \Twig\Loader\FilesystemLoader('./views/');
$this->twig = new \Twig\Environment($loader, array('cache' => false,));

Il faut alors préciser dans les controllers le dossier où se trouve la vue. Cela permet de pouvoir intégrer un layout global et non un layout par classe.
