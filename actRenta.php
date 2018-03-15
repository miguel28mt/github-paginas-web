<?php
    include_once("Utilerias/database_utilerias.php");
    $id =isset ($_REQUEST['idRenta'])?$_REQUEST['idRenta']:0;
    $fol = $_REQUEST['folio'];
    $fec = $_REQUEST['fecha'];
    $edo = $_REQUEST['Estado']; 
    $idu = $_REQUEST['idUsu']; 
    $ida = $_REQUEST['idAuto']; 
    $bot = $_REQUEST['boton'];
    $res = 0;
    if ($bot == "Agregar")
    {
        $res = agregarRenta($fol,$fec,$edo,$idu,$ida);
    }
    if ($bot == "Actualizar")
    {
        $res = actualizaRenta($id,$fol,$fec,$edo,$idu,$ida);
    }
    if ($bot == "Borrar")
    {
        $res = borraRenta($id);
    }
    print $res;
///header("Location:Marca.php")
