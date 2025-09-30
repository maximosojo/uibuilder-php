<?php

namespace Maximosojo\UIBuilderPHP\Widget;

use Maximosojo\UIBuilderPHP\Traits\UriActionInterface;
use Maximosojo\UIBuilderPHP\Traits\AttrTrait;

/**
 * Widget para botones
 *
 * @author Máximo Sojo <mxsojo13@gmail.com>
 */
class UriActionWidget extends AbstractWidget implements UriActionInterface
{
    use AttrTrait;

	public function __construct(?string $path = null, ?string $icon = null)
	{
        parent::__construct("uri_action");
        $this->setPath($path);
        $this->setIcon($icon);
        $this->setTarget(self::TYPE_TARGET_PUSH_NAMED);
    }

    public function setPath(?string $path)
    {
        $this->setProperty('path', $path);

        return $this;
    }

    public function setArguments(?array $arguments)
    {
        $this->setProperty('arguments', $arguments);

        return $this;
    }

    public function setIcon(?string $icon)
    {
        $this->setProperty('icon', $icon);

        return $this;
    }

    public function setTitle(?string $title)
    {
        $this->setProperty('title', $title);

        return $this;
    }

    public function setTarget($target)
    {
        $this->setProperty('target', $target);

        return $this;
    }
}