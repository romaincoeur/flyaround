<?php

namespace WCS\CoavBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WCS\CoavBundle\Entity\Terrain;

/**
 * Terrain controller.
 *
 */
class TerrainController extends Controller
{
    /**
     * Lists all Terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $terrains = $em->getRepository('WCSCoavBundle:Terrain')->findAll();

        return $this->render('terrain/index.html.twig', array(
            'terrains' => $terrains,
        ));
    }

    /**
     * Finds and displays a Terrain entity.
     *
     */
    public function showAction(Terrain $terrain)
    {

        return $this->render('terrain/show.html.twig', array(
            'terrain' => $terrain,
        ));
    }
}
