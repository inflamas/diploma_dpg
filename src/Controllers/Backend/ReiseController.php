<?php
namespace Controllers\Backend;

use Controllers\AbstractBase;
use Entities\Travel;

class ReiseController extends AbstractBase {

    public function showCreateFormAction(){
        $regionsRepository = $this->em->getRepository('Entities\Region');
        $regions = $regionsRepository->findAll();
        $this->addContext('regions', $regions);

        $this->setTemplate('form.html');
    }
    
    public function saveAction() {
        $travel = new Travel();
                
        $region = $this->em->getRepository('Entities\Region')->findById($_POST['region']);
        
        $travel->setRegion($region[0]);
        $travel->setTitle($_POST['title']);
        $startDate = new \DateTime($_POST['startDate']);
        $travel->setStarDate($startDate);
        
        $endDate = new \DateTime($_POST['endDate']);
        $travel->setEndDate($endDate);
        
        $this->em->persist($travel);
        $this->em->flush();
        
        
    }

    public function listAllTravelAction() {
        $travels = $this->em->getRepository('Entities\Travel')->findAll();

        $this->addContext('travels', $travels);
        $this->setTemplate('listTravels.html');
    }

    public function deleteAction() {
        $id = $_GET['id'];
        $travel= $this->em->getRepository('Entities\Travel')->find($id);

        $this->em->remove($travel);
        $this->em->flush();
    }

    public function editAction() {
        $id = $_GET['id'];

    }
}
