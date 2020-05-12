# calculatrice.php
    
      <!DOCTYPE html>
<html lang="en">
    <head>
    
        <title>Title></title>

        <?php
        require_once("./controllers/base.php");
        $errors=[];
        $resultat="";
            if(isset($_POST['btn_submit'])){
                    //Alternances
            //1-champs vides
                define("NBRE1,"nbre3);
                define("NBRE2", "nbre2");

                $errors[]=isEmpty($_POST[NBRE1]);
                $errors[]=isEmpty($_POST[NBRE2],"Nombre2 obligatoire");
                $errors[]=isEmpty($_POST['op'], "veuillez selectionner un operateur");
                //2-pas Numerique
                $errors[]=isNumeric($_POST[NBRE1]);
                $errors[]=isNumeric($_POST[NBRE2]);
                //Nominal
                if(count($errors)==0){
                    $nbre1=$_POST[NBRE1];
                    $nbre1=$_POST[NBRE2];
                    $op=$_POST['op'];
                    $resultat=calculatrice($nbre1,nbre2,$op);

                }


                
            }else{
                $errors[]="Veuillez cliquer sur le bouton";
            }
        ?>



            <!-- Required meta tags -->
            <meta charset="='utf-8">
            <meta name="viewport" content="width=device=width, initial-scale=1 , shrink-to-fit=no";

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
    <body>
        <div class="card m-5">
          <div class="card-body">
            <h4 class="card-title text-center">calculatrice</h4>
          <p class="card-text">
          <div class="col-3"></div>
          <div class="col-6 pl-5"></div>
            <form action="" method="post"></form>

          </div>
        </div>
            <div class="form-group">
              <label for="">Nombre1</label>
              <input type="text" name="nbr1" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
              <label for="">Nombre2</label>
              <input type="text" name="nbr2" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
              <label for="">operateur</label>
              <select class="form-control" name="op" id="">
                <option value="selectionner un operateur"></option>
                <option>Addition</option>
                <option>Division</option>
              </select>
            </div>
            <div class="row"
            <div class="col-12">
            <input name="" id="" class="btn btn-primary" type="button" value="envoie">
            </div>

            <div class="card text-left ml-5">
                <div class="card-body">
                    <h4 class="card-title">resultat:<?=$resultat;?></h4>

                </div>

            </div>


            
    </body>

</html>
