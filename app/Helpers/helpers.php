<?php
header('Access-Control-Allow-Origin: *');
use App\Model\A_Allergique;
use App\Model\A_Chirugicau;
use App\Model\A_Familiau;
use App\Model\A_Gynecologique;
use App\Model\A_Imunologique;
use App\Model\A_Medicamenteu;
use App\Model\A_Medicau;
use App\Model\A_Obstetricau;
use App\Model\A_Vaccinau;
use App\Model\Mode_Vie;
use App\Model\Service;
if(!function_exists('verifier')){
    function verifier(){
      header('Content-Type: text/html; charset=UTF-8');
     
       if(isset($_POST['service_name']) && isset($_POST['examen_name']))
       {
            if($_POST['examen_name']  == "Complémentaire"  && $_POST['service_name'] =="Gynecologie")
            {
              header("location:http://localhost:8000/examen_complementaire");

             }
           elseif($_POST['examen_name']  == "Complémentaire"  && $_POST['service_name'] =="Sénologie")
           {
              header("location:http://localhost:8000/examen_complementaire");

           }
           elseif($_POST['examen_name'] == "Physique"  &&  $_POST['service_name'] =="Gynécologie")
           {
             header("location:http://localhost:8000/examen_physique_gynecologie");
           }
           elseif($_POST['examen_name']  == "Physique"  && $_POST['service_name'] =="Sénologie")
           {
             echo $_POST['service_nom'];
           }
           else{
               header("location:http://localhost:8000/acces_laboratoire");
           }
       }
    }
}
verifier();
if(!function_exists('getId'))
{
  function getId($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Allergique::where('patient_id',$patient_id)->first())
        {
           $instance = A_Allergique::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdChirugie'))
{
  function getIdChirugie($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Chirugicau::where('patient_id',$patient_id)->first())
        {
           $instance = A_Chirugicau::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdFamiliaux'))
{
  function getIdFamiliaux($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Familiau::where('patient_id',$patient_id)->first())
        {
           $instance = A_Familiau::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdGynecologique'))
{
  function getIdGynecologique($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Gynecologique::where('patient_id',$patient_id)->first())
        {
           $instance = A_Gynecologique::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdImmunologique'))
{
  function getIdImmunologique($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Imunologique::where('patient_id',$patient_id)->first())
        {
           $instance = A_Imunologique::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdMedicamenteux'))
{
  function getIdMedicamenteux($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Medicamenteu::where('patient_id',$patient_id)->first())
        {
           $instance = A_Medicamenteu::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdMedicaux'))
{
  function getIdMedicaux($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Medicau::where('patient_id',$patient_id)->first())
        {
           $instance = A_Medicau::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdObstetricaux'))
{
  function getIdObstetricaux($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Obstetricau::where('patient_id',$patient_id)->first())
        {
           $instance = A_Obstetricau::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdVaccinaux'))
{
  function getIdVaccinaux($patient_id)
  {
    if($patient_id > 0)
    {
        if(A_Vaccinau::where('patient_id',$patient_id)->first())
        {
           $instance = A_Vaccinau::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
if(!function_exists('getIdModeVie'))
{
  function getIdModeVie($patient_id)
  {
    if($patient_id > 0)
    {
        if(Mode_Vie::where('patient_id',$patient_id)->first())
        {
           $instance = Mode_Vie::where('patient_id',$patient_id)->first();
           return $instance->id;
        } 
        else
        {
          $instance = "aucun";
          return $instance;
        }
    }  
  } 
}
// if(isset($_POST['query']))
// {
//   header('Content-Type: text/html; charset=UTF-8');    
// try
// {
    
//      $bdd = new PDO('mysql:host=localhost;dbname=medecine','root','');
//      $query = "SELECT * FROM services WHERE Nom LIKE '%".$_POST['query']."%' ";
//      $cmd = $bdd->prepare($query);
//      $cmd->execute();
//      $num = $cmd->rowCount();
//      $output = '';
//      $output = '<ul class="list-unstyled">';
//      if($num > 0)
//      {
//         while($row = $cmd->fetch(PDO::FETCH_ASSOC))
//         {
//            $output .= '<li>'.$row['Nom'].'</li>';
//         }
//      }
//      else
//      {
//         $output .= '<li>Aucun Resultat</li>';
//      }
//      $output .= '</ul>';
//      echo $output;
// }
// catch(Exception $e)
// {
//   die('Erreur'.getMessage());
// }

// }
// if(isset($_GET['query']))
// {
   
//   try
//   {
//     $bdd = new PDO('mysql:host=localhost;dbname=medecine','root','');
//     $query = "SELECT * FROM services WHERE Nom ='".$_GET['query']."' ";
//     $cmd = $bdd->prepare($query);
//     $cmd->execute();
//     $num = $cmd->rowCount();
//     $output = '';
//     $output = '<tbody><thead><tr><th data-field="id">Id</th><th data-field="NomService" data-editable="false">Nom Du Service</th><th data-field="Description" data-editable="false">Description</th><th data-field="Role" data-editable="false">Role</th><th data-field="modifier" data-editable="false">Modifier</th><th data-field="supprimer" data-editable="false">Supprimer</th></tr></thead><tbody><tr>';
//     if($num > 0)
//     {
//        while($row = $cmd->fetch(PDO::FETCH_ASSOC))
//        {
//           $output .= '<td>'.$row['id'].'</td><td>'.$row['Nom'].'</td><td>'.$row['Description'].'</td><td>'.$row['Role'].'</td><td><a href="services/'.$row['id'].'/edit"><img src="img/logo/edit.png" alt=""></a></td><td><a href="services/'.$row['id'].'/destroy"><img src="img/logo/delete.png" data-method="DELETE" data-confirm="Etes vous sure?" alt=""></a></td>';
//        }
//     }
//     else
//     {
//        $output .= '<td>Aucun Resultat</td>';
//     }
//     $output .= '</tr></tbody>';
//     echo $output;
//   }
//   catch(EXCEPTION $e)
//   {
//     die('Erreur'.$e->getMessage());
//   }

// }

