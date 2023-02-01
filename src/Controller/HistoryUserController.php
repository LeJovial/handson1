<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//déclaration des entités
use App\Entity\User;
use App\Entity\History;
use App\Entity\Analysis;

class HistoryUserController extends AbstractController
{

    public function getLesAnalyseUser(User $user)
    {
        $db = $this->bddConnexion();    

        $sqlAna="Select HISTORY.date as date, ANALYSIS.url as url, ANALYSIS.score as score, ANALYSIS.id as id, ANALYSIS.ecoindex as eco from HISTORY inner join ANALYSIS on HISTORY.analysis_id=ANALYSIS.id where HISTORY.user_id=".$user->getId();
        $query = $db->prepare($sqlAna);
        $query->execute();
        $analyses = $query->fetchAll();
        return $analyses;
    }
    public function VoiranalyseAction(User $user)
    {
        $lesanalyses=$this->getLesAnalyseUser($user);
        return $this->render('user/history.html.twig', [

            'analyses' => $lesanalyses,
        ]);
    }
    public function AnalyseAction (Analyse $analyse)
    {
        $db = $this->bddConnexion();  

        return $analyses;
        $this->render('voir details analyse', [

            'id' =>$analyse->getId(),
        ]);
    }
    public function SuppranalyseAction (Analyse $analyse)
    {
		$db = $this->bddConnexion();
        $em = $this->getDoctrine()->getManager();

        $em = $this->getDoctrine()->getManager();
        $em->remove($analyse);
        $em->flush();

        return $this->redirect($this->generateUrl('Voiranalyse'));
    }
}
?>