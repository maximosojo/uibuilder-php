<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Add PaddingTrait
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
trait PaddingTrait 
{
    public function setPaddingTop($paddingTop)
    {
        $this->setProperty('padding_top', $paddingTop);

        return $this;
    }

    public function setPaddingBottom($paddingBottom)
    {
        $this->setProperty('padding_bottom', $paddingBottom);

        return $this;
    }

    public function setPaddingLeft($paddingLeft)
    {
        $this->setProperty('padding_left', $paddingLeft);

        return $this;
    }

    public function setPaddingRight($paddingRight)
    {
        $this->setProperty('padding_right', $paddingRight);

        return $this;
    }
}