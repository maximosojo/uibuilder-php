<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento trait rotate
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait RotateTrait
{   
    public function setRotate(?float $rotate)
    {
        $this->setProperty('rotate', $rotate);

        return $this;
    }
}
