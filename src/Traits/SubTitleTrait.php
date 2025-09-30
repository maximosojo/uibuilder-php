<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemento sub titulo
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait SubTitleTrait
{   
    public function setSubTitle(?string $subTitle)
    {
        $this->setProperty('sub_title', $subTitle);

        return $this;
    }
}
