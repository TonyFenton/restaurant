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
        $__internal_bdeecce2760559d8329dc8278495e920d85e46ac453ae9f10aa0913efd02b3c6 = $this->env->getExtension("native_profiler");
        $__internal_bdeecce2760559d8329dc8278495e920d85e46ac453ae9f10aa0913efd02b3c6->enter($__internal_bdeecce2760559d8329dc8278495e920d85e46ac453ae9f10aa0913efd02b3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdeecce2760559d8329dc8278495e920d85e46ac453ae9f10aa0913efd02b3c6->leave($__internal_bdeecce2760559d8329dc8278495e920d85e46ac453ae9f10aa0913efd02b3c6_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_870f23250458985a99a19576bc38554e7afc2434f3b076eada3583408b998e83 = $this->env->getExtension("native_profiler");
        $__internal_870f23250458985a99a19576bc38554e7afc2434f3b076eada3583408b998e83->enter($__internal_870f23250458985a99a19576bc38554e7afc2434f3b076eada3583408b998e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<li class=\"active\">
\t\tStopki
\t</li>
";
        
        $__internal_870f23250458985a99a19576bc38554e7afc2434f3b076eada3583408b998e83->leave($__internal_870f23250458985a99a19576bc38554e7afc2434f3b076eada3583408b998e83_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1328d0c90be2d22365c34798d4bff02a5a3d1a83c812f3d7336c2de9a1cd6c2 = $this->env->getExtension("native_profiler");
        $__internal_c1328d0c90be2d22365c34798d4bff02a5a3d1a83c812f3d7336c2de9a1cd6c2->enter($__internal_c1328d0c90be2d22365c34798d4bff02a5a3d1a83c812f3d7336c2de9a1cd6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t\t<h1>Stopki</h1>
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 18
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) ? $context["footers"] : $this->getContext($context, "footers")));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 28
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 29
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
        // line 32
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>

";
        
        $__internal_c1328d0c90be2d22365c34798d4bff02a5a3d1a83c812f3d7336c2de9a1cd6c2->leave($__internal_c1328d0c90be2d22365c34798d4bff02a5a3d1a83c812f3d7336c2de9a1cd6c2_prof);

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
        return array (  109 => 32,  98 => 29,  95 => 28,  91 => 27,  79 => 18,  74 => 15,  65 => 12,  62 => 11,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<li class="active">*/
/* 		Stopki*/
/* 	</li>*/
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
