<?php

namespace Maximosojo\UIBuilderPHP\Traits;

use Maximosojo\UIBuilderPHP\Traits\UriActionInterface;

/**
 * URI de la pagina a cargar al tocar el elemento
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
trait UriActionTrait
{
    public function setUriAction(UriActionInterface $uriAction)
    {
        $this->setProperty('uri_action', $uriAction);

        return $this;
    }
}
