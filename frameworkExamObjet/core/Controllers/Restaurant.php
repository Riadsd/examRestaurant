<?php 

namespace Controllers;


class Restaurant extends Controller
{

    protected $modelName = \Model\Restaurant::class;




    public function indexApi() {

        $mesRestaurants = $this->model->findAll($this->modelName);

        header('Access-Control-Allow-Origin: *');
        
     echo json_encode($mesRestaurants);


    }


public function showApi()
{

            $restaurants = $this->model->findAll($this->modelName);


            $restaurant_id = null;

            if(!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    
                $restaurant_id = $_GET['id'];
            }
    
            if(!$restaurant_id){
    
            die("il faut absolument entrer un id  dans l'url pour que le script fonctionne");
            }
    
    //Fonction qui trouve le gateau par l'id
    
            $restaurant =  $this->model->find($restaurant_id , $this->modelName);
    
            $model = new \Model\Plat();
    
            $mesPlats = $model->findAllByRestaurant($restaurant_id , \Model\Plat::class);
    
            header('Access-Control-Allow-Origin: *');
    
            echo json_encode(
    
                    [
                        'restaurant' => $restaurant,
                        'plats' => $mesPlats,
                    ]
                );

    





}







}