<?php

/* admin/footer/index.html.twig */
class __TwigTemplate_cc1ab58422ec9e1f4c90ad396316b18dd1d4f3acf8e794db45826af2b44f44cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/footer/index.html.twig", 1);
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
        $__internal_be87f8cda2f91a4042e3ad3e74faca99cc2cb4dfd5e889ee65a006a42514a3fc = $this->env->getExtension("native_profiler");
        $__internal_be87f8cda2f91a4042e3ad3e74faca99cc2cb4dfd5e889ee65a006a42514a3fc->enter($__internal_be87f8cda2f91a4042e3ad3e74faca99cc2cb4dfd5e889ee65a006a42514a3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be87f8cda2f91a4042e3ad3e74faca99cc2cb4dfd5e889ee65a006a42514a3fc->leave($__internal_be87f8cda2f91a4042e3ad3e74faca99cc2cb4dfd5e889ee65a006a42514a3fc_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c34f7a407bce1b7c21a6e717d74b326ba46ed983d941d641e46cbc6b206e3a39 = $this->env->getExtension("native_profiler");
        $__internal_c34f7a407bce1b7c21a6e717d74b326ba46ed983d941d641e46cbc6b206e3a39->enter($__internal_c34f7a407bce1b7c21a6e717d74b326ba46ed983d941d641e46cbc6b206e3a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tStopki
\t\t</li>
\t</ol>
";
        
        $__internal_c34f7a407bce1b7c21a6e717d74b326ba46ed983d941d641e46cbc6b206e3a39->leave($__internal_c34f7a407bce1b7c21a6e717d74b326ba46ed983d941d641e46cbc6b206e3a39_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_324da285dcc0b7858d44b169c4266b196090b87278c9c80dfa85628380522558 = $this->env->getExtension("native_profiler");
        $__internal_324da285dcc0b7858d44b169c4266b196090b87278c9c80dfa85628380522558->enter($__internal_324da285dcc0b7858d44b169c4266b196090b87278c9c80dfa85628380522558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t\t<h1>Stopki</h1>
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_footer_new");
        echo "\" role=\"button\">Dodaj nową</a>
\t\t</div>
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) ? $context["footers"] : $this->getContext($context, "footers")));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 33
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_footer_edit", array("id" => $this->getAttribute($context["footer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["footer"], "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>

";
        
        $__internal_324da285dcc0b7858d44b169c4266b196090b87278c9c80dfa85628380522558->leave($__internal_324da285dcc0b7858d44b169c4266b196090b87278c9c80dfa85628380522558_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  106 => 34,  103 => 33,  99 => 32,  87 => 23,  82 => 20,  73 => 17,  70 => 16,  65 => 15,  59 => 14,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_default_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li class="active">*/
/* 			Stopki*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* 	*/
/* {% block content %}*/
/* 	{% for flash_message in app.session.flashBag.get('notice') %}*/
/* 		<div class="alert alert-info" role="alert">*/
/* 			{{ flash_message }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading" id="heading">*/
/* 			<h1>Stopki</h1>*/
/* 			<a class="btn btn-success" href="{{ path('admin_footer_new') }}" role="button">Dodaj nową</a>*/
/* 		</div>*/
/* 		<table class="table table-striped table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th>Name</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			{% for footer in footers %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path('admin_footer_edit', { 'id': footer.id }) }}">{{ footer.name }}</a></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
