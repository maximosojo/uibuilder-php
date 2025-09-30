<?php

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Traits\SubTitleTrait;

/**
 * Widget para sub title
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
class SubTitleWidget extends AbstractWidget
{
    use SubTitleTrait;

	public function __construct()
	{
        parent::__construct("sub_title");
    }
}