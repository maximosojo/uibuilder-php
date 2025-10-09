<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento trait content
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait ContentTrait
{   
    public function setContent(?string $content)
    {
        $this->setProperty('content', $content);

        return $this;
    }
}
