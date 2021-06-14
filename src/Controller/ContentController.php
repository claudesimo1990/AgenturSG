<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace App\Controller;

use App\Form\CarSubmitFormType;
use App\Model\Product\Car;
use App\Website\Tool\Text;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Controller\Configuration\ResponseHeader;
use Pimcore\Model\DataObject\BodyStyle;
use Pimcore\Model\DataObject\Manufacturer;
use Pimcore\Model\DataObject\Service;
use Pimcore\Translation\Translator;
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
     * The annotations below demonstrate the ResponseHeader annotation which can be
     * used to set custom response headers on the auto-rendered response. At this point, the headers
     * are not really set as we don't have a response yet, but they will be added to the final response
     * by the ResponseHeaderListener.
     *
     * @ResponseHeader("X-Custom-Header", values={"Foo", "Bar"})
     * @ResponseHeader("X-Custom-Header2", values="Bazinga", replace=true)
     *
     * @return Response
     */
    public function homeAction()
    {
        // you can also set the header via code
        $this->addResponseHeader('X-Custom-Header3', ['foo', 'bar']);

        return $this->render('content/home.html.twig', [
            'isPortal' => true
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
    public function thumbnailsAction()
    {
        return $this->render('content/thumbnails.html.twig');
    }
}
