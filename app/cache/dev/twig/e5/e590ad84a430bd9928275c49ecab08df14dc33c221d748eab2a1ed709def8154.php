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
        $__internal_22d340dbcfdf39711958f879415254818e6b2cc713573a65ef3c77c43ed5ea69 = $this->env->getExtension("native_profiler");
        $__internal_22d340dbcfdf39711958f879415254818e6b2cc713573a65ef3c77c43ed5ea69->enter($__internal_22d340dbcfdf39711958f879415254818e6b2cc713573a65ef3c77c43ed5ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d340dbcfdf39711958f879415254818e6b2cc713573a65ef3c77c43ed5ea69->leave($__internal_22d340dbcfdf39711958f879415254818e6b2cc713573a65ef3c77c43ed5ea69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf6f1f2790987da65ab2f82d67069e9df5debdddeea8c828ebdbca67bc19ea0a = $this->env->getExtension("native_profiler");
        $__internal_cf6f1f2790987da65ab2f82d67069e9df5debdddeea8c828ebdbca67bc19ea0a->enter($__internal_cf6f1f2790987da65ab2f82d67069e9df5debdddeea8c828ebdbca67bc19ea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cf6f1f2790987da65ab2f82d67069e9df5debdddeea8c828ebdbca67bc19ea0a->leave($__internal_cf6f1f2790987da65ab2f82d67069e9df5debdddeea8c828ebdbca67bc19ea0a_prof);

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
