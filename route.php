<?php
  define('ACTION', 0);
  define('PARAMS', 1);

  include_once 'config/ConfigApp.php';
  include_once 'model/Model.php';
  include_once 'view/View.php';
  include_once 'controller/Controller.php';
  include_once 'controller/SecuredController.php';
  include_once 'controller/LoginController.php';
  include_once 'controller/UserStaticController.php';
  include_once 'controller/ProductoController.php';
  include_once 'controller/CategoriaController.php';
  include_once 'controller/AdminStaticController.php';
  include_once 'controller/AdminProductoController.php';
  include_once 'controller/AdminCategoriaController.php';
  include_once 'controller/AdminUserController.php';


  function parseURL($url)
  {
    $urlExploded = explode('/', $url);
    $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
    $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
    return $arrayReturn;
  }

  if(isset($_GET['action'])){
     $urlData = parseURL($_GET['action']);
      $action = $urlData[ConfigApp::$ACTION];
      if(array_key_exists($action,ConfigApp::$ACTIONS)){
          $params = $urlData[ConfigApp::$PARAMS];
          $action = explode('#',ConfigApp::$ACTIONS[$action]);
          $controller =  new $action[0]();
          $metodo = $action[1];
          if(isset($params) &&  $params != null){
              echo $controller->$metodo($params);
          }
          else{
              echo $controller->$metodo();
          }
      }
  }

 ?>
