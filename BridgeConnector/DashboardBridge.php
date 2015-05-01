<?php

namespace Kamran\DashboardBundle\BridgeConnector;


class DashboardBridge{

    public function setLayout($builder){

        //add blocks in region
        $builder->addBlock('stackmenu','stackmenu',array(),"stackmenu.html.twig");
        $builder->addBlock('logocontainer','logocontainer',array(),"logocontainer.html.twig");
        $builder->addBlock('innermenus','innermenus',array(),"innermenus.html.twig");
        $builder->addBlock('topbar','topbar',array(),"topbar.html.twig");
        //inline blocks , that will directly used in template file
        //$builder->addInlineBlock();

    }



}