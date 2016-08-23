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
        $__internal_e144436dc5ebef24c41416e3ee42f3540432d90bc4a5afe7243d8b02a61bf6d2 = $this->env->getExtension("native_profiler");
        $__internal_e144436dc5ebef24c41416e3ee42f3540432d90bc4a5afe7243d8b02a61bf6d2->enter($__internal_e144436dc5ebef24c41416e3ee42f3540432d90bc4a5afe7243d8b02a61bf6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e144436dc5ebef24c41416e3ee42f3540432d90bc4a5afe7243d8b02a61bf6d2->leave($__internal_e144436dc5ebef24c41416e3ee42f3540432d90bc4a5afe7243d8b02a61bf6d2_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_23e51189b27881c321251cb4c7c7414390804a7c96c08f1713e0b79d72902846 = $this->env->getExtension("native_profiler");
        $__internal_23e51189b27881c321251cb4c7c7414390804a7c96c08f1713e0b79d72902846->enter($__internal_23e51189b27881c321251cb4c7c7414390804a7c96c08f1713e0b79d72902846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_23e51189b27881c321251cb4c7c7414390804a7c96c08f1713e0b79d72902846->leave($__internal_23e51189b27881c321251cb4c7c7414390804a7c96c08f1713e0b79d72902846_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_b731b4bea3bf74c6fb6dee8f35c3532b57a31988876c702ac72dcd4c486c93a5 = $this->env->getExtension("native_profiler");
        $__internal_b731b4bea3bf74c6fb6dee8f35c3532b57a31988876c702ac72dcd4c486c93a5->enter($__internal_b731b4bea3bf74c6fb6dee8f35c3532b57a31988876c702ac72dcd4c486c93a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 18)->display($context);
        
        $__internal_b731b4bea3bf74c6fb6dee8f35c3532b57a31988876c702ac72dcd4c486c93a5->leave($__internal_b731b4bea3bf74c6fb6dee8f35c3532b57a31988876c702ac72dcd4c486c93a5_prof);

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
