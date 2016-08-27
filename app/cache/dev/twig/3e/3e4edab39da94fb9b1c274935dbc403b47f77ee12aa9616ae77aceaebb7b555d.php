<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_60657d0119452e212a77be7726b19e999e6f02855f3ce2a1a88d32f471a322b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eca17c89ad7c8f1783085c80142ac1a0fafc04fc4ab2c8f9371c13d6aec0dcb4 = $this->env->getExtension("native_profiler");
        $__internal_eca17c89ad7c8f1783085c80142ac1a0fafc04fc4ab2c8f9371c13d6aec0dcb4->enter($__internal_eca17c89ad7c8f1783085c80142ac1a0fafc04fc4ab2c8f9371c13d6aec0dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eca17c89ad7c8f1783085c80142ac1a0fafc04fc4ab2c8f9371c13d6aec0dcb4->leave($__internal_eca17c89ad7c8f1783085c80142ac1a0fafc04fc4ab2c8f9371c13d6aec0dcb4_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_55ab3ead1dc3cf1ee9b2be1578f0b10bfb6a453e23930fdd3b81a875228dbd18 = $this->env->getExtension("native_profiler");
        $__internal_55ab3ead1dc3cf1ee9b2be1578f0b10bfb6a453e23930fdd3b81a875228dbd18->enter($__internal_55ab3ead1dc3cf1ee9b2be1578f0b10bfb6a453e23930fdd3b81a875228dbd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t</li>\t\t
\t\t<li class=\"active\">
\t\t\tZmiana hasła
\t\t</li>
\t</ol>
";
        
        $__internal_55ab3ead1dc3cf1ee9b2be1578f0b10bfb6a453e23930fdd3b81a875228dbd18->leave($__internal_55ab3ead1dc3cf1ee9b2be1578f0b10bfb6a453e23930fdd3b81a875228dbd18_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_b681a848cb2ea1fa355d0a884c3256595f6526030c53425dc8f94c146d090a55 = $this->env->getExtension("native_profiler");
        $__internal_b681a848cb2ea1fa355d0a884c3256595f6526030c53425dc8f94c146d090a55->enter($__internal_b681a848cb2ea1fa355d0a884c3256595f6526030c53425dc8f94c146d090a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 18)->display($context);
        
        $__internal_b681a848cb2ea1fa355d0a884c3256595f6526030c53425dc8f94c146d090a55->leave($__internal_b681a848cb2ea1fa355d0a884c3256595f6526030c53425dc8f94c146d090a55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "admin_layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_profile_show') }}">Moje konto</a>*/
/* 		</li>		*/
/* 		<li class="active">*/
/* 			Zmiana hasła*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	{% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock content %}*/
/* */
