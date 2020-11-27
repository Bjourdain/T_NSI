## HTTP

### *Définition*

HTTP est un protocole de communication permettant à un client web d'interroger un serveur web.

### Requêtes HTTP

HTTP repose un semble de requêtes : GET, POST, HEAD... Chacun permettant une demande particulière.

### Exemple de clients HTTP

- Les navigateurs web (Firefox, Chrome, Chromium, Internet Explorer, Safari...)
- Les clients en ligne de commande (wget, cURL...)
- Les clients programmés spécifiquement (la plupart des langages de programmation permettent de faire des requêtes HTTP)

### Exemple de serveurs HTTP

- Apache
- Nginx
- IIS
- ...

## HTTP GET

### *Fondamental*

La requête GET est la requête de base en HTTP, elle permet de demander une ressource au serveur.

C'est la requête que formule un navigateur web quand on tape une adresse web  dans la barre d'adresse ou que l'on clic sur un lien .

### Dans un navigateur web

## Requête HTTP avec envoi de données au serveur

### Envoi de données au serveur avec GET

Il est possible d'envoyer des données au serveur avec la requête GET, on  ajoute pour cela à l'URL demandé des couples clé-valeur en suivant la  syntaxe : `/adresse/de/la/ressource?cle1=valeur1&cle2=valeur2...`.

### Dans un navigateur web

*http://monsite.fr/mapage.php?login=moi*

### Envoi de données au serveur avec POST

On préfère en général la méthode POST pour envoyer des données ; les  couples clé-valeur sont alors envoyé dans le corps de la requête HTTP.

### Dans un navigateur web

```
login=moi&password=monsecret
POST /mapage.php
Host: monsite.fr
login=moi&password=monsecret
```

### GET vs POST

- La taille des données envoyées au serveur est limitée avec GET. Les données envoyées sont visibles dans l'URL.
- La taille des données envoyées au serveur n'est pas limitée avec POST. Les données envoyées ne sont pas visibles dans l'URL, elles peuvent être  chiffrées en HTTPS.

```
login=moi&password=monsecret
POST /mapage.php
Host: monsite.fr
login=moi&password=monsecret
```



## Traiter les requêtes HTTP avec un serveur PHP

### *Rappel*

Lorsqu'une requête HTTP envoie des données au serveur web, par exemple grâce à un lien `` ou un formulaire `` en HTML, les données envoyées doivent être traitées par un programme que l'on écrit spécifiquement sur le serveur.

### *Fondamental*

Un serveur web/PHP peut gérer les données envoyées par une requête HTTP.

Lors de son chargement une page PHP contient un tableau de variables pour  les données envoyées par la méthode GET et un autre pour les données  envoyées par POST.

### *Syntaxe*

On accède à ses données en utilisant la syntaxe :

```php
$_GET["var1"]
$_GET["var2"]
```

ou 

```php
$_POST["var1"]
$_POST["var2"]
```

où `var1` et `var2` sont des noms de données dans la requête HTTP (par exemple le nom des  contrôles dans le formulaire HTML à l'origine de la requête).

### *Exemple*

```php
?>
<?php
echo 'Hello ' . $_POST["name"] ;
?>
```



## Requêtes HTTP avec une page web

## Requête GET sans envoi de données (balise <a>)

Pour faire une requête GET en HTML, il suffit de faire un lien entre deux pages, avec la balise HTML `<a>`.

### *Exemple*

```html
<a href="page.html">Ceci est mon lien</a>
<a href="page.html">Ceci est mon lien</a>
```

Lorsque l'utilisateur clique sur le lien `Ceci est mon lien` le navigateur envoi une requête GET pour récupérer `page.html` au serveur.



## Requête GET avec envoi de données par l'URL (balise <a>)

### *Rappel*

Il est possible d'envoyer des données lors de la requête GET générée avec un lien `<a>`.

### *Exemple*

```html
<a href="page.php?d=mydata&x=otherdata">Ceci est mon lien</a>
<a href="page.php?d=mydata&x=otherdata">Ceci est mon lien</a>
```

Lorsque l'utilisateur clique sur le lien `Ceci est mon lien` le navigateur envoi une requête GET pour récupérer `page.php` au serveur et envoi les données `d` et `x` avec leurs valeurs respectives.

### *Attention*

Les données qui sont envoyées sur le serveur doivent être traitées par une couche web applicative, par exemple en PHP.

## Requête GET ou POST par formulaire HTML (balise <form>)

### Formulaire

On appelle formulaire une interface permettant à un utilisateur humaine de saisir des données en vue dans une application informatique.

### Contrôle

On appelle contrôle un élément d'un formulaire permettant d'effectuer une action : saisir une donnée, exécuter une requête...

La balise `form` du langage HTML permet de :

- créer un formulaire avec des contrôles,
- envoyer le contenu du formulaire à un serveur web grâce à une requête GET ou POST.

### Contrôle en HTML

- étiquette
- cases à cocher
-  champs de saisie
-  boutons radio
-  listes à choix multiples
- ...

### *Exemple*Formulaire

<iframe src="https://stph.scenari-community.org/bdd/lap4/res/form.eWeb/index.html" class="eWebFrame " style="width:100%;height:100%;" title="Site web embarqué" frameborder="0"></iframe>
Exemple de formulaire HTML

```php+HTML
</form>
<form metho="get" action="test.php">
	<p><label>Nom</label> <input type="text" name="nom"></p>
	<p><label>Prénom</label> <input type="text" name="prenom"></p>
	<p><label>Age</label> <input type="text" name="age"></p>
	<p><input type="submit"></p>		
</form>
```