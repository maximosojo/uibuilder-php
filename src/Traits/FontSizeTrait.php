<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento font size
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait FontSizeTrait
{   
    public function setFontSize(?float $fontSize)
    {
        $this->setProperty('font_size', $fontSize);

        return $this;
    }
}
