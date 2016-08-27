<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e68038c507d06d5b2e0097d6d876ed61a2db01b9acd6d6fbab5d6ee3ccf847a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b66d66e3322b901344639b565bf148c5d9eb309fa54ac645f86a117de55b4595 = $this->env->getExtension("native_profiler");
        $__internal_b66d66e3322b901344639b565bf148c5d9eb309fa54ac645f86a117de55b4595->enter($__internal_b66d66e3322b901344639b565bf148c5d9eb309fa54ac645f86a117de55b4595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b66d66e3322b901344639b565bf148c5d9eb309fa54ac645f86a117de55b4595->leave($__internal_b66d66e3322b901344639b565bf148c5d9eb309fa54ac645f86a117de55b4595_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_62730e58609338ba429f7cc0ef0e0ba73f945b6eb950304391995a458bbce508 = $this->env->getExtension("native_profiler");
        $__internal_62730e58609338ba429f7cc0ef0e0ba73f945b6eb950304391995a458bbce508->enter($__internal_62730e58609338ba429f7cc0ef0e0ba73f945b6eb950304391995a458bbce508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">użytkownicy</a>
\t\t</li>\t\t
\t\t<li class=\"active\">
\t\t\tRejestracja
\t\t</li>
\t</ol>
";
        
        $__internal_62730e58609338ba429f7cc0ef0e0ba73f945b6eb950304391995a458bbce508->leave($__internal_62730e58609338ba429f7cc0ef0e0ba73f945b6eb950304391995a458bbce508_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_fffa7efad2d7458c9f35c1fb731ac036455539dc9cbab68cdf50ef526d36da08 = $this->env->getExtension("native_profiler");
        $__internal_fffa7efad2d7458c9f35c1fb731ac036455539dc9cbab68cdf50ef526d36da08->enter($__internal_fffa7efad2d7458c9f35c1fb731ac036455539dc9cbab68cdf50ef526d36da08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_fffa7efad2d7458c9f35c1fb731ac036455539dc9cbab68cdf50ef526d36da08->leave($__internal_fffa7efad2d7458c9f35c1fb731ac036455539dc9cbab68cdf50ef526d36da08_prof);

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
/* {% extends "admin_layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('user_index') }}">użytkownicy</a>*/
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
