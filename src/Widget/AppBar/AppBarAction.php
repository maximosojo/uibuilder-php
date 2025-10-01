<?php

namespace Maximosojo\UIBuilderPHP\Widget\AppBar;

use Maximosojo\UIBuilderPHP\Traits\IconTrait;
use Maximosojo\UIBuilderPHP\Traits\UriActionTrait;
use Maximosojo\UIBuilderPHP\Widget\AbstractWidget;

/**
 * Widget para AppBarAction
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class AppBarAction extends AbstractWidget
{
    use IconTrait;
    use UriActionTrait;

	public function __construct()
	{
        parent::__construct("app_bar_action");
    }

    public function setBadgeEnabled($badgeEnabled)
    {
        $this->setProperty('badge_enabled', $badgeEnabled);

        return $this;
    }

    public function setBadgeContent($badgeContent)
    {
        $this->setProperty('badge_content', $badgeContent);

        return $this;
    }
}