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

use Maximosojo\UIBuilderPHP\Traits\TitleTrait;
use Maximosojo\UIBuilderPHP\Traits\SubTitleTrait;
use Maximosojo\UIBuilderPHP\Traits\ContentTrait;
use Maximosojo\UIBuilderPHP\Traits\UriActionTrait;

/**
 * Widget para CardWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class CardWidget extends AbstractWidget
{
    use TitleTrait;
    use SubTitleTrait;
    use ContentTrait;
    use UriActionTrait;

	public function __construct()
	{
        parent::__construct("card");
    }
}