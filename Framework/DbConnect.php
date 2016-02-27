<?php
/**
 * Classe de gestion des paramètres de configuration.
 * Inspirée du SimpleFramework de Frédéric Guillot
 * (https://github.com/fguillot/simpleFramework)
 *
 * @author Baptiste Pesquet
 */
class DbConnect
{
    /** Tableau des paramètres de configuration */
    private static $parameters;

    /**
     * Renvoie la valeur d'un paramètre de configuration
     * 
     * @param string $nom Nom du paramètre
     * @param string $valeurParDefaut Valeur à renvoyer par défaut
     * @return string Valeur du paramètre
     */
    public static function get($nom, $valeurParDefaut = null)
    {
        if (isset(self::getParameters()[$nom])) {
            $valeur = self::getParameters()[$nom];
        }
        else {
            $valeur = $valeurParDefaut;
        }
        return $valeur;
    }

    /**
     * Renvoie le tableau des paramètres en le chargeant au besoin depuis un file de configuration.
     * Les files de configuration recherchés sont Config/dev.ini et Config/prod.ini (dans cet ordre)
     * 
     * @return array Tableau des paramètres
     * @throws Exception Si aucun file de configuration n'est trouvé
     */
    private static function getParameters()
    {
        if (self::$parameters == null) {
            $cheminFile = "Config/dev.ini";
            if (!file_exists($cheminFile)) {
                $cheminFile = "Config/prod.ini";
            }
            if (!file_exists($cheminFile)) {
                throw new Exception("Aucun file de configuration trouvé");
            }
            else {
                self::$parameters = parse_ini_file($cheminFile);
            }
        }
        return self::$parameters;
    }

}

