Bonsoir voici mon Readme pour ce projet.

1)Comment lancer le projet.
- Composer install
- Symfony server:start
crée un .env et copier coller le .env.example dans le .env .

2)Setup les users.

-1° php bin/console  app:create-user jessy1 password jessyernatus1@gmail.com test

-2° php bin/console  app:create-user jessy2 password jessyernatus2@gmail.com test

-3° php bin/console  app:create-user jessy3 password jessyernatus3@gmail.com test

-4° php bin/console  app:create-user jessy4 password jessyernatus4@gmail.com test

-5° php bin/console  app:create-user jessy5 password jessyernatus5@gmail.com test

-6° php bin/console  app:create-user jessy6 password jessyernatus6@gmail.com test

-7° php bin/console  app:create-user jessy7 password jessyernatus7@gmail.com test

-8° php bin/console  app:create-user jessy8 password jessyernatus8@gmail.com test

-9° php bin/console  app:create-user jessy9 password jessyernatus9@gmail.com test

-10° php bin/console  app:create-user jessy10 password jessyernatus10@gmail.com test

ou

composer load-user

3)Setup les fixtures

php bin/console doctrine:fixtures:load

4) Les choses à faire manuellement.
Ajouter le role user manuellement à l'un des users(je sais que c'est possible de le faire via commande mais j'ai pas trouver comment).

5)Chose que je n'ai pas réussi à faire.
1° Forcer un rôle user lorsque l'on se register
2° Ajouter les données du client Http via command dans mon code.

6) Axe d'amélioration
1° Compléter les choses que je n'ai pas réussi à faire.