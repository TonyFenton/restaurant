<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e57a8067740b95c37061b12b33cf075b7c89bc7569798086aaf1db9642ecbebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5b1dc06e11a6c969ed0a39ba3cd753c15d3b36691d6cd2d12d69d2f6e51a88c1 = $this->env->getExtension("native_profiler");
        $__internal_5b1dc06e11a6c969ed0a39ba3cd753c15d3b36691d6cd2d12d69d2f6e51a88c1->enter($__internal_5b1dc06e11a6c969ed0a39ba3cd753c15d3b36691d6cd2d12d69d2f6e51a88c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b1dc06e11a6c969ed0a39ba3cd753c15d3b36691d6cd2d12d69d2f6e51a88c1->leave($__internal_5b1dc06e11a6c969ed0a39ba3cd753c15d3b36691d6cd2d12d69d2f6e51a88c1_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2194e693d2cb858cbee0565de9b8e2755b5a183f4292cc46fd617f69e8173678 = $this->env->getExtension("native_profiler");
        $__internal_2194e693d2cb858cbee0565de9b8e2755b5a183f4292cc46fd617f69e8173678->enter($__internal_2194e693d2cb858cbee0565de9b8e2755b5a183f4292cc46fd617f69e8173678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tMoje Konto
\t\t</li>
\t</ol>
";
        
        $__internal_2194e693d2cb858cbee0565de9b8e2755b5a183f4292cc46fd617f69e8173678->leave($__internal_2194e693d2cb858cbee0565de9b8e2755b5a183f4292cc46fd617f69e8173678_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_3859947f6b9e432f3a97d6071d5a313f23ea37f70f04203d2e47428da56f354a = $this->env->getExtension("native_profiler");
        $__internal_3859947f6b9e432f3a97d6071d5a313f23ea37f70f04203d2e47428da56f354a->enter($__internal_3859947f6b9e432f3a97d6071d5a313f23ea37f70f04203d2e47428da56f354a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3859947f6b9e432f3a97d6071d5a313f23ea37f70f04203d2e47428da56f354a->leave($__internal_3859947f6b9e432f3a97d6071d5a313f23ea37f70f04203d2e47428da56f354a_prof);

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
/* {% extends "admin_layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
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
