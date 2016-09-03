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
        $__internal_b75589dc04f069a87d559340addf02d45967d3d2f340669200aab5736f3db630 = $this->env->getExtension("native_profiler");
        $__internal_b75589dc04f069a87d559340addf02d45967d3d2f340669200aab5736f3db630->enter($__internal_b75589dc04f069a87d559340addf02d45967d3d2f340669200aab5736f3db630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b75589dc04f069a87d559340addf02d45967d3d2f340669200aab5736f3db630->leave($__internal_b75589dc04f069a87d559340addf02d45967d3d2f340669200aab5736f3db630_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_17774d66edefbaa2b450c8083a8d90fc8383db80816b367f669062d56d00fdff = $this->env->getExtension("native_profiler");
        $__internal_17774d66edefbaa2b450c8083a8d90fc8383db80816b367f669062d56d00fdff->enter($__internal_17774d66edefbaa2b450c8083a8d90fc8383db80816b367f669062d56d00fdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_17774d66edefbaa2b450c8083a8d90fc8383db80816b367f669062d56d00fdff->leave($__internal_17774d66edefbaa2b450c8083a8d90fc8383db80816b367f669062d56d00fdff_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_356957880abb098152a0b215e3027485cf29959fa75424fc14a591a774c31e97 = $this->env->getExtension("native_profiler");
        $__internal_356957880abb098152a0b215e3027485cf29959fa75424fc14a591a774c31e97->enter($__internal_356957880abb098152a0b215e3027485cf29959fa75424fc14a591a774c31e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_356957880abb098152a0b215e3027485cf29959fa75424fc14a591a774c31e97->leave($__internal_356957880abb098152a0b215e3027485cf29959fa75424fc14a591a774c31e97_prof);

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
