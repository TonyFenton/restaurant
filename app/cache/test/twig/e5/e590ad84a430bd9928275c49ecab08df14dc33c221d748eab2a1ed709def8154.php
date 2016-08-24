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
        $__internal_a7729af722f2aaadae281d751255e2264a37e1e360ef1a7139b278eab04b0df5 = $this->env->getExtension("native_profiler");
        $__internal_a7729af722f2aaadae281d751255e2264a37e1e360ef1a7139b278eab04b0df5->enter($__internal_a7729af722f2aaadae281d751255e2264a37e1e360ef1a7139b278eab04b0df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7729af722f2aaadae281d751255e2264a37e1e360ef1a7139b278eab04b0df5->leave($__internal_a7729af722f2aaadae281d751255e2264a37e1e360ef1a7139b278eab04b0df5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db76175207eaaf51a2eda36e7fb5c632fbee052ab632521c12f037dd10c66502 = $this->env->getExtension("native_profiler");
        $__internal_db76175207eaaf51a2eda36e7fb5c632fbee052ab632521c12f037dd10c66502->enter($__internal_db76175207eaaf51a2eda36e7fb5c632fbee052ab632521c12f037dd10c66502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_db76175207eaaf51a2eda36e7fb5c632fbee052ab632521c12f037dd10c66502->leave($__internal_db76175207eaaf51a2eda36e7fb5c632fbee052ab632521c12f037dd10c66502_prof);

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
