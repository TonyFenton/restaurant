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
        $__internal_5fd462617dc321ae6ca203e892ba65cafcfea8067b846dcfa33a80f44af574b4 = $this->env->getExtension("native_profiler");
        $__internal_5fd462617dc321ae6ca203e892ba65cafcfea8067b846dcfa33a80f44af574b4->enter($__internal_5fd462617dc321ae6ca203e892ba65cafcfea8067b846dcfa33a80f44af574b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fd462617dc321ae6ca203e892ba65cafcfea8067b846dcfa33a80f44af574b4->leave($__internal_5fd462617dc321ae6ca203e892ba65cafcfea8067b846dcfa33a80f44af574b4_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8d1d6a3a6dce6a486e9837f0c42ff1280e02edca941016abc4a235aa15a48f22 = $this->env->getExtension("native_profiler");
        $__internal_8d1d6a3a6dce6a486e9837f0c42ff1280e02edca941016abc4a235aa15a48f22->enter($__internal_8d1d6a3a6dce6a486e9837f0c42ff1280e02edca941016abc4a235aa15a48f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_8d1d6a3a6dce6a486e9837f0c42ff1280e02edca941016abc4a235aa15a48f22->leave($__internal_8d1d6a3a6dce6a486e9837f0c42ff1280e02edca941016abc4a235aa15a48f22_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_05898b3171c845dc67a6b732201b3ec30407f6a19e42d425123f608c06fe764d = $this->env->getExtension("native_profiler");
        $__internal_05898b3171c845dc67a6b732201b3ec30407f6a19e42d425123f608c06fe764d->enter($__internal_05898b3171c845dc67a6b732201b3ec30407f6a19e42d425123f608c06fe764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 18)->display($context);
        
        $__internal_05898b3171c845dc67a6b732201b3ec30407f6a19e42d425123f608c06fe764d->leave($__internal_05898b3171c845dc67a6b732201b3ec30407f6a19e42d425123f608c06fe764d_prof);

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
