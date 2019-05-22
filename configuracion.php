<?php
session_start();
  
class Siscco{};
 
      $itiz= new Siscco();
  
      	$itiz->rootruta 		= "https://github.com/ztrycker16/itiz";
                
                $itiz->assets 		=$itiz->rootruta."/assets";
                    	$itiz->css 		= $itiz->assets."/css";
                        $itiz->img      = $itiz->assets."/img";
                        $itiz->js       = $itiz->assets."/js";
                        $itiz->php      = $itiz->assets."/php";

                $itiz->vendor 		=$itiz->rootruta."/vendor";
                		$itiz->bootstrap 		= $itiz->vendor."/bootstrap/js";
                		$itiz->dataTables 		= $itiz->vendor."/datatables";
                		$itiz->fontawesome 		= $itiz->vendor."/fontawesome-free";
                		$itiz->jquery			= $itiz->vendor."/jquery";
                		$itiz->easing			= $itiz->vendor."/jquery-easing";

                $itiz->view 		=$itiz->rootruta."/view";
                		$itiz->admin 			=$itiz->view."/admin";


  ?>
