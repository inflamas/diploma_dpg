<?php
namespace Controllers\Backend;

use Controllers\AbstractBase;
use Entities\Travel;

class ReiseController extends AbstractBase
{
    public function indexAction(){
        $regionsRepository = $this->em->getRepository('Entities\Region');
        $regions = $regionsRepository->findAll();
        $this->addContext('regions', $regions);

        $this->setTemplate('form.html');
    }
    
    public function saveAction(){
        $travel = new Travel();
        
        $region = $this->em->getRepository('Entities\Region')->findById($_POST['region']);
        
        //var_dump($region);die();
        $travel->setRegion($region[0]);
        $travel->setTitle($_POST['title']);
        
        $this->em->persist($travel);
        $this->em->flush();
        
        
    }
}
