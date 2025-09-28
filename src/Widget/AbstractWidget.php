<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Contract\WidgetInterface;

abstract class AbstractWidget implements WidgetInterface
{
    protected array $properties = [];

    /**
     * Elemnto a renderizar
     * @var string
     */
    protected $widget;

    public function __construct($widgetName)
    {
        $this->widget = $widgetName;
    }

    public function toArray(): array
    {
        return [
            'widget' => $this->getWidget(),
            'props' => $this->properties,
        ];
    }
    
    // Método para simplificar la adición de propiedades (ej. 'text', 'color', etc.)
    protected function setProperty(string $name, $value): self
    {
        $this->properties[$name] = $value;
        return $this;
    }
}