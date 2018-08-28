<?php

namespace App\Controller;

use App\Entity\ReportingType;
use App\Form\ReportingType1Type;
use App\Repository\ReportingTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reporting_type")
 */
class ReportingTypeController extends Controller
{
    /**
     * @Route("/", name="reporting_type_index", methods="GET")
     */
    public function index(ReportingTypeRepository $reportingTypeRepository): Response
    {
        return $this->render('reporting_type/index.html.twig', ['reporting_types' => $reportingTypeRepository->findAll()]);
    }

    /**
     * @Route("/new", name="reporting_type_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $reportingType = new ReportingType();
        $form = $this->createForm(ReportingType1Type::class, $reportingType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reportingType);
            $em->flush();

            return $this->redirectToRoute('reporting_type_index');
        }

        return $this->render('reporting_type/new.html.twig', [
            'reporting_type' => $reportingType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reporting_type_show", methods="GET")
     */
    public function show(ReportingType $reportingType): Response
    {
        return $this->render('reporting_type/show.html.twig', ['reporting_type' => $reportingType]);
    }

    /**
     * @Route("/{id}/edit", name="reporting_type_edit", methods="GET|POST")
     */
    public function edit(Request $request, ReportingType $reportingType): Response
    {
        $form = $this->createForm(ReportingType1Type::class, $reportingType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reporting_type_edit', ['id' => $reportingType->getId()]);
        }

        return $this->render('reporting_type/edit.html.twig', [
            'reporting_type' => $reportingType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reporting_type_delete", methods="DELETE")
     */
    public function delete(Request $request, ReportingType $reportingType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reportingType->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reportingType);
            $em->flush();
        }

        return $this->redirectToRoute('reporting_type_index');
    }
}
