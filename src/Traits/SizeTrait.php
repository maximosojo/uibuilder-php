<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento size
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait SizeTrait
{   
    public function setSize(?float $size)
    {
        $this->setProperty('size', $size);

        return $this;
    }
}
