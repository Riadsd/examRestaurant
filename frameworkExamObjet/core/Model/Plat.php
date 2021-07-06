<?php 

namespace Model;

use PDO ; 

class Plat extends Model
{


    protected $table = "plats";



    public function findAllByRestaurant(int $restaurant_id , string $className)
    {


        $mesPlats = $this->pdo->prepare("SELECT * FROM plats WHERE restaurant_id =:restaurant_id");

        $mesPlats->execute(['restaurant_id' => $restaurant_id]);

        $mesPlatsParRestaurant = $mesPlats->fetchAll(PDO::FETCH_CLASS, $className);
    
        return $mesPlatsParRestaurant ;


    }








}