<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemtno descripcion
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait DescriptionTrait
{   
    public function setDescription(?string $description)
    {
        $this->setProperty('description', $description);

        return $this;
    }
}
