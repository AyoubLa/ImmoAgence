<?php
/**
 * Created by IntelliJ IDEA.
 * User: SQLI
 * Date: 27/02/2019
 * Time: 13:48
 */

namespace App\Controller;


use App\Repository\PropertyRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Property;

class PropertyController extends AbstractController
{
    /*
     * @var PropertyRepository
     */
    private $repository;

    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/property", name="property.index")
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index(): Response
    {
        $property = $this->repository->findOneBy(['property_floor' => 4]);

        dump($property);

        return $this->render('propery/index.html.twig', ['current_page' => 'property']);
    }
}