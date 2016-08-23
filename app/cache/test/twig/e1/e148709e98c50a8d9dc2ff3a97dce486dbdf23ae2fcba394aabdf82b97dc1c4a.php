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
        $__internal_055249f2cfd330dd705f44ae0d47a7537d995c769ce0ecea863132bb0ec8db09 = $this->env->getExtension("native_profiler");
        $__internal_055249f2cfd330dd705f44ae0d47a7537d995c769ce0ecea863132bb0ec8db09->enter($__internal_055249f2cfd330dd705f44ae0d47a7537d995c769ce0ecea863132bb0ec8db09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_055249f2cfd330dd705f44ae0d47a7537d995c769ce0ecea863132bb0ec8db09->leave($__internal_055249f2cfd330dd705f44ae0d47a7537d995c769ce0ecea863132bb0ec8db09_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_92001930ee73ef1322e5b3b47e77de1233081a169681eb87e30b0c78702c1be5 = $this->env->getExtension("native_profiler");
        $__internal_92001930ee73ef1322e5b3b47e77de1233081a169681eb87e30b0c78702c1be5->enter($__internal_92001930ee73ef1322e5b3b47e77de1233081a169681eb87e30b0c78702c1be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_92001930ee73ef1322e5b3b47e77de1233081a169681eb87e30b0c78702c1be5->leave($__internal_92001930ee73ef1322e5b3b47e77de1233081a169681eb87e30b0c78702c1be5_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_23dade171edb78c3b317e2e46e06b4b38ff982ff559c7c03a7e2940ee512bc4d = $this->env->getExtension("native_profiler");
        $__internal_23dade171edb78c3b317e2e46e06b4b38ff982ff559c7c03a7e2940ee512bc4d->enter($__internal_23dade171edb78c3b317e2e46e06b4b38ff982ff559c7c03a7e2940ee512bc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 18)->display($context);
        
        $__internal_23dade171edb78c3b317e2e46e06b4b38ff982ff559c7c03a7e2940ee512bc4d->leave($__internal_23dade171edb78c3b317e2e46e06b4b38ff982ff559c7c03a7e2940ee512bc4d_prof);

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
/* 	{% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock content %}*/
/* */
