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
        $__internal_46b3dff0b07ddd9fcc3993fb42e1f8999a11119ff2fe5ad21d7eaaa9d9ce905b = $this->env->getExtension("native_profiler");
        $__internal_46b3dff0b07ddd9fcc3993fb42e1f8999a11119ff2fe5ad21d7eaaa9d9ce905b->enter($__internal_46b3dff0b07ddd9fcc3993fb42e1f8999a11119ff2fe5ad21d7eaaa9d9ce905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b3dff0b07ddd9fcc3993fb42e1f8999a11119ff2fe5ad21d7eaaa9d9ce905b->leave($__internal_46b3dff0b07ddd9fcc3993fb42e1f8999a11119ff2fe5ad21d7eaaa9d9ce905b_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e17967d48fcfef60bce83d95bd799974d42356c7c50e2fd1fc3728517b590c41 = $this->env->getExtension("native_profiler");
        $__internal_e17967d48fcfef60bce83d95bd799974d42356c7c50e2fd1fc3728517b590c41->enter($__internal_e17967d48fcfef60bce83d95bd799974d42356c7c50e2fd1fc3728517b590c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_e17967d48fcfef60bce83d95bd799974d42356c7c50e2fd1fc3728517b590c41->leave($__internal_e17967d48fcfef60bce83d95bd799974d42356c7c50e2fd1fc3728517b590c41_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_412be6e8677ae7e81d584e1eed031f084b0547d8c8b332a5bc53ffe33b05c052 = $this->env->getExtension("native_profiler");
        $__internal_412be6e8677ae7e81d584e1eed031f084b0547d8c8b332a5bc53ffe33b05c052->enter($__internal_412be6e8677ae7e81d584e1eed031f084b0547d8c8b332a5bc53ffe33b05c052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 18)->display($context);
        
        $__internal_412be6e8677ae7e81d584e1eed031f084b0547d8c8b332a5bc53ffe33b05c052->leave($__internal_412be6e8677ae7e81d584e1eed031f084b0547d8c8b332a5bc53ffe33b05c052_prof);

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
