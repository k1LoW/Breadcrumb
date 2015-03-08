<?php

App::uses('Component', 'Controller');

/**
 * BreadcrumbComponent.
 */
class BreadcrumbComponent extends Component
{
    public $breadcrumb;

    /**
     * initialize.
     *
     */
    public function initialize(Controller $controller)
    {
        $this->Controller = $controller;
        $this->breadcrumb = array();
    }

    /**
     * append
     *
     */
    public function append($title, $url = null){
        $this->breadcrumb[] = array(
            $title => $url
        );
    }

    /**
     * beforeRender.
     */
    public function beforeRender(Controller $controller)
    {
        $controller->set(array(
            'breadcrumb' => $this->breadcrumb
        ));
    }
}
