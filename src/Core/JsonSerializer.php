<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\UIBuilderPHP\Core;

use Maximosojo\UIBuilderPHP\Contract\WidgetSerializerInterface;
use Maximosojo\UIBuilderPHP\Structure\ViewStructure;

class JsonSerializer implements WidgetSerializerInterface
{
    public function serialize(ViewStructure $viewStructure): string
    {
        $finalArray = [];
        
        // Iterar sobre todos los widgets y convertirlos a su representación array
        foreach ($viewStructure->getWidgets() as $widget) {
            $finalArray[] = $widget->toArray();
        }
        
        // El resultado es el array plano de objetos JSON.
        return json_encode($finalArray, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
    }
}