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

use Maximosojo\UIBuilderPHP\Structure\ViewStructure;

class WidgetGeneratorService
{
    /**
     * Inicia una nueva estructura de vista para agregar widgets.
     */
    public function createView(): ViewStructure
    {
        return new ViewStructure();
    }

    /**
     * Serializa la estructura de la vista a una cadena JSON para el API.
     */
    public function serializeToJson(ViewStructure $viewStructure): string
    {
        $serializer = new JsonSerializer();
        return $serializer->serialize($viewStructure);
    }
}