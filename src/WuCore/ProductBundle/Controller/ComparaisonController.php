<?php

namespace WuCore\ProductBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use WuCore\ProductBundle\Entity\Comparaison;
use WuCore\ProductBundle\Form\ComparaisonType;

/**
 * Comparaison controller.
 *
 * @Route("/comparaison")
 */
class ComparaisonController extends Controller
{
    /**
     * Lists all Comparaison entities.
     *
     * @Route("/", name="comparaison")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WuCoreProductBundle:Comparaison')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Comparaison entity.
     *
     * @Route("/{id}/show", name="comparaison_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WuCoreProductBundle:Comparaison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comparaison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Comparaison entity.
     *
     * @Route("/new", name="comparaison_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Comparaison();
        $form   = $this->createForm(new ComparaisonType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Comparaison entity.
     *
     * @Route("/create", name="comparaison_create")
     * @Method("POST")
     * @Template("WuCoreProductBundle:Comparaison:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Comparaison();
        $form = $this->createForm(new ComparaisonType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comparaison_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Comparaison entity.
     *
     * @Route("/{id}/edit", name="comparaison_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WuCoreProductBundle:Comparaison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comparaison entity.');
        }

        $editForm = $this->createForm(new ComparaisonType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Comparaison entity.
     *
     * @Route("/{id}/update", name="comparaison_update")
     * @Method("POST")
     * @Template("WuCoreProductBundle:Comparaison:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WuCoreProductBundle:Comparaison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comparaison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ComparaisonType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comparaison_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Comparaison entity.
     *
     * @Route("/{id}/delete", name="comparaison_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WuCoreProductBundle:Comparaison')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comparaison entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comparaison'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
