class User : c’est un modèle (Model).
Il représente un utilisateur — ici, il contient seulement un nom.
public string $name; : c’est une propriété (variable de l’objet)
qui stocke le nom de l’utilisateur.
\_\_construct(string $name) : c’est le constructeur.
Il s’exécute automatiquement quand on crée un nouvel objet User.

class Product : un autre modèle.
Il représente un produit (article) avec un titre et un prix.
$title : contient le nom du produit.
  $price : contient le prix du produit.
  __construct($title, $price) : permet d’initialiser les deux propriétés.

class UserController : c’est un contrôleur (Controller).
Il gère la logique liée aux utilisateurs.
public function show() : méthode principale :

1.  Elle crée un objet User (les données).
2.  Elle appelle la vue userView.php (l’affichage).
    show()
    Crée un seul produit (Product).
    Appelle la vue productView.php pour l’afficher.

list()
Crée plusieurs produits dans un tableau ($products).
Appelle la vue productListView.php pour les afficher avec une boucle.

C’est lui qui fait le lien entre les modèles et les vues.

Dans vos views Utiliser htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') pour échapper tous les caractères spéciaux avant l’affichage et prévenir les vulnérabilités XSS

XSS = Cross-Site Scripting.
C’est une vulnérabilité de sécurité qui permet à un attaquant d’injecter du code malveillant (souvent du JavaScript) dans une page web

Même conséquence que le innerHtml en JS, pour ceux qui se rappellent encore de ce qu’est JavaScript (--)

Étape 2 : Ajouter un deuxième modèle et contrôleur

Créez model/Product.php avec une classe Product ayant title et price.

Créez controller/ProductController.php avec une méthode qui instancie un Product et appelle la vue.

Créez view/productView.php qui affiche un produit (titre + prix).

Modifiez index.php pour choisir quelle page charger selon $\_GET['page'] :

?page=user → affiche l’utilisateur.

?page=product → affiche un produit.

Résultat attendu :

index.php?page=user => Utilisateur : Nom d'utilisateur.

index.php?page=product => Produit : Nom du produit prix €.

Étape 3 : Liste de produits
Modifiez ProductController pour créer plusieurs produits (tableau de Product).

Créez view/productListView.php qui affiche la liste avec une boucle foreach.

Résultat attendu :
Une page affichant :

Nos Produits :

- Produit 1 - prix €
- Produit 2 - prix €
- Produit 3 - prix €
  Étape 4 : Routing (index)
  Dans index.php, ajoutez un cas products dans le switch pour afficher la liste.

Vérifiez le fonctionnement avec :

index.php?page=products => liste des produits.

Points à retenir :
Modèle (M) = données (User, Product).

Vue (V) = affichage HTML + un peu de PHP pour échapper et afficher.

Contrôleur (C) = logique qui prépare les données et appelle la vue.

Routing = choix du contrôleur/méthode en fonction de l’URL.

Sécurité : toujours utiliser htmlspecialchars pour éviter les injections.
