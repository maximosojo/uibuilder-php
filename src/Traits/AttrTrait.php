<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemtno attr
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait AttrTrait
{   
    public function setAttr($key, $value)
    {
        $attr = $this->getProperty('attr', []);
        $attr[$key] = $value;

        $this->setProperty('attr', $attr);

        return $this;
    }

    public function setAttrs(?array $attr)
    {
        $this->setProperty('attr', $attr);

        return $this;
    }
}