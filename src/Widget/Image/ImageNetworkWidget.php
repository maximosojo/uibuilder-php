<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maximosojo.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\UIBuilderPHP\Widget\Image;

use Maximosojo\UIBuilderPHP\Widget\AbstractWidget;
use Maximosojo\UIBuilderPHP\Traits\MarginTrait;

/**
 * Widget para ImageNetworkWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class ImageNetworkWidget extends AbstractWidget
{
    use MarginTrait;
    
	public function __construct($src)
	{
        parent::__construct("image_network");
        $this->setProperty('src', $src);
    }

    public function setSrc($src)
    {
        $this->setProperty('src', $src);

        return $this;
    }
}