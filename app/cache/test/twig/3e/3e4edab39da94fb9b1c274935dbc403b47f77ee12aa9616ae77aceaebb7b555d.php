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
        $__internal_53464f3f330b8bd34755c6974a5e76e1d05230bf09d30bb1bb0db4534f06419a = $this->env->getExtension("native_profiler");
        $__internal_53464f3f330b8bd34755c6974a5e76e1d05230bf09d30bb1bb0db4534f06419a->enter($__internal_53464f3f330b8bd34755c6974a5e76e1d05230bf09d30bb1bb0db4534f06419a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53464f3f330b8bd34755c6974a5e76e1d05230bf09d30bb1bb0db4534f06419a->leave($__internal_53464f3f330b8bd34755c6974a5e76e1d05230bf09d30bb1bb0db4534f06419a_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3fb87ea3ce0fe438569e955947c2b5dae932a75c064fc91f7d6d0fa7a4b1dcc6 = $this->env->getExtension("native_profiler");
        $__internal_3fb87ea3ce0fe438569e955947c2b5dae932a75c064fc91f7d6d0fa7a4b1dcc6->enter($__internal_3fb87ea3ce0fe438569e955947c2b5dae932a75c064fc91f7d6d0fa7a4b1dcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_3fb87ea3ce0fe438569e955947c2b5dae932a75c064fc91f7d6d0fa7a4b1dcc6->leave($__internal_3fb87ea3ce0fe438569e955947c2b5dae932a75c064fc91f7d6d0fa7a4b1dcc6_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c3e7b81d8df0d04067f71f86ec24d10ae16612bb11fcfc94dfa11f3eae35d41 = $this->env->getExtension("native_profiler");
        $__internal_2c3e7b81d8df0d04067f71f86ec24d10ae16612bb11fcfc94dfa11f3eae35d41->enter($__internal_2c3e7b81d8df0d04067f71f86ec24d10ae16612bb11fcfc94dfa11f3eae35d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 18)->display($context);
        
        $__internal_2c3e7b81d8df0d04067f71f86ec24d10ae16612bb11fcfc94dfa11f3eae35d41->leave($__internal_2c3e7b81d8df0d04067f71f86ec24d10ae16612bb11fcfc94dfa11f3eae35d41_prof);

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
