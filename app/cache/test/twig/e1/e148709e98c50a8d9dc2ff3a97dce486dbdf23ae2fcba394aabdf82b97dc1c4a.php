<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e816e22dbb92d6e3fc38bd41cbaab1074a255f5db3688ec597db78efad850e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2f33c81b5ece643147e53ef7890090c10f6dd56b39a51ba09e0d69c4bcff98d7 = $this->env->getExtension("native_profiler");
        $__internal_2f33c81b5ece643147e53ef7890090c10f6dd56b39a51ba09e0d69c4bcff98d7->enter($__internal_2f33c81b5ece643147e53ef7890090c10f6dd56b39a51ba09e0d69c4bcff98d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f33c81b5ece643147e53ef7890090c10f6dd56b39a51ba09e0d69c4bcff98d7->leave($__internal_2f33c81b5ece643147e53ef7890090c10f6dd56b39a51ba09e0d69c4bcff98d7_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f90cee0bac916de39d70de0a9a1406e0d4aff400c05a546a001d93dd7d08f060 = $this->env->getExtension("native_profiler");
        $__internal_f90cee0bac916de39d70de0a9a1406e0d4aff400c05a546a001d93dd7d08f060->enter($__internal_f90cee0bac916de39d70de0a9a1406e0d4aff400c05a546a001d93dd7d08f060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
\t\t\tEdycja
\t\t</li>
\t</ol>
";
        
        $__internal_f90cee0bac916de39d70de0a9a1406e0d4aff400c05a546a001d93dd7d08f060->leave($__internal_f90cee0bac916de39d70de0a9a1406e0d4aff400c05a546a001d93dd7d08f060_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7385d5def224bd30013411c27b83e7a1546f65c61d52919ab93ff00cc94e0fe = $this->env->getExtension("native_profiler");
        $__internal_b7385d5def224bd30013411c27b83e7a1546f65c61d52919ab93ff00cc94e0fe->enter($__internal_b7385d5def224bd30013411c27b83e7a1546f65c61d52919ab93ff00cc94e0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 18)->display($context);
        
        $__internal_b7385d5def224bd30013411c27b83e7a1546f65c61d52919ab93ff00cc94e0fe->leave($__internal_b7385d5def224bd30013411c27b83e7a1546f65c61d52919ab93ff00cc94e0fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* 			Edycja*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	{% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock content %}*/
