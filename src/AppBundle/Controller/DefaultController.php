<?php

namespace AppBundle\Controller;

use AppBundle\Resource\Response;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DefaultController extends FOSRestController
{

    /**
     * A Resource to retrieve single individual Accommodation.
     *
     * @ApiDoc(
     *     resource = true,
     *     description = "Gets an Accommodation resource",
     *     requirements = {
     *         {"name" = "id", "dataType" = "string", "required" = true, "description" = "An Accommodation ID"},
     *     },
     *     output = "AppBundle\Resource\Response"
     * )
     */
    public function getElementAction($id, Request $request)
    {
        $element = new Response();

        return $element;
    }

}