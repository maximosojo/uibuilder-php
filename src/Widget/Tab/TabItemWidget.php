<?php

namespace Maximosojo\UIBuilderPHP\Widget\Tab;

use Maximosojo\UIBuilderPHP\Widget\AbstractWidget;
use Maximosojo\UIBuilderPHP\Traits\TitleTrait;

/**
 * Widget para TabItemWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class TabItemWidget extends AbstractWidget
{
    use TitleTrait;

    public function __construct()
	{
        parent::__construct("tab_item");
    }

    public function setUriAction($uriAction)
    {
        $this->setProperty('uri_action', $uriAction);

        return $this;
    }

    public function setSelected($selected)
    {
        $this->setProperty('selected', $selected);

        return $this;
    }
}