<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Footer;
use AppBundle\Form\Type\FooterType;

/**
 * Footer controller.
 *
 * @Route("/admin/footer")
 */
class FooterController extends Controller
{
    /**
     * Lists all Footer entities.
     *
     * @Route("/", name="footer_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $footers = $em->getRepository(Footer::class)->findAll();

        return $this->render('footer/index.html.twig', array(
            'footers' => $footers,
        ));
    }

    /**
     * Creates a new Footer entity.
     *
     * @Route("/new", name="footer_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $footer = new Footer();
        $form = $this->createForm(FooterType::class, $footer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($footer);
            $em->flush();
			
			$this->addFlash(
				'notice',
				'Stopka została utworzona'
			);

            return $this->redirectToRoute('footer_edit', array('id' => $footer->getId()));
        }

        return $this->render('footer/new.html.twig', array(
            'footer' => $footer,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Footer entity.
     *
     * @Route("/{id}/edit", name="footer_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Footer $footer)
    {
        $deleteForm = $this->createDeleteForm($footer);
        $editForm = $this->createForm(FooterType::class, $footer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($footer);
            $em->flush();
			
			$this->addFlash(
				'notice',
				'Zmiany zostały zapisane'
			);

            return $this->redirectToRoute('footer_edit', array('id' => $footer->getId()));
        }

        return $this->render('footer/edit.html.twig', array(
            'footer' => $footer,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Footer entity.
     *
     * @Route("/{id}", name="footer_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Footer $footer)
    {
        $form = $this->createDeleteForm($footer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($footer);
            $em->flush();
			
			$this->addFlash(
				'notice',
				'Stopka została usunięta'
			);
        }

        return $this->redirectToRoute('footer_index');
    }

    /**
     * Creates a form to delete a Footer entity.
     *
     * @param Footer $footer The Footer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Footer $footer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('footer_delete', array('id' => $footer->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}