<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\UIBuilderPHP\Contract;

use Maximosojo\UIBuilderPHP\Structure\ViewStructure;

/**
 * Contrato para cualquier clase que se encargue de transformar la ViewStructure en una cadena serializada (JSON).
 */
interface WidgetSerializerInterface
{
    /**
     * Serializa la estructura de la vista a una cadena (generalmente JSON).
     */
    public function serialize(ViewStructure $viewStructure): string;
}