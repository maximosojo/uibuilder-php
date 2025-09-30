<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemtno titulo
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait TitleTrait
{   
    public function setTitle(?string $title)
    {
        $this->setProperty('title', $title);

        return $this;
    }
}
