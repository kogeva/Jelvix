<?php

/**
 * contacts actions.
 *
 * @package    Jelvix
 * @subpackage contacts
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactsActions extends sfActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->getResponse()->setTitle(sfConfig::get('app_titles_contacts'));
        $this->contactForm = new JelvixContactsForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->contactForm = new JelvixContactsForm();

        $this->processForm($request, $this->contactForm);
        $this->setTemplate('new');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getPostParameters());

        if ($form->isValid())
        {
            $job = $form->save();

            $this->sendEmail(
                sfConfig::get('app_mails_contact'),
                'contacts@jelvix.com',
                'New message. Jelvix.com',
                <<<EOF
                name: {$request->getParameter('name')}
                email: {$request->getParameter('email_address')}
                subject: {$request->getParameter('subject')}

                {$request->getParameter('message')}
EOF
            );
            $this->getUser()->setFlash('notice', 'success');
            $this->redirect('jelvix_contacts_new', $job);
        }
    }

    private function sendEmail(array $toMail, $from, $theme = '', $text  )
    {
        foreach($toMail as $to)
        {
            $message = $this->getMailer()->compose();
            $message->setSubject($theme);
            $message->setTo($to);
            $message->setFrom($from);
            $message->setBody($text, 'text/plain');

            $this->getMailer()->send($message);
        }
    }
}
