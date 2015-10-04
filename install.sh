#!/bin/bash

DESTINATION="/var/www/html"
APACHE_USER="apache"

# To works correctly, this script must be run with root privilege.
if [[ $EUID -ne 0 ]]
then
	echo "You need to be root to run this script!" >&2
	exit 1
fi

if [[ -e "$DESTINATION" ]]
then
	echo "Install in $DESTINATION" >&2

else
	echo "The apache server do not seems to use the default directory!" >&2
	exit 1
fi

echo "Please, ensure that you are running this script from the STI-labo01 directory!" >&2
echo "Ctrl-C to terminate" >&2
echo -n "3 " >&2
sleep 1
echo -n "2 " >&2
sleep 1
echo "1" >&2
sleep 1

echo -n "Copy files... " >&2
cp -r site/* "$DESTINATION/"
echo "Done" >&2

cd "$DESTINATION"

echo -n "Change group... " >&2
chgrp -R "$APACHE_USER" *
echo "Done" >&2

echo "Instalation finished!" >&2
echo "Please start your apache server." >&2
echo "You can then open your browser to url http://localhost/index.php to chech the website." >&2
