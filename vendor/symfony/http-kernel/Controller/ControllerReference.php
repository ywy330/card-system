<?php
 namespace Symfony\Component\HttpKernel\Controller; use Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface; class ControllerReference { public $controller; public $attributes = array(); public $query = array(); public function __construct($controller, array $attributes = array(), array $query = array()) { $this->controller = $controller; $this->attributes = $attributes; $this->query = $query; } } 