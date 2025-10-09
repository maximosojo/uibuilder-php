<?php

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Widget\Tab\TabItemWidget;

/**
 * Widget para TabWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class TabWidget extends AbstractWidget
{
	public function __construct()
	{
        parent::__construct("tab");
    }

    public function addItem(TabItemWidget $item)
    {
        $items = $this->getProperty('items', []);
        $items[] = $item->toArray();

        $this->setProperty('items', $items);

        return $this;
    }

    public function setOnRefresh(bool $onRefresh)
    {
        $this->setProperty('on_refresh', $onRefresh);

        return $this;
    }
}