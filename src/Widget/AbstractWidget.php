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
    /**
     * Propiedades específicas del widget (ej. 'height', 'title', 'font_size', etc.).
     */
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

    public function getWidget(): string
    {
        return $this->widget;
    }

    public function toArray(): array
    {
        // El widget es ahora parte del array de propiedades, como lo exige tu esquema.
        return array_merge(
            ['widget' => $this->getWidget()], 
            $this->properties
        );
    }
    
    protected function setProperty(string $name, $value): self
    {
        $this->properties[$name] = $value;
        return $this;
    }
}