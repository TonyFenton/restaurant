<?php

/* admin/page/index.html.twig */
class __TwigTemplate_ab24e9a9ca00205a4c946bfeaf5478d8d5826149aa3a308b33cbbae1f52291c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_935781492431b3d8b155d0cf4e9a13ab05abb593ad26a161b58f5aae864ec6c1 = $this->env->getExtension("native_profiler");
        $__internal_935781492431b3d8b155d0cf4e9a13ab05abb593ad26a161b58f5aae864ec6c1->enter($__internal_935781492431b3d8b155d0cf4e9a13ab05abb593ad26a161b58f5aae864ec6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935781492431b3d8b155d0cf4e9a13ab05abb593ad26a161b58f5aae864ec6c1->leave($__internal_935781492431b3d8b155d0cf4e9a13ab05abb593ad26a161b58f5aae864ec6c1_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* */
