# aztrek

Après git clone :

1. Générer la base de données (Forward Engineer)
2. Créer le fichier config/parameters.php :
    define("DB_HOST", "localhost");
    define("DB_HOST", "ecolidaire");
    define("DB_HOST", "root");
    define("DB_HOST", "root");

    define("SITE_URL", "http://localhost:8888/cours-dc9/aztrek/");
    define("ADMIN_URL", SITE_URL . "admin/");

3. Installer les packages npm install dans l'admin :
    cd admin/
    npm install