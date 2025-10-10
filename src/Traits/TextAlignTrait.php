<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento text aling
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait TextAlignTrait
{
    public function setTextAlign(?string $textAlign)
    {
        $this->setProperty('text_align', $textAlign);

        return $this;
    }
}
