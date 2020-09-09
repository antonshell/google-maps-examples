<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request): Response
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/markers", name="markers")
     */
    public function markers(Request $request): Response
    {
        return $this->render('main/markers.html.twig');
    }

    /**
     * @Route("/geocode", name="geocode")
     */
    public function geocode(Request $request): Response
    {
        return $this->render('main/geocode.html.twig');
    }

    /**
     * @Route("/clustering", name="clustering")
     */
    public function clustering(Request $request): Response
    {
        return $this->render('main/clustering.html.twig');
    }

    /**
     * @Route("/autocomplete", name="autocomplete")
     */
    public function autocomplete(Request $request): Response
    {
        return $this->render('main/autocomplete.html.twig');
    }

    /**
     * @Route("/elevation", name="elevation")
     */
    public function elevation(Request $request): Response
    {
        return $this->render('main/elevation.html.twig');
    }

    /**
     * @Route("/gpx", name="gpx")
     */
    public function gpx(Request $request): Response
    {
        return $this->render('main/gpx.html.twig');
    }

    /**
     * @Route("/layers", name="layers")
     */
    public function layers(Request $request): Response
    {
        return $this->render('main/layers.html.twig');
    }

    /**
     * @Route("/panorama", name="panorama")
     */
    public function panorama(Request $request): Response
    {
        return $this->render('main/panorama.html.twig');
    }

    /**
     * @Route("/directions", name="directions")
     */
    public function directions(Request $request): Response
    {
        return $this->render('main/directions.html.twig');
    }

    /**
     * @Route("/polygon", name="polygon")
     */
    public function polygon(Request $request): Response
    {
        return $this->render('main/polygon.html.twig');
    }

    /**
     * @Route("/polyline", name="polyline")
     */
    public function polyline(Request $request): Response
    {
        return $this->render('main/polyline.html.twig');
    }

    public function pageNotFoundAction(): Response
    {
        return $this->render(
            'error/error404.html.twig',
            [],
            new Response('', Response::HTTP_NOT_FOUND)
        );
    }
}
