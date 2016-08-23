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
        $__internal_f0899eb4ca7dbf7693f173291d11ce23e771b45b3a6cd5848efd471417ba51ea = $this->env->getExtension("native_profiler");
        $__internal_f0899eb4ca7dbf7693f173291d11ce23e771b45b3a6cd5848efd471417ba51ea->enter($__internal_f0899eb4ca7dbf7693f173291d11ce23e771b45b3a6cd5848efd471417ba51ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0899eb4ca7dbf7693f173291d11ce23e771b45b3a6cd5848efd471417ba51ea->leave($__internal_f0899eb4ca7dbf7693f173291d11ce23e771b45b3a6cd5848efd471417ba51ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e95c8bda427183987c8c00c01f847bea59360aa0860b123f803cb2998c8e029e = $this->env->getExtension("native_profiler");
        $__internal_e95c8bda427183987c8c00c01f847bea59360aa0860b123f803cb2998c8e029e->enter($__internal_e95c8bda427183987c8c00c01f847bea59360aa0860b123f803cb2998c8e029e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e95c8bda427183987c8c00c01f847bea59360aa0860b123f803cb2998c8e029e->leave($__internal_e95c8bda427183987c8c00c01f847bea59360aa0860b123f803cb2998c8e029e_prof);

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
