<?php

namespace App\Controller;

use Pimcore\Controller\Configuration\ResponseHeader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentController extends BaseController
{
    /**
     * @Template
     */
    public function defaultAction()
    {
        return [];
    }

    /**
     * @ResponseHeader("X-Custom-Header", values={"Foo", "Bar"})
     * @ResponseHeader("X-Custom-Header2", values="Bazinga", replace=true)
     *
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request): Response
    {
        $requestUri = $request->getRequestUri();

        return $this->render('content/home.html.twig', [
            'isPortal' => true,
            'requestUri' => $requestUri
        ]);
    }

    /**
     * @return Response
     */
    public function editableRoundupAction()
    {
        return $this->render('content/editable_roundup.html.twig');
    }

    /**
     * @return Response
     */
    public function productAction()
    {
        return $this->render('content/product.html.twig');
    }
}
