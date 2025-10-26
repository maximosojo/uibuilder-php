<?php

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Traits\MarginTrait;
use Maximosojo\UIBuilderPHP\Traits\SubTitleTrait;
use Maximosojo\UIBuilderPHP\Traits\TextAlignTrait;

/**
 * Widget para sub title
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
class SubTitleWidget extends AbstractWidget
{
    use SubTitleTrait;
    use TextAlignTrait;
    use MarginTrait;

	public function __construct()
	{
        parent::__construct("sub_title");
    }
}