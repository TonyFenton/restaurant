<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_619ab7d3c9ed086ecb69a7605973eaa4446786497fd19044d7191cfeb360642d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00891c9f64d918b3372b183cb59434e02a18984420ef56060bbebf8181730c3e = $this->env->getExtension("native_profiler");
        $__internal_00891c9f64d918b3372b183cb59434e02a18984420ef56060bbebf8181730c3e->enter($__internal_00891c9f64d918b3372b183cb59434e02a18984420ef56060bbebf8181730c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00891c9f64d918b3372b183cb59434e02a18984420ef56060bbebf8181730c3e->leave($__internal_00891c9f64d918b3372b183cb59434e02a18984420ef56060bbebf8181730c3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d06750325f89bcecc137ec5be7e4ef3d2ca1e4411a285607a6b61e4fe196b40c = $this->env->getExtension("native_profiler");
        $__internal_d06750325f89bcecc137ec5be7e4ef3d2ca1e4411a285607a6b61e4fe196b40c->enter($__internal_d06750325f89bcecc137ec5be7e4ef3d2ca1e4411a285607a6b61e4fe196b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d06750325f89bcecc137ec5be7e4ef3d2ca1e4411a285607a6b61e4fe196b40c->leave($__internal_d06750325f89bcecc137ec5be7e4ef3d2ca1e4411a285607a6b61e4fe196b40c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
