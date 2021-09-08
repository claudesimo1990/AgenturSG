<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ContactController extends BaseController
{
    /**
     * @return Response
     */
    public function indexAction(): Response
    {
        return $this->render('content/contact.html.twig');

    }

}
