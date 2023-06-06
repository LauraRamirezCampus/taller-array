<?php
    $planetas= ["sol"=>0,
            "mercurio"=>1,
                "venus"=>2,
                "tierra"=>3,
                "marte"=>4,
                "jupiter"=>5,
                "saturno"=>6,
                "urano"=>7,
                "neptuno"=>8];
    
    
    if (in_array($_POST['nPlaneta'],$planetas)){
        $respuesta = "si existe ".array_search($_POST['nPlaneta'],$planetas) ;
    }else{
        $respuesta = "no existe";
    };
    

//     /**
//      * 2 no
//      */

//      /**
//       * 3
//       */
      
//       $planetas3= ["mercurio"=>false,
//       "venus"=>false,
//       "tierra"=>true,
//       "marte"=>true,
//       "jupiter"=>false,
//       "saturno"=>true,
//       "urano"=>false,
//       "neptuno"=>false];

//       function true($pla){
//         if($pla==true);
//         return $pla;
//       };


//     $habitados=(array_filter($planetas3,"true"));
      
//       print_r($habitados); 
      
//     /**
//      * 4 esta incompleto
//      */
    
//      $planetasg=["mercurio"=>2.78,
//      "venus"=>8.87,
//      "tierra"=>9.78,
//      "marte"=>3.72,
//      "jupiter"=>22.88,
//      "saturno"=>9.05,
//      "urano"=>7.77,
//      "neptuno"=>11];
      

// /**
//  * 5 incompleto
//  */
// $navesm=["nave1"=>100,
// "nave2"=>150,
// "nave3"=>300,
// "nave4"=>450,
// ];

// $navesn=array_flip($navesm);
// print_r($navesn);

// /**
//  * 6
//  */
// $planetas6=["mercurio","venus","tierra","marte","jupiter","saturno","urano","neptuno"];
// if (in_array("venus",$planetas6)){
//     echo"si existe venus";
// }else{
//     echo"no existe";
// };

// /**
//  * 7
//  */
// $naves7=["nave1",
// "nave2",
// "nave3",
// "nave4",
// ];
// if (in_array("nave1",$naves7)){
//     echo"si existe nave1";
// }else{
//     echo"no existe";
// };

// /**
//  * 8
//  */
// $planetas8=["mercurio","venus","tierra","marte","jupiter","saturno","urano","neptuno"];
// echo"<br>";
// print_r(array_rand($planetas));

// /**
//  * 9
//  */


//  $alienigenas=["marsay","ventus","jupis","saturti"];
 
?>



 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="d-flex justify-content-center align-items-center " style = "height: 800px;">
<form method="POST" class="w-25">
  <div class="mb-3 border border-success rounded p-5 "  >
    <label for="exampleInputEmail1" class="form-label">numero de planeta</label>
    <input type="text" class="form-control" name="nPlaneta" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="numero">
    <input type="submit" class="btn btn-info" value="Enviar">
  </div>
</form><br><br>
<div class="mb-3 border border-success rounded p-5"> 
    <h3><?php echo $respuesta; ?></h3>
</div>
</body>
</html>