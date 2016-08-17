<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e816e22dbb92d6e3fc38bd41cbaab1074a255f5db3688ec597db78efad850e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f96ba599332f950ae66b24b99ac01c2a11a5f73b87141d52f846cfbd915d8234 = $this->env->getExtension("native_profiler");
        $__internal_f96ba599332f950ae66b24b99ac01c2a11a5f73b87141d52f846cfbd915d8234->enter($__internal_f96ba599332f950ae66b24b99ac01c2a11a5f73b87141d52f846cfbd915d8234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f96ba599332f950ae66b24b99ac01c2a11a5f73b87141d52f846cfbd915d8234->leave($__internal_f96ba599332f950ae66b24b99ac01c2a11a5f73b87141d52f846cfbd915d8234_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_81cb47d2766bafd59b03f32ba2639ccbbc72b10e0268f4e3616220206beadeb6 = $this->env->getExtension("native_profiler");
        $__internal_81cb47d2766bafd59b03f32ba2639ccbbc72b10e0268f4e3616220206beadeb6->enter($__internal_81cb47d2766bafd59b03f32ba2639ccbbc72b10e0268f4e3616220206beadeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
\t\t\tEdycja
\t\t</li>
\t</ol>
";
        
        $__internal_81cb47d2766bafd59b03f32ba2639ccbbc72b10e0268f4e3616220206beadeb6->leave($__internal_81cb47d2766bafd59b03f32ba2639ccbbc72b10e0268f4e3616220206beadeb6_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d7e273e73c7d143eb76cd4bb946b498382bed6c8bbb1f3bb84238c2a9b97bc2 = $this->env->getExtension("native_profiler");
        $__internal_0d7e273e73c7d143eb76cd4bb946b498382bed6c8bbb1f3bb84238c2a9b97bc2->enter($__internal_0d7e273e73c7d143eb76cd4bb946b498382bed6c8bbb1f3bb84238c2a9b97bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 18)->display($context);
        
        $__internal_0d7e273e73c7d143eb76cd4bb946b498382bed6c8bbb1f3bb84238c2a9b97bc2->leave($__internal_0d7e273e73c7d143eb76cd4bb946b498382bed6c8bbb1f3bb84238c2a9b97bc2_prof);

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
/* 			Edycja*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock content %}*/
/* */
