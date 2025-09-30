<?php

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Traits\TitleTrait;

/**
 * Widget para title
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
class TitleWidget extends AbstractWidget
{
    use TitleTrait;

	public function __construct()
	{
        parent::__construct("title");
    }
}