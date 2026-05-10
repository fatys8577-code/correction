### CCP Tech Club - Exercice laravel

## Questions de reflexion

# 1. pourquoi utilise-t-on des routes nommées plutôt que des URLS en dur?
 si l'URL change, on modifie uniquement 'web.php' et les vues se mettent à jour automatiquement via 'route('nom')'.

# 2. que se passe-t-il si @section ne correspond pas au @yield ?
 si @section ne correspond pas au @yield ,alors la section est ignorée et rien ne s'affiche à cet endroit, sans erreur.

# 3. pourquoi placer le menu dans un partial ?
 on place le menu dans un partial pour éviter la duplication de code. Une seule modification dans 'nav.blade.php' met à jour la navigation sur toutes les pages.  