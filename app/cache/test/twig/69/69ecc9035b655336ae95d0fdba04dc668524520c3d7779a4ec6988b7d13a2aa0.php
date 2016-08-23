<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e68038c507d06d5b2e0097d6d876ed61a2db01b9acd6d6fbab5d6ee3ccf847a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f8ba1e89c8ae3b5da6d0eb926dfda99002d6186017dd01f62c2205915b24016c = $this->env->getExtension("native_profiler");
        $__internal_f8ba1e89c8ae3b5da6d0eb926dfda99002d6186017dd01f62c2205915b24016c->enter($__internal_f8ba1e89c8ae3b5da6d0eb926dfda99002d6186017dd01f62c2205915b24016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ba1e89c8ae3b5da6d0eb926dfda99002d6186017dd01f62c2205915b24016c->leave($__internal_f8ba1e89c8ae3b5da6d0eb926dfda99002d6186017dd01f62c2205915b24016c_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_09f0f109edf3f72fc0f911ecd7fea7477891926cb77d1b73e357e55dc28cdaac = $this->env->getExtension("native_profiler");
        $__internal_09f0f109edf3f72fc0f911ecd7fea7477891926cb77d1b73e357e55dc28cdaac->enter($__internal_09f0f109edf3f72fc0f911ecd7fea7477891926cb77d1b73e357e55dc28cdaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        echo $this->env->getExtension('routing')->getPath("admin_user_index");
        echo "\">użytkownicy</a>
\t\t</li>\t\t
\t\t<li class=\"active\">
\t\t\tRejestracja
\t\t</li>
\t</ol>
";
        
        $__internal_09f0f109edf3f72fc0f911ecd7fea7477891926cb77d1b73e357e55dc28cdaac->leave($__internal_09f0f109edf3f72fc0f911ecd7fea7477891926cb77d1b73e357e55dc28cdaac_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_334a0b4c5520e1bb2a27a91bcd0f7991e4e3f248bc4bd0805b5e130e1f11de9d = $this->env->getExtension("native_profiler");
        $__internal_334a0b4c5520e1bb2a27a91bcd0f7991e4e3f248bc4bd0805b5e130e1f11de9d->enter($__internal_334a0b4c5520e1bb2a27a91bcd0f7991e4e3f248bc4bd0805b5e130e1f11de9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_334a0b4c5520e1bb2a27a91bcd0f7991e4e3f248bc4bd0805b5e130e1f11de9d->leave($__internal_334a0b4c5520e1bb2a27a91bcd0f7991e4e3f248bc4bd0805b5e130e1f11de9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* 			<a href="{{ path('admin_user_index') }}">użytkownicy</a>*/
/* 		</li>		*/
/* 		<li class="active">*/
/* 			Rejestracja*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock content %}*/
/* */
