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
        $__internal_b326969184fd4c6cccd5f92853318fcfb3b838da53e2a3382ac0a5c73cb509f8 = $this->env->getExtension("native_profiler");
        $__internal_b326969184fd4c6cccd5f92853318fcfb3b838da53e2a3382ac0a5c73cb509f8->enter($__internal_b326969184fd4c6cccd5f92853318fcfb3b838da53e2a3382ac0a5c73cb509f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b326969184fd4c6cccd5f92853318fcfb3b838da53e2a3382ac0a5c73cb509f8->leave($__internal_b326969184fd4c6cccd5f92853318fcfb3b838da53e2a3382ac0a5c73cb509f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31475f35ca4ce45ed0ebc5d56979a0afc7ae758fa03ae1491d1a42c27eea4bb1 = $this->env->getExtension("native_profiler");
        $__internal_31475f35ca4ce45ed0ebc5d56979a0afc7ae758fa03ae1491d1a42c27eea4bb1->enter($__internal_31475f35ca4ce45ed0ebc5d56979a0afc7ae758fa03ae1491d1a42c27eea4bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_31475f35ca4ce45ed0ebc5d56979a0afc7ae758fa03ae1491d1a42c27eea4bb1->leave($__internal_31475f35ca4ce45ed0ebc5d56979a0afc7ae758fa03ae1491d1a42c27eea4bb1_prof);

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
