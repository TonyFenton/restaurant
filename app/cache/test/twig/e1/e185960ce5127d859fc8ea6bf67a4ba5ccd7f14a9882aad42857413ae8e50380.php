<?php

/* page/index.html.twig */
class __TwigTemplate_10e8cf27eba79c7dcf3397eb3a8bec6909e67bc776be25879ac3ba9c9a4049bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "page/index.html.twig", 1);
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
        $__internal_6f6ccba4d4a0fa74f64d00336a8527ccfdeb8e8fc34f5abd5d52a68fe7745d32 = $this->env->getExtension("native_profiler");
        $__internal_6f6ccba4d4a0fa74f64d00336a8527ccfdeb8e8fc34f5abd5d52a68fe7745d32->enter($__internal_6f6ccba4d4a0fa74f64d00336a8527ccfdeb8e8fc34f5abd5d52a68fe7745d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6ccba4d4a0fa74f64d00336a8527ccfdeb8e8fc34f5abd5d52a68fe7745d32->leave($__internal_6f6ccba4d4a0fa74f64d00336a8527ccfdeb8e8fc34f5abd5d52a68fe7745d32_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5646d34343bcce8a813bd7f4e52739a5e24c00e87cb05c40fd37aad3660b20e4 = $this->env->getExtension("native_profiler");
        $__internal_5646d34343bcce8a813bd7f4e52739a5e24c00e87cb05c40fd37aad3660b20e4->enter($__internal_5646d34343bcce8a813bd7f4e52739a5e24c00e87cb05c40fd37aad3660b20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tStrony
\t\t</li>
\t</ol>
";
        
        $__internal_5646d34343bcce8a813bd7f4e52739a5e24c00e87cb05c40fd37aad3660b20e4->leave($__internal_5646d34343bcce8a813bd7f4e52739a5e24c00e87cb05c40fd37aad3660b20e4_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_80bcc669d9a808f134470931f6431b1a42b33e9165b67997926a6ebf65df64b5 = $this->env->getExtension("native_profiler");
        $__internal_80bcc669d9a808f134470931f6431b1a42b33e9165b67997926a6ebf65df64b5->enter($__internal_80bcc669d9a808f134470931f6431b1a42b33e9165b67997926a6ebf65df64b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\" id=\"heading\">
\t\t\t<h1>Strony</h1>
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("page_new");
        echo "\" role=\"button\">Dodaj nową</a>
\t\t</div>
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Adres</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 34
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 37
            if ( !twig_test_empty($this->getAttribute($context["page"], "parent", array()))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["page"], "slug", array()), "parent" => $this->getAttribute($this->getAttribute($context["page"], "parent", array()), "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mainPage", array("slug" => $this->getAttribute($context["page"], "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_80bcc669d9a808f134470931f6431b1a42b33e9165b67997926a6ebf65df64b5->leave($__internal_80bcc669d9a808f134470931f6431b1a42b33e9165b67997926a6ebf65df64b5_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  128 => 42,  122 => 40,  116 => 38,  114 => 37,  107 => 35,  104 => 34,  100 => 33,  87 => 23,  82 => 20,  73 => 17,  70 => 16,  65 => 15,  59 => 14,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li class="active">*/
/* 			Strony*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	{% for flash_message in app.session.flashBag.get('notice') %}*/
/* 		<div class="alert alert-info" role="alert">*/
/* 			{{ flash_message }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading" id="heading">*/
/* 			<h1>Strony</h1>*/
/* 			<a class="btn btn-success" href="{{ path('page_new') }}" role="button">Dodaj nową</a>*/
/* 		</div>*/
/* 		<table class="table table-striped table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th>Name</th>*/
/* 					<th>Adres</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			{% for page in pages %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path('page_edit', { 'id': page.id }) }}">{{ page.name }}</a></td>*/
/* 					<td>*/
/* 								{% if page.parent is not empty %}*/
/* 									{{ path('childPage', { 'slug': page.slug, 'parent': page.parent.slug }) }}*/
/* 								{% else %}*/
/* 									{{ path('mainPage', { 'slug': page.slug }) }}*/
/* 								{% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* {% endblock %}*/
/* */