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

use Maximosojo\UIBuilderPHP\Contract\WidgetInterface;
use Maximosojo\UIBuilderPHP\Contract\WidgetSerializerInterface;
use Maximosojo\UIBuilderPHP\Structure\ViewStructure;

class WidgetGeneratorService
{
    private WidgetSerializerInterface $serializer;

    public function __construct(WidgetSerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Ensambla una estructura de vista a partir de un widget raíz.
     */
    public function buildView(WidgetInterface $rootWidget): ViewStructure
    {
        // ViewStructure es solo un contenedor para la raíz y metadatos
        return new ViewStructure($rootWidget); 
    }

    /**
     * Serializa la estructura de la vista a una cadena JSON para el API.
     */
    public function serializeToJson(ViewStructure $viewStructure): string
    {
        return $this->serializer->serialize($viewStructure);
    }
}