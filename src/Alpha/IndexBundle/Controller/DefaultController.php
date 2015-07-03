<?php

namespace Alpha\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $form = $this->createFormBuilder()
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('country', 'country')
            ->add('email', 'email')
            ->add('datetime', 'datetime')
            ->add('money', 'money')
            ->add('language', 'language')
            ->add('textarea', 'textarea')
            ->getForm();
        return array(
            'welcome' => 'Welcome to Alpha Symfony project!',
            'form' => $form->createView()
            );
    }
}
