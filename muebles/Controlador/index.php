<?php
function listaClientes(){
    require_once('../Modelo/class.clientes.php');
    $clientes=new Clientes();
    $lista = $clientes->getClientes();
    require_once('../Vista/header.html');
    require_once('../Vista/listarclientes.php');
}

function formCliente(){
    require_once('../Vista/header.html');
    require_once('../Vista/clientes.php');
}

function aniadirCli(){
    require_once('../Modelo/class.clientes.php');
    $clientes= new Clientes();
    $err = $clientes->insertarCliente($_POST['nom'], $_POST['ape'], $_POST['dir'], $_POST['tlf']);
    if(!$err){
        listaClientes();
    }else{
        formCliente();
    }
}

function modFormCli(){
    require_once('../Modelo/class.clientes.php');
    $clientes=new clientes();
    $datos = $clientes->getCliente($_POST['id']);
    require_once('../Vista/clientes.php');
}

function modCli(){
    $modi=$clientes->modificarCliente($_POST['nom'], $_POST['ape'], $_POST['dir'], $_POST['tlf']);
    modFormCli();
}

if(isset($_REQUEST['action'])){
    $action = strtolower($_REQUEST['action']);

    $action();
}else{
    formCliente();
}
?>