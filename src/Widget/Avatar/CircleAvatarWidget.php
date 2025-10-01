<?php

namespace Maximosojo\UIBuilderPHP\Widget\Avatar;

use Maximosojo\UIBuilderPHP\Widget\AbstractWidget;

/**
 * Widget para CircleAvatarWidget
 *
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class CircleAvatarWidget extends AbstractWidget
{
    public function __construct($src = '')
	{
        parent::__construct("circle_avatar");
        $this->setSrc($src);
    }

    public function setSrc(string $src)
    {
        $this->setProperty('src', $src);

        return $this;
    }

    public function setSize(string $size)
    {
        $this->setProperty('size', $size);

        return $this;
    }
}