## 3.2 Interconnexion avec la base de données :

### Questions:

1. On crée différents historiques de transactions pour une seule base de données, pour un seul programme, or il nous en faut un seul pour pouvoir avoir un seul historique des transactions effectuées, plus facilement manipulable.

2. L'instance de la connexion à la base de données est statique, donc chargée en mémoire une seule fois avant l'éxécution du programme.

## 3.3 Interconnexion avec la base de données

Fait dans `db.php`

## 3.4 Lier nos modèles User et Address

3. Je choisirais l'inversion de dépendances. Ceci limiterait la gestion des dépendances au niveau des classes pour lesquelles elles sont nécessaires, sinon, ces dépendances ne seront tout simplement jamais invoquées.

## 3.5 A vous de jouer

4. On devrait gérer la création des vues au niveau des controllers pour les coupler à une gestion de tokens et créer des options de sécurité intégrées au framework.

5. L'authentification, l'utilisation d'un registre de modules public, créer un client qui standardise les créations d'éléments tels que les modules, ou encore plus ciblé: les vues et les feuilles de styles associées.