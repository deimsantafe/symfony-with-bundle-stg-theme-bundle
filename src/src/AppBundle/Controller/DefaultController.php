<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {
    
    /**
     * Renderiza la vista demo del theme bootstrap del stgtheme bundle como default
     * 
     * @Route("/", name="homepage")
     */
    public function indexThemeAction(Request $request) {
        return $this->render('@STGTheme/Default/base.html.twig');
    }
    
    
    /**
     * Renderiza la vista demo del theme bootstrap del stgtheme bundle
     * 
     * @Route("/bootstrap-theme", name="bootstrap-theme")
     */
    public function bootstrapThemeAction(Request $request) {
        return $this->render('@STGTheme/Default/base.html.twig');
    }

    /**
     * Renderiza la vista demo del theme materialize del stgtheme bundle
     * 
     * @Route("/materialize-theme", name="materialize-theme")
     */
    public function materializeThemeAction(Request $request) {
        return $this->render('@STGTheme/Default/baseMaterializecss.html.twig');
    }

}
