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

use Maximosojo\UIBuilderPHP\Traits\IconTrait;
use Maximosojo\UIBuilderPHP\Traits\RotateTrait;
use Maximosojo\UIBuilderPHP\Traits\SizeTrait;
use Maximosojo\UIBuilderPHP\Traits\ColorTrait;

/**
 * Widget para IconWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class IconWidget extends AbstractWidget
{
    use IconTrait;
    use SizeTrait;
    use RotateTrait;
    use ColorTrait;
    
	public function __construct()
	{
        parent::__construct("icon");
    }
}