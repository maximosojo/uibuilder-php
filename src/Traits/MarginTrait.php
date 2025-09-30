<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Add MarginTrait
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
trait MarginTrait 
{
    public function setMarginTop($marginTop)
    {
        $this->setProperty('margin_top', $marginTop);

        return $this;
    }

    public function setMarginBottom($marginBottom)
    {
        $this->setProperty('margin_bottom', $marginBottom);

        return $this;
    }

    public function setMarginLeft($marginLeft)
    {
        $this->setProperty('margin_left', $marginLeft);

        return $this;
    }

    public function setMarginRight($marginRight)
    {
        $this->setProperty('margin_right', $marginRight);

        return $this;
    }
}