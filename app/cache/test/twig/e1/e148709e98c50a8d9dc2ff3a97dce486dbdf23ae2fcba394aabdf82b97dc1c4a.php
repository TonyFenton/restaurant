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
        $__internal_33e5a356af4eac2ef63eed89ad3d05fa466a9b6ff297ff146b3829e7a7f9e22c = $this->env->getExtension("native_profiler");
        $__internal_33e5a356af4eac2ef63eed89ad3d05fa466a9b6ff297ff146b3829e7a7f9e22c->enter($__internal_33e5a356af4eac2ef63eed89ad3d05fa466a9b6ff297ff146b3829e7a7f9e22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e5a356af4eac2ef63eed89ad3d05fa466a9b6ff297ff146b3829e7a7f9e22c->leave($__internal_33e5a356af4eac2ef63eed89ad3d05fa466a9b6ff297ff146b3829e7a7f9e22c_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0ad93770e61fa2339ef1aecbc253cbb65f1fd8daa13302b817fa5ad80843c057 = $this->env->getExtension("native_profiler");
        $__internal_0ad93770e61fa2339ef1aecbc253cbb65f1fd8daa13302b817fa5ad80843c057->enter($__internal_0ad93770e61fa2339ef1aecbc253cbb65f1fd8daa13302b817fa5ad80843c057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_0ad93770e61fa2339ef1aecbc253cbb65f1fd8daa13302b817fa5ad80843c057->leave($__internal_0ad93770e61fa2339ef1aecbc253cbb65f1fd8daa13302b817fa5ad80843c057_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_5bbc5670da76835da1fd9bb61fd460cd2345ecb07f3f16987784c714c8d4ff6c = $this->env->getExtension("native_profiler");
        $__internal_5bbc5670da76835da1fd9bb61fd460cd2345ecb07f3f16987784c714c8d4ff6c->enter($__internal_5bbc5670da76835da1fd9bb61fd460cd2345ecb07f3f16987784c714c8d4ff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 18)->display($context);
        
        $__internal_5bbc5670da76835da1fd9bb61fd460cd2345ecb07f3f16987784c714c8d4ff6c->leave($__internal_5bbc5670da76835da1fd9bb61fd460cd2345ecb07f3f16987784c714c8d4ff6c_prof);

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
/* */
