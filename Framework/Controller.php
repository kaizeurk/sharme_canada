<?php
require_once 'DbConnect.php';
require_once 'Request.php';
require_once 'View.php';

/**
 * Classe abstraite contrôleur. 
 * Fournit des services communs aux classes contrôleurs dérivées.
 * 
 * @author Baptiste Pesquet
 */
abstract class Controller
{
    /** Action à réaliser */
    private $action;

    /**
     * 
     *  Requête entrante 
     * @var Request
     */
    protected $request;

    /**
     * Définit la requête entrante
     * 
     * @param Request $request Request entrante
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
        $this->getRacine();
    }

    /**
     * Exécute l'action à réaliser.
     * Appelle la méthode portant le même nom que l'action sur l'objet Controller courant
     * 
     * @throws Exception Si l'action n'exist pas dans la classe Controller courante
     */
    public function executeAction($action)
    {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        }
        else {
            $classeController = get_class($this);
            throw new Exception("Action '$action' non définie dans la classe $classeController");
        }
    }

    /**
     * Méthode abstraite correspondant à l'action par défaut
     * Oblige les classes dérivées à implémenter cette action par défaut
     */
    public abstract function index();

    /**
     * Génère la view associée au contrôleur courant
     * 
     * @param array $donneesView Données nécessaires pour la génération de la view
     * @param string $action Action associée à la view (permet à un contrôleur de générer une view pour une action spécifique)
     */
    protected function generateView($donneesView = array(), $action = null)
    {
        // Utilisation de l'action actuelle par défaut
        $actionView = $this->action;
        if ($action != null) {
            // Utilisation de l'action passée en paramètre
            $actionView = $action;
        }
        // Utilisation du nom du contrôleur actuel
        $classeController = get_class($this);
        $controllerView = str_replace("Controller", "", $classeController);

        // Instanciation et génération de la view
        $view = new View($actionView, $controllerView);
        $view->generate($donneesView);
    }

    /**
     * Effectue une redirection vers un contrôleur et une action spécifiques
     * 
     * @param string $controller Contrôleur
     * @param type $action Action Action
     */
    protected function redirect($controller, $action = null)
    {
        $racineWeb = DbConnect::get("racineWeb", "/");
        // Redirection vers l'URL /racine_site/controller/action
        
        ($controller!==null && $controller!=="")?header("Location:" . $racineWeb . $controller . "/" . $action):header("Location:" . $racineWeb . "" . $action);
    }

    /**
     * 
     * @return string
     */
    protected function getRacine()
    {
        $this->racineWeb = DbConnect::get("racineWeb", "/");
    }

}
