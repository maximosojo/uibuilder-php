<?php

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Traits\TitleTrait;
use Maximosojo\UIBuilderPHP\Traits\UriActionTrait;
use Maximosojo\UIBuilderPHP\Traits\MarginTrait;
use Maximosojo\UIBuilderPHP\Traits\IconTrait;

/**
 * Widget para botones
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
class ButtonWidget extends AbstractWidget implements ButtonWidgetInterface
{
    use TitleTrait;
    use UriActionTrait;
	use MarginTrait;
    use IconTrait;

	public function __construct()
	{
        parent::__construct("button");
    }

    public function setDisabled($disabled)
    {
        $this->setProperty('disabled', $disabled);

        return $this;
    }

    public function setSelected($selected)
    {
        $this->setProperty('selected', $selected);

        return $this;
    }

    public function setIconAlign(?string $iconAlign)
    {
        $this->setProperty('icon_align', $iconAlign);

        return $this;
    }
}
