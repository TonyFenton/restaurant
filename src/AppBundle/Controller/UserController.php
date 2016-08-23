<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


/**
 * User controller.
 *
 * @Route("/admin/user")
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/", name="admin_user_index")
     * @Method("GET")
     */
    public function indexAction()
    {		
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findUsers();

        return $this->render('admin/user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
		return $this->createFormBuilder()
			->setAction($this->generateUrl('admin_user_delete', array('id' => $id)))
			->setMethod('DELETE')
			->getForm()
		;

    }
	
	public function renderDeleteFormAction($id) 
	{
		$deleteForm = $this->createDeleteForm($id);
		
		return $this->render('admin/user/_delete_form.html.twig', array(
			'delete_form' => $deleteForm->createView()
		));
	}
	
	/**
     * Deletes a User entity.
     *
     * @Route("/{id}", name="admin_user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
		
        $form = $this->createDeleteForm($user->getId());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
			
			$this->addFlash(
				'notice',
				'Użytkownik został usunięty'
			);
        }

        return $this->redirectToRoute('admin_user_index');
    }
	
	private function createEnabledForm($id)
    {
		$em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneById($id);
		
		if ($user->isEnabled()) {
			$user->setEnabled(false);
		}else {
			$user->setEnabled(true);
		}
		
		return $this->createFormBuilder($user)
			->add('enabled', HiddenType::class, array(
					'data' => $user->isEnabled()
				))
            ->setAction($this->generateUrl('admin_user_enabled', array('id' => $id)))
			->getForm()
		;
    }
	
	public function renderEnabledFormAction($id) 
	{
		$enabledForm = $this->createEnabledForm($id);
		
		return $this->render('admin/user/_enabled_form.html.twig', array(
			'enabled_form' => $enabledForm->createView(),
			'enabled' => $enabledForm->getNormData()->isEnabled()
		));
		
	}
	
	/**
     * Enabled a User entity.
     *
     * @Route("/{id}", name="admin_user_enabled")
     * @Method("Post")
     */
    public function enabledAction(Request $request, User $user)
    {
		
        $form = $this->createEnabledForm($user->getId());
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

			if ($form->getNormData()->isEnabled()) {
				$this->addFlash(
					'notice',
					'Użytkownik został aktywowany'
				);
			}else{
				$this->addFlash(
					'notice',
					'Użytkownik został dezaktywowany'
				);
			}
        }

        return $this->redirectToRoute('admin_user_index');
    }
}












