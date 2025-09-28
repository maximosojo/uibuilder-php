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

/**
 * Contrato base que todo Widget debe implementar para ser serializable.
 */
interface WidgetInterface
{
    /**
     * Obtiene el nombre del tipo de widget que Flutter debe reconocer (ej. 'Text', 'Column').
     */
    public function getWidget(): string;

    /**
     * Convierte el widget y todas sus propiedades a un array asociativo.
     */
    public function toArray(): array;
}