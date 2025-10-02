<?php

namespace Maximosojo\UIBuilderPHP\Traits;

/**
 * Elemtno data
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
trait DataTrait
{   
    public function setData($data)
    {
        $this->setProperty('data', $data);

        return $this;
    }
}