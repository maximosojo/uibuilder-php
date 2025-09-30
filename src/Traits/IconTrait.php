<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento icono
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait IconTrait
{   
    public function setIcon(?string $icon)
    {
        $this->setProperty('icon', $icon);

        return $this;
    }
}
