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
        $__internal_1b5ef296904162a8da3e669c8ff9022df520aeabe7979cd09e25f424e07433cd = $this->env->getExtension("native_profiler");
        $__internal_1b5ef296904162a8da3e669c8ff9022df520aeabe7979cd09e25f424e07433cd->enter($__internal_1b5ef296904162a8da3e669c8ff9022df520aeabe7979cd09e25f424e07433cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5ef296904162a8da3e669c8ff9022df520aeabe7979cd09e25f424e07433cd->leave($__internal_1b5ef296904162a8da3e669c8ff9022df520aeabe7979cd09e25f424e07433cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f61feabfe29a434774d5f190cbca832f744205ed227fc6be50e06337572991a4 = $this->env->getExtension("native_profiler");
        $__internal_f61feabfe29a434774d5f190cbca832f744205ed227fc6be50e06337572991a4->enter($__internal_f61feabfe29a434774d5f190cbca832f744205ed227fc6be50e06337572991a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f61feabfe29a434774d5f190cbca832f744205ed227fc6be50e06337572991a4->leave($__internal_f61feabfe29a434774d5f190cbca832f744205ed227fc6be50e06337572991a4_prof);

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
