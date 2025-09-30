<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\UIBuilderPHP\Structure;

use Maximosojo\UIBuilderPHP\Contract\WidgetInterface;

/**
 * Un objeto simple para encapsular el widget raíz y metadatos opcionales de la vista.
 * Se usa para tipar el dato que recibe el Serializador.
 */
class ViewStructure
{
    /** @var WidgetInterface[] */
    protected array $widgets = [];

    /**
     * Agrega un widget a la colección de la vista.
     */
    public function addWidget(WidgetInterface $widget): self
    {
        $this->widgets[] = $widget;
        
        return $this;
    }

    /** @return WidgetInterface[] */
    public function getWidgets(): array
    {
        return $this->widgets;
    }
}