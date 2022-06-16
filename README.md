# <ins>exo_Symfony</ins>
exercice de création d'un site de réservation de gite via le Framework Symfony


## <ins>Pense bête:</ins>

lors de la création d'un page, ajouter la variable menu
```
// For example:
    return new RedirectResponse($this->urlGenerator->generate>('home_index', [
        "menu" => null ou "menu" => "index"
   ]));
```

## <ins>login</ins>
```
user:admin
pass:admin
role:admin

user:jhon
pass:doe
role:user
```

## <ins>template page index:</ins>
superawesome: https://gettemplate.com/demo/superawesome/

## <ins>a faire</ins>

- [ ] cacher les liens non accessible en fonction du log in
- [ ] randomise the fist page entity from DB
- [ ] lier gite et user
- [ ] formulaire de contact dans page du gite
- [ ] creer un insert img dans formulaire (https://symfony.com/bundles/EasyAdminBundle/2.x/integration/vichuploaderbundle.html)

## <ins>commande:</ins>

voir les commandes
>Php bin/console

allumer serveur symfony
>Php  -S   localhost:8000   -t   public

Lancer webpack  serveur
>npm run dev-server

Créer un controler (1er lettre en MAJ, reste en camelcase)
>php bin/console make :controller

## database

Créer DB Php 
>bin/console doctrine :database :create

Modifier DB 
>php bin/console make :migration

Metre a jour la DB 
>php bin/console doctrine :migration :migrate

Suppr une colone : supr, variable + getter + setter
>php bin/console doctrine:migrations:diff 

>php bin/console doctrine:migrations:migrate

## fixtures

Créer une fixture : 
>Php bin/console make :fixtures

Load une fixture : 
>php bin/console doctrine :fixtures :load

générer les dites+users
>php bin/console d:f:l --purge-with-truncate

