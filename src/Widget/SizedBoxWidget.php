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
class SizedBoxWidget extends AbastractWidget
{   
    /**
     * Elemento tipo height
     * @var double|null
     */
    protected $height = 0;

	public function __construct()
	{
        parent::__construct("sizedbox");
    }

    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}