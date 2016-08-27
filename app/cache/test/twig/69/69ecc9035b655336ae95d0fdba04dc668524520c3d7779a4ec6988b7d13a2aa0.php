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
        $__internal_b42d8611a2d8e84bf956d8b3df5c8739e02538f56587fcf2e2ca57d2d65685c1 = $this->env->getExtension("native_profiler");
        $__internal_b42d8611a2d8e84bf956d8b3df5c8739e02538f56587fcf2e2ca57d2d65685c1->enter($__internal_b42d8611a2d8e84bf956d8b3df5c8739e02538f56587fcf2e2ca57d2d65685c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42d8611a2d8e84bf956d8b3df5c8739e02538f56587fcf2e2ca57d2d65685c1->leave($__internal_b42d8611a2d8e84bf956d8b3df5c8739e02538f56587fcf2e2ca57d2d65685c1_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a174ab2fd7bdb2b75a2d955a9b59f4d49ad2e1904fc89b13136afb01e8816d77 = $this->env->getExtension("native_profiler");
        $__internal_a174ab2fd7bdb2b75a2d955a9b59f4d49ad2e1904fc89b13136afb01e8816d77->enter($__internal_a174ab2fd7bdb2b75a2d955a9b59f4d49ad2e1904fc89b13136afb01e8816d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_a174ab2fd7bdb2b75a2d955a9b59f4d49ad2e1904fc89b13136afb01e8816d77->leave($__internal_a174ab2fd7bdb2b75a2d955a9b59f4d49ad2e1904fc89b13136afb01e8816d77_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_28a0f317b1d21964feeae64b862b66513f5e5232874f4ca50d4a2ca5ae84a59e = $this->env->getExtension("native_profiler");
        $__internal_28a0f317b1d21964feeae64b862b66513f5e5232874f4ca50d4a2ca5ae84a59e->enter($__internal_28a0f317b1d21964feeae64b862b66513f5e5232874f4ca50d4a2ca5ae84a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_28a0f317b1d21964feeae64b862b66513f5e5232874f4ca50d4a2ca5ae84a59e->leave($__internal_28a0f317b1d21964feeae64b862b66513f5e5232874f4ca50d4a2ca5ae84a59e_prof);

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
