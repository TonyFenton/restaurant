<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_60657d0119452e212a77be7726b19e999e6f02855f3ce2a1a88d32f471a322b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2047938b359ec9950e81c5d36f2f6fc04d3aae96308b0385fcb3d91f49db864e = $this->env->getExtension("native_profiler");
        $__internal_2047938b359ec9950e81c5d36f2f6fc04d3aae96308b0385fcb3d91f49db864e->enter($__internal_2047938b359ec9950e81c5d36f2f6fc04d3aae96308b0385fcb3d91f49db864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2047938b359ec9950e81c5d36f2f6fc04d3aae96308b0385fcb3d91f49db864e->leave($__internal_2047938b359ec9950e81c5d36f2f6fc04d3aae96308b0385fcb3d91f49db864e_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e6dbe9a549ee1f8d16d8d80dfc718ffcf1c69918a3e43d77c84c9dc4061b48e1 = $this->env->getExtension("native_profiler");
        $__internal_e6dbe9a549ee1f8d16d8d80dfc718ffcf1c69918a3e43d77c84c9dc4061b48e1->enter($__internal_e6dbe9a549ee1f8d16d8d80dfc718ffcf1c69918a3e43d77c84c9dc4061b48e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
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
        
        $__internal_e6dbe9a549ee1f8d16d8d80dfc718ffcf1c69918a3e43d77c84c9dc4061b48e1->leave($__internal_e6dbe9a549ee1f8d16d8d80dfc718ffcf1c69918a3e43d77c84c9dc4061b48e1_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e8c1cb350cdb2548e018dd8154fa71b0eb4af09cf8bb44146d7321a37408e62 = $this->env->getExtension("native_profiler");
        $__internal_9e8c1cb350cdb2548e018dd8154fa71b0eb4af09cf8bb44146d7321a37408e62->enter($__internal_9e8c1cb350cdb2548e018dd8154fa71b0eb4af09cf8bb44146d7321a37408e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 18)->display($context);
        
        $__internal_9e8c1cb350cdb2548e018dd8154fa71b0eb4af09cf8bb44146d7321a37408e62->leave($__internal_9e8c1cb350cdb2548e018dd8154fa71b0eb4af09cf8bb44146d7321a37408e62_prof);

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
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_default_dashboard') }}">Panel</a>*/
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
