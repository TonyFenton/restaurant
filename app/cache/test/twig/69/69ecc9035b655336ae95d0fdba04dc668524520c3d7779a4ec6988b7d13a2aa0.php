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
        $__internal_3b25c2353c74155e14b65916218eeee624dfcd6bb1fec4c4a55a450f35fe7b74 = $this->env->getExtension("native_profiler");
        $__internal_3b25c2353c74155e14b65916218eeee624dfcd6bb1fec4c4a55a450f35fe7b74->enter($__internal_3b25c2353c74155e14b65916218eeee624dfcd6bb1fec4c4a55a450f35fe7b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b25c2353c74155e14b65916218eeee624dfcd6bb1fec4c4a55a450f35fe7b74->leave($__internal_3b25c2353c74155e14b65916218eeee624dfcd6bb1fec4c4a55a450f35fe7b74_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_97fafa181725dfd353d99c4695a5ac35ca45f5fd59f87b21d2ca5629ac8a2088 = $this->env->getExtension("native_profiler");
        $__internal_97fafa181725dfd353d99c4695a5ac35ca45f5fd59f87b21d2ca5629ac8a2088->enter($__internal_97fafa181725dfd353d99c4695a5ac35ca45f5fd59f87b21d2ca5629ac8a2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_97fafa181725dfd353d99c4695a5ac35ca45f5fd59f87b21d2ca5629ac8a2088->leave($__internal_97fafa181725dfd353d99c4695a5ac35ca45f5fd59f87b21d2ca5629ac8a2088_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_decc09d400c681d6e32dce08c2376d449b4eb12fb1d9534d18ac79645ec06a28 = $this->env->getExtension("native_profiler");
        $__internal_decc09d400c681d6e32dce08c2376d449b4eb12fb1d9534d18ac79645ec06a28->enter($__internal_decc09d400c681d6e32dce08c2376d449b4eb12fb1d9534d18ac79645ec06a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_decc09d400c681d6e32dce08c2376d449b4eb12fb1d9534d18ac79645ec06a28->leave($__internal_decc09d400c681d6e32dce08c2376d449b4eb12fb1d9534d18ac79645ec06a28_prof);

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
