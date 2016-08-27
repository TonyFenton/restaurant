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
        $__internal_e6686e8c170beffa6c6bc59d1691704052b7c610c57b45fd2ff938c5e0f3a23f = $this->env->getExtension("native_profiler");
        $__internal_e6686e8c170beffa6c6bc59d1691704052b7c610c57b45fd2ff938c5e0f3a23f->enter($__internal_e6686e8c170beffa6c6bc59d1691704052b7c610c57b45fd2ff938c5e0f3a23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6686e8c170beffa6c6bc59d1691704052b7c610c57b45fd2ff938c5e0f3a23f->leave($__internal_e6686e8c170beffa6c6bc59d1691704052b7c610c57b45fd2ff938c5e0f3a23f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e295dfbc297d55abe43fe66169ef7c52c450b6ee9e5d7bb65124e9c89fbb86a8 = $this->env->getExtension("native_profiler");
        $__internal_e295dfbc297d55abe43fe66169ef7c52c450b6ee9e5d7bb65124e9c89fbb86a8->enter($__internal_e295dfbc297d55abe43fe66169ef7c52c450b6ee9e5d7bb65124e9c89fbb86a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e295dfbc297d55abe43fe66169ef7c52c450b6ee9e5d7bb65124e9c89fbb86a8->leave($__internal_e295dfbc297d55abe43fe66169ef7c52c450b6ee9e5d7bb65124e9c89fbb86a8_prof);

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
