<?php

namespace Tgallice\FBMessenger\Attachment\Structured;

use Tgallice\FBMessenger\Attachment\Structured;
use Tgallice\FBMessenger\Model\Button as ButtonModel;

class Button extends Structured
{
    const TEMPLATE_TYPE = 'button';

    /**
     * @param null|string $text
     * @param ButtonModel[] $buttons
     */
    public function __construct($text = null, array $buttons = [])
    {
        $this->payload = [
            'template_type' => self::TEMPLATE_TYPE,
            'text' => $text,
            'buttons' => $buttons,
        ];
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        return $this->payload['text'];
    }

    /**
     * @return array
     */
    public function getButtons()
    {
        return $this->payload['buttons'];
    }
}
