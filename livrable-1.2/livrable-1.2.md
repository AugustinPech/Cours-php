### les fichiers .php
Les fichiers de `/var/www/phpdebase` sont clonés dans le repos

### les fichiers .local
les ficheirs de `/etc/nginx/sites-available` sont clonés dans le repos
### les fichiers .php
Les fichiers de `/var/www/phpdebase` sont clonés dans le repos

### les fichiers .local
les ficheirs de `/etc/nginx/sites-available` sont clonés dans le repos

### les commandes pour ouvrir un nouveau vhost

- Pour créer un nouveau vHost il faut créer un fichier `newhost.local` à l'adresse `/etc/nginx/sites-available`
	- commande 1 :
`cd /etc/nginx/sites-available`
	 - commande 2 :
`sudo touch newhost.local`

- Ensuite il faut y placer du contenu :
	 - commande : 
`sudo vi newhost.local`
	- le contenu (les parties en  <span style="color:red">rouge </span> sont les points à modifier): 
	`server {`
		`listen 80;`
		`server_name` <span style="color:red">newhost </span>`.local;
		index index.php;`
		`root /var/www/` <span style="color:red">newhost </span>`;`
		`location ~ \.php$ {`
			`include snippets/fastcgi-php.conf;`
			`fastcgi_pass unix:/var/run/php/php` <span style="color:red">8.3 </span>`-fpm.sock;`
		`}`
	`}`

- à l'adresse `/var/www/newhost` il faut créer un fichier `index.php`
	- commande 1 :
	`cd /var/www/newhost`
	- commande 2 :
	`sudo touch index.php`
- Ensuite il faut y placer du contenu :
 	- commande : 
`sudo vi index.php`
	- ici le contenu est une ligne de texte pour tester.

- il faut ajouter une ligne au fichier `etc/hosts` 
	- commande 1 :
	`sudo vi /etc/hosts`
	- il faut rajouter la ligne `127.0.0.1	`<span style="color:red">newhost</span>`.local`
