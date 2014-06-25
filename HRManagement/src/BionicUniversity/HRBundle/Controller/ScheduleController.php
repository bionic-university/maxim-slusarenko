<?php

namespace BionicUniversity\HRBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BionicUniversity\HRBundle\Entity\Schedule;
use BionicUniversity\HRBundle\Form\ScheduleType;

/**
 * Schedule controller.
 *
 */
class ScheduleController extends Controller
{

    /**
     * Lists all Schedule entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BionicUniversityHRBundle:Schedule')->findAll();

        return $this->render('BionicUniversityHRBundle:Schedule:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Schedule entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Schedule();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('schedule_show', array('id' => $entity->getId())));
        }

        return $this->render('BionicUniversityHRBundle:Schedule:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Schedule entity.
    *
    * @param Schedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Schedule $entity)
    {
        $form = $this->createForm(new ScheduleType(), $entity, array(
            'action' => $this->generateUrl('schedule_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Schedule entity.
     *
     */
    public function newAction()
    {
        $entity = new Schedule();
        $form   = $this->createCreateForm($entity);

        return $this->render('BionicUniversityHRBundle:Schedule:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Schedule entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityHRBundle:Schedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Schedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BionicUniversityHRBundle:Schedule:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Schedule entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityHRBundle:Schedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Schedule entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BionicUniversityHRBundle:Schedule:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Schedule entity.
    *
    * @param Schedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Schedule $entity)
    {
        $form = $this->createForm(new ScheduleType(), $entity, array(
            'action' => $this->generateUrl('schedule_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Schedule entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityHRBundle:Schedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Schedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('schedule_edit', array('id' => $id)));
        }

        return $this->render('BionicUniversityHRBundle:Schedule:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Schedule entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BionicUniversityHRBundle:Schedule')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Schedule entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('schedule'));
    }

    /**
     * Creates a form to delete a Schedule entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('schedule_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
