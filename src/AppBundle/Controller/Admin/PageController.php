<?php

namespace AppBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Page;
use AppBundle\Entity\Description;
use AppBundle\Form\PageType;

/**
 * Page controller.
 *
 * @Route("/admin/page")
 */
class PageController extends Controller
{
    /**
     * Lists all Page entities.
     *
     * @Route("/", name="admin_page_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('AppBundle:Page')->findAll();

        return $this->render('admin/page/index.html.twig', array(
            'pages' => $pages,
        ));
    }

    /**
     * Creates a new Page entity.
     *
     * @Route("/new", name="admin_page_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $page = new Page();
        $form = $this->createForm('AppBundle\Form\PageType', $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			
			if (empty($page->getDescription()->getDescription())) {
				$page->setDescription(null);
			}else{
				$page->getDescription()->setPage($page);
			}
			
            $em->persist($page);
            $em->flush();
			
			$this->addFlash(
				'notice',
				'Strona została utworzona'
			);

            return $this->redirectToRoute('admin_page_edit', array('id' => $page->getId()));
        }

        return $this->render('admin/page/new.html.twig', array(
            'page' => $page,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Page entity.
     *
     * @Route("/{id}/edit", name="admin_page_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Page $page, $id)
    {
		if ($page->getSlug() != 'homepage') {
			$deleteForm = $this->createDeleteForm($page)->createView();
		}else{
			$deleteForm= null;
		}
        
        $editForm = $this->createForm('AppBundle\Form\PageType', $page);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$em = $this->getDoctrine()->getManager();

			if (empty($page->getDescription()->getDescription()) && $page->getDescription()->getPage()) {
				$em->remove($page->getDescription());
				$page->setDescription(null);
			}else if (empty($page->getDescription()->getDescription())) {
				$page->setDescription(null);
			}else{
				$page->getDescription()->setPage($page);
			}
	
            $em->persist($page);
            $em->flush();

			$this->addFlash(
				'notice',
				'Zmiany zostały zapisane'
			);
			
            return $this->redirectToRoute('admin_page_edit', array('id' => $page->getId()));
        }

        return $this->render('admin/page/edit.html.twig', array(
            'page' => $page,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm,
        ));
    }

    /**
     * Deletes a Page entity.
     *
     * @Route("/{id}", name="admin_page_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Page $page)
    {
        $form = $this->createDeleteForm($page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($page);
            $em->flush();
			
			$this->addFlash(
				'notice',
				'Strona została usunięta'
			);
        }

        return $this->redirectToRoute('admin_page_index');
    }

    /**
     * Creates a form to delete a Page entity.
     *
     * @param Page $page The Page entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Page $page)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_page_delete', array('id' => $page->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
