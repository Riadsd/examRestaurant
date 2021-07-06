<?php 

namespace Controllers;


class Plat extends Controller
{


    protected $modelName =  \Model\Plat::class;


    public function supprApi()
    {

                            $plat_id = null;

                            if(!empty($_POST['id']) && ctype_digit($_POST['id'])){

                                $plat_id = $_POST['id'];
                        
                        }
                            if(!$plat_id){
                        
                                die("il faut entrer un id valide en paramtre dans l'url");
                            }
                        
                            echo"salut c'est bon";
                        
                        //Trouve  la plat par l'ID
                        

                        
                        $plat =  $this->model->find($plat_id, $this->modelName);
                        
                        //si le plat n'existe pas
                        if(!$plat){
                            die("ce plat est inexistante");
                        }
                        
                        //Fonction supprimer un plat
                        $this->model->delete($plat_id , $this->modelName);
                        
                        //faire un header vers index.php  (une redirection)

                        header('Access-Control-Allow-Origin: *');

                        echo json_encode("ok bien supprimer");

    


    }





}