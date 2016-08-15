<?php

/* admin/page/index.html.twig */
class __TwigTemplate_ab24e9a9ca00205a4c946bfeaf5478d8d5826149aa3a308b33cbbae1f52291c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/index.html.twig", 1);
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
        $__internal_e79637b574c3503703558f257ff56afff863ecb727df3fc94d10c0f734b281a8 = $this->env->getExtension("native_profiler");
        $__internal_e79637b574c3503703558f257ff56afff863ecb727df3fc94d10c0f734b281a8->enter($__internal_e79637b574c3503703558f257ff56afff863ecb727df3fc94d10c0f734b281a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79637b574c3503703558f257ff56afff863ecb727df3fc94d10c0f734b281a8->leave($__internal_e79637b574c3503703558f257ff56afff863ecb727df3fc94d10c0f734b281a8_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5164f73466105a697f72997afc4d7024f65ad92bec093ce0d5ff9ac0563e45ba = $this->env->getExtension("native_profiler");
        $__internal_5164f73466105a697f72997afc4d7024f65ad92bec093ce0d5ff9ac0563e45ba->enter($__internal_5164f73466105a697f72997afc4d7024f65ad92bec093ce0d5ff9ac0563e45ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<li class=\"active\">
\t\tStrony
\t</li>
";
        
        $__internal_5164f73466105a697f72997afc4d7024f65ad92bec093ce0d5ff9ac0563e45ba->leave($__internal_5164f73466105a697f72997afc4d7024f65ad92bec093ce0d5ff9ac0563e45ba_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_a48bf06868360dcb160b11471c2bdb94614abb63bf9608e139d2ea8aabd51036 = $this->env->getExtension("native_profiler");
        $__internal_a48bf06868360dcb160b11471c2bdb94614abb63bf9608e139d2ea8aabd51036->enter($__internal_a48bf06868360dcb160b11471c2bdb94614abb63bf9608e139d2ea8aabd51036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\" id=\"heading\">
\t\t\t<h1>Strony</h1>
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_page_new");
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 29
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 32
            if ( !twig_test_empty($this->getAttribute($context["page"], "parent", array()))) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["page"], "slug", array()), "parent" => $this->getAttribute($this->getAttribute($context["page"], "parent", array()), "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mainPage", array("slug" => $this->getAttribute($context["page"], "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_a48bf06868360dcb160b11471c2bdb94614abb63bf9608e139d2ea8aabd51036->leave($__internal_a48bf06868360dcb160b11471c2bdb94614abb63bf9608e139d2ea8aabd51036_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  120 => 37,  114 => 35,  108 => 33,  106 => 32,  99 => 30,  96 => 29,  92 => 28,  79 => 18,  74 => 15,  65 => 12,  62 => 11,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<li class="active">*/
/* 		Strony*/
/* 	</li>*/
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
/* 			<a class="btn btn-success" href="{{ path('admin_page_new') }}" role="button">Dodaj nową</a>*/
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
/* 					<td><a href="{{ path('admin_page_edit', { 'id': page.id }) }}">{{ page.name }}</a></td>*/
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
