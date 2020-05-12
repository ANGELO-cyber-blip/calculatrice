#rectangle.php
     <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1 , shrink-to-fit=no";>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <form>
        <div class="form-group row">
          <label for="inputName" class="col-sm-1-12 col-form-label1 ">longueur</label>
         <div>
          <input type="text" class="form-control" name="longueur" id="inputName" aria-describedby="helpId" placeholder="">
          </div>
        </div>
    
    <div class="form-group row">
          <label for="inputName" class="col-sm-1-12 col-form-label1 ">largeur</label>
          <div>
          <input type="text" class="form-control" name="largeur" id="inputName" aria-describedby="helpId" placeholder="">
          </div>
        </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">calculer</button>
                </div>
            </div>  
         </form>
    </div>
<?php
    if ( isset($_POST['btn_submit'])){
   echo <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                demi-perimetre 
            </li>
            <li class="nav-item">
                perimetre 
            </li>
            <li class="nav-item">
                surface 
            </li>
            <li class="nav-item">
                Diagonale
            </li>
        </ul>

    </div>;
    }  
    
    
?>
    <!--  option  -->



</body>
 </html>
