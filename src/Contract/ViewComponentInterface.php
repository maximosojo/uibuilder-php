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

interface ViewComponentInterface
{
    /**
     * Define el nombre de alto nivel del componente (ej. "app_bar", "body").
     */
    public function getComponentName(): string;

    /**
     * Convierte el componente, incluyendo sus widgets, a un array.
     */
    public function toArray(): array;
}