<?php

namespace Vivait\Common\Form;

use Symfony\Component\Form\FormEvent;

trait DeletableTrait
{
    public function addDeleteButton(FormEvent $event)
    {
            $form = $event->getForm();
            $object = $event->getData();

            if ($object && $object->getId()) {
                $form->add('delete', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn-danger')));
            }
    }
}
