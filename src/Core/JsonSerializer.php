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
        // Se llama al toArray() del widget raíz y se codifica a JSON.
        $data = $viewStructure->getRootWidget()->toArray();
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}