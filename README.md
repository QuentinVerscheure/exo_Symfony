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
## <ins>commande:</ins>

voir les commandes
>Php bin/console

allumer serveur symfony
>Php  -S   localhost:8000   -t   public

générer les dites+users
>php bin/console d:f:l --purge-with-truncate

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

- [ ] cacher les liens non accessible en fonction du log in (https://symfonycasts.com/screencast/easyadminbundle/dashboard ?)
