#STI labo 1
##Installation du projet
<span style="color:red">Il vous faut obligatoirement être sur la VM fournie en cours.</span>

1.	Dans un terminal, se rendre dans son home : cd ~
2.	A l’aide de git, télécharger le repo du projet : git clone https://github.com/marom17/STI-labo01
3.	Se rendre dans le dossier du projet : cd STI-labo01
4.	Puis lancer le script d’installation en sudo : sudo ./install.sh
5.	Si install.sh n’est pas en mode exécution, le rendre exécutable
6.	Lancer le serveur httpd s’il n’est pas encore activé : sudo systemctl start httpd
7.	Vous pouvez maintenant accéder au site : http://localhost/index.php

**Remarque** : si vous mettez la database à un autre endroits que celui par défaut, il vous faut modifier le  fichier include/fonction.php et mettre le lien vers le nouvel endroit.
