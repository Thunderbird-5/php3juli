<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
 
/**
 * UserModel
 * 
 * Beperkt op dit moment tot alleen het selecteren van de gebruikers.
 * 
 */
class UserModel extends Database
{    
    /**
     * getUsers
     *
     * @param  int   $limit (volgens de Database class)
     * @return mixed array Resultaat als associatieve array (als het goed gaat) 
     *               false wanneer het niet goed gaat
     */
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM users ORDER BY user_id ASC LIMIT ?", ["i", $limit]);
    }
}