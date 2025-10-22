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

use Maximosojo\UIBuilderPHP\Traits\MarginTrait;

/**
 * Widget para DividerWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class DividerWidget extends AbstractWidget
{
    use MarginTrait;

	public function __construct()
	{
        parent::__construct("divider");
    }

    public function setHeight(?float $height)
    {
        $this->setProperty('height', $height);

        return $this;
    }

    public function setWidth(?float $width)
    {
        $this->setProperty('width', $width);

        return $this;
    }
}