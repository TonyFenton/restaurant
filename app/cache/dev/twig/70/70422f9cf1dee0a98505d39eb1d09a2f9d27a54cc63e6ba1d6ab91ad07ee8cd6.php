<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e57a8067740b95c37061b12b33cf075b7c89bc7569798086aaf1db9642ecbebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4fe639bc21173b36f4d3a26e69f125edf4906dd70560c1cc3f179486e7d3fa2b = $this->env->getExtension("native_profiler");
        $__internal_4fe639bc21173b36f4d3a26e69f125edf4906dd70560c1cc3f179486e7d3fa2b->enter($__internal_4fe639bc21173b36f4d3a26e69f125edf4906dd70560c1cc3f179486e7d3fa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe639bc21173b36f4d3a26e69f125edf4906dd70560c1cc3f179486e7d3fa2b->leave($__internal_4fe639bc21173b36f4d3a26e69f125edf4906dd70560c1cc3f179486e7d3fa2b_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_68769476971f9695f93caf1332b8018168cea9fdae5e9918246a5855c14b75e1 = $this->env->getExtension("native_profiler");
        $__internal_68769476971f9695f93caf1332b8018168cea9fdae5e9918246a5855c14b75e1->enter($__internal_68769476971f9695f93caf1332b8018168cea9fdae5e9918246a5855c14b75e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tMoje Konto
\t\t</li>
\t</ol>
";
        
        $__internal_68769476971f9695f93caf1332b8018168cea9fdae5e9918246a5855c14b75e1->leave($__internal_68769476971f9695f93caf1332b8018168cea9fdae5e9918246a5855c14b75e1_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f6d4b0691771e1ca88c9c5a43b24771713e4e4bca5988dcc5a0f978c64c57a4 = $this->env->getExtension("native_profiler");
        $__internal_4f6d4b0691771e1ca88c9c5a43b24771713e4e4bca5988dcc5a0f978c64c57a4->enter($__internal_4f6d4b0691771e1ca88c9c5a43b24771713e4e4bca5988dcc5a0f978c64c57a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert alert-info\" role=\"alert\">
                ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 23)->display($context);
        
        $__internal_4f6d4b0691771e1ca88c9c5a43b24771713e4e4bca5988dcc5a0f978c64c57a4->leave($__internal_4f6d4b0691771e1ca88c9c5a43b24771713e4e4bca5988dcc5a0f978c64c57a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  91 => 22,  82 => 19,  77 => 18,  72 => 17,  68 => 16,  65 => 15,  59 => 14,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_default_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li class="active">*/
/* 			Moje Konto*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% for type, messages in app.session.flashBag.all %}*/
/*         {% for message in messages %}*/
/* 			<div class="{{ type }} alert alert-info" role="alert">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/* 		{% endfor %}*/
/*     {% endfor %}*/
/* 	{% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock content %}*/
/* */