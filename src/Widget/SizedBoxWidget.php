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

/**
 * Widget para SizedBoxWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class SizedBoxWidget extends AbstractWidget
{
	public function __construct($height = 0.0)
	{
        parent::__construct("sizedbox");
        $this->setProperty('height', $height);
    }

    public function setHeight($height)
    {
        $this->setProperty('height', $height);

        return $this;
    }
}