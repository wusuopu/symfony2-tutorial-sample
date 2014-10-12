<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

/**
 * PageController
 */
class PageController extends Controller
{
    /**
     * index page.
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }

    /**
     * about page.
     *
     * @return array
     *
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }

    /**
     * about page.
     *
     * @return array
     *
     * @Template()
     */
    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                // 表单验证通过，执行一些操作，如发送邮件。
                // doSometing();

                return $this->redirect($this->generateUrl('blogger_blogBundle_contact'));
            }
        }

        return array('form' => $form->createView());
    }
}
