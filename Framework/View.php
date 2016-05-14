<?php
require_once 'DbConnect.php';

/**
 * Classe modélisant une view.
 *
 * @author Baptiste Pesquet
 */
class View
{
    /**
     * Nom du file associé à la view 
     */
    private $file;

    /**
     * Titre de la view (défini dans le file view) 
     * @var string
     */
    private $title;
    
    /**
     * @var string
     */
    private  $racineWeb;


    /**
     *
     * @var string
     */
    private  $racineWebFront;
    
    /**
     * 
     * @var string
     */
    private $controller;

    /**
     * Constructeur
     * 
     * @param string $action Action à laquelle la view est associée
     * @param string $controller Nom du contrôleur auquel la view est associée
     */
    public function __construct($action, $controller = "")
    {
        // Détermination du nom du file view à partir de l'action et du constructeur
        // La convention de nommage des files views est : View/<$controller>/<$action>.php
        $file = "View/";
        $this->controller = $controller;
        $this->getRacine();
        if ($controller != "") {
            $file = $file . $controller . "/";
        }
        $this->file = $file . $action . ".php";
    }

    /**
     * Génère et affiche la view
     * 
     * @param array $donnees Données nécessaires à la génération de la view
     */
    public function generate($donnees)
    {
        // Génération de la partie spécifique de la view
        $contenu = $this->generateFile($this->file, $donnees);
        // On définit une variable locale accessible par la view pour la racine Web
        // Il s'agit du chemin vers le site sur le serveur Web
        // Nécessaire pour les URI de type controller/action/id
        $racineWeb = DbConnect::get("racineWeb", "/");
        // Génération du gabarit commun utilisant la partie spécifique
        $view = $this->generateFile('View/layout.php',
                array('title' => $this->title, 'contenu' => $contenu, 'racineWeb' => $racineWeb, 'racineWebFront'=>$this->racineWebFront, 'controller'=>$this->controller));
        // Renvoi de la view générée au navigateur
        echo $view;
    }

    /**
     * Génère un file view et renvoie le résultat produit
     * 
     * @param string $file Chemin du file view à générer
     * @param array $donnees Données nécessaires à la génération de la view
     * @return string Résultat de la génération de la view
     * @throws Exception Si le file view est introuvable
     */
    private function generateFile($file, $donnees)
    {
        if (file_exists($file)) {
            // Rend les éléments du tableau $donnees accessibles dans la view
            extract($donnees);
            // Démarrage de la temporisation de sortie
            ob_start();
            // Inclut le file view
            // Son résultat est placé dans le tampon de sortie
            require $file;
            // Arrêt de la temporisation et renvoi du tampon de sortie
            return ob_get_clean();
        }
        else {
            throw new Exception("File '$file' introuvable");
        }
    }

    /**
     * Nettoie une valeur insérée dans une page HTML
     * Doit être utilisée à chaque insertion de données dynamique dans une view
     * Permet d'éviter les problèmes d'exécution de code indésirable (XSS) dans les views générées
     * 
     * @param string $valeur Valeur à clean
     * @return string Valeur nettoyée
     */
    private function clean($valeur)
    {
        // Convertit les caractères spéciaux en entités HTML
        return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
    }

    /**
     * @return string
     */
    private function getRacine()
    {
        $this->racineWeb      = DbConnect::get("racineWeb", "/");
        $this->racineWebFront = DbConnect::get("racineWebFront", "/");
    }

}
