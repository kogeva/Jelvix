<?php

/**
 * request actions.
 *
 * @package    Jelvix
 * @subpackage request
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class requestActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeNew(sfWebRequest $request)
    {
        $this->getResponse()->setTitle(sfConfig::get('app_titles_request'));
        $this->setLayout('request');

        $this->form = new JelvixRequestForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->setLayout('request');
        $this->form = new JelvixRequestForm();

        $this->processForm($request, $this->form);
        $this->setTemplate('new');

    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getPostParameters());

        if ($form->isValid())
        {
            $job = $form->save();

//            $this->sendEmail(
//                sfConfig::get('app_mails_contact'),
//                $request->getParameter('email_address'),
//                'Hello people'
//            );
            $this->getUser()->setFlash('notice', 'success');
            $this->redirect('jelvix_request_new', $job);
        }
    }
}
