<?php

namespace merlano\materialize;

use yii\helpers\Html;

class Button extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'button';
    /**
     * @var string the button label
     */
    public $label = 'Button';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;
    /**
     * @var string default css class for button
     */
    public $defaultClass = 'waves-effect waves-light btn teal';
    /**
     * @var string default icon for button
     */
    public $icon = 'send';
    /**
     * @var icon enabled boolean default true
     */
    public $enableIcon = true;

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        $this->clientOptions = false;
        if ($this->defaultClass)
            Html::addCssClass($this->options, $this->defaultClass);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->registerPlugin('button');
        $this->label = $this->getLabel();
        if ($this->enableIcon) {
            $this->label .= Icon::widget(['label' => $this->icon,'options' => ['class' => 'right']]);
        }
        return Html::tag($this->tagName, $this->label, $this->options);
    }

    private function getLabel()
    {
        return $this->encodeLabel ? Html::encode($this->label) : $this->label;
    }
}