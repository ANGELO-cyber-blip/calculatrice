#validation.php
  <?php
    /*Longueur et largeur doivent etre numeric(entier , reel)
    Longueur positif 
    Largeur positif 
    Longueur> Largeur
    */


    //Longueur et Largeur doivent etre numeric(entier, reel)
    function is_number($nombre, $errorMessage= "veuiller saisir un nombre"){
        if(is_numeric($nombre)){
            return null;
        }else{
            return $errorMessage;
        }
    }

    /*
        Longueur positif
        Largeur positif

    */
    function is_positif($nombre,$errorMessage="veuiller saisir un nombre")
        //is_number($nombre)==true => is_number($nombre)
        $result =is_number($nombre);
                if($result){
                    if($nombre>0){
                        return true;
                    }else{
                        return $errorMessage;

                    }

                }else{
                    return $result;
                }
    

    /**
     *  Longueur > Largeur
     */
    //compare()
                function compare($nbre1,$nbre2,$errorMessage="Longueur doit etre superieur à largeur"){
                    $result1=is_positif($nbre1);
                    $result2=is_positif($nbre2);
                    $error=[];
                    if($result1){
                        $errors['longueur']=$result1;
                        if($result2){
                            $errors['largeur']=$result2;
                        }
                        if(count($error)==0){
                            if($nbre>nbre2){
                                return true;

                            }else{
                                $error['all']=$errorMessage;
                            }
                       

                        }
                        
                        return $error;
                    }
                }
                

?>
