<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento trait color
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait ColorTrait
{   
    public function setColor(?string $color)
    {
        $this->setProperty('color', $color);

        return $this;
    }
}
