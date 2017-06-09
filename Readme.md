#HACKATHON Wild Code Shool
##Best Socket Election web application

In this project, we will build a web application for the Wild Code School Inauguration.
This app will allow wild students to take pictures of guests' sockets and stock these photos in a BDD.

Then, people will access to the public web application in order to vote for the best sockets of the party.
Some rules for this :
- 3 votes max
- no vote for there own socket 


##INSTALL

Cloner le dépot, télécharger les dépendances et créer la BDD

    git clone git@github.com:WildCodeSchool/lyon_socks_contest.git chaussettes
    cd chaussettes
    composer install
    mysql -u root -p < mysqlconfig.txt

Configurer la BDD : Edition du fichier src/bdd.php
    
    $user = "root";
    $password = "root";
    $host = "localhost";
    $db = "socketparty";

