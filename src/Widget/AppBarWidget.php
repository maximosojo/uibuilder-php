<?php

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Widget\AppBar\AppBarAction;
use Maximosojo\UIBuilderPHP\Traits\TitleTrait;
use Maximosojo\UIBuilderPHP\Widget\AbstractWidget;

/**
 * Widget para AppBarWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class AppBarWidget extends AbstractWidget
{
    use TitleTrait;

	public function __construct(?string $title = '')
	{
        parent::__construct("app_bar");
        $this->setTitle($title);
    }

    public function setLogo($logo)
    {
        $this->setProperty('logo', $logo);

        return $this;
    }

    public function setAutomaticallyImplyLeading($automaticallyImplyLeading)
    {
        $this->setProperty('automatically_imply_leading', $automaticallyImplyLeading);

        return $this;
    }

    public function setLeading($leading)
    {
        $this->setProperty('leading', $leading);

        return $this;
    }

    public function setCenterTitle($centerTitle)
    {
        $this->setProperty('center_title', $centerTitle);

        return $this;
    }

    public function addAction(AppBarAction $action)
    {
        $actions = $this->getProperty('actions', []);
        $actions[] = $action->toArray();

        $this->setProperty('actions', $actions);

        return $this;
    }
}