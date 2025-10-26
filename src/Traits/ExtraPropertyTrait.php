<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento extra property
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait ExtraPropertyTrait
{   
    public function setExtraProperty(string $key, $value)
    {
        $this->setProperty($key, $value);

        return $this;
    }
}
