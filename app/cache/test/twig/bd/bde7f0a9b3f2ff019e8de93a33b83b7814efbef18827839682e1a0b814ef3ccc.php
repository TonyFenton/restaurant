<?php

/* default/child_page.html.twig */
class __TwigTemplate_0e733985a07e25d3a41f71e8f5fde5ce0c5fdb468ed54ec046ed3da90e2f04d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_layout.html.twig", "default/child_page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7247670d1915a5913f8693558f0e6e5ee7b8693270afb04917d9c8cb2026f810 = $this->env->getExtension("native_profiler");
        $__internal_7247670d1915a5913f8693558f0e6e5ee7b8693270afb04917d9c8cb2026f810->enter($__internal_7247670d1915a5913f8693558f0e6e5ee7b8693270afb04917d9c8cb2026f810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/child_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7247670d1915a5913f8693558f0e6e5ee7b8693270afb04917d9c8cb2026f810->leave($__internal_7247670d1915a5913f8693558f0e6e5ee7b8693270afb04917d9c8cb2026f810_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7215183b8f47fba14e8a6120e3c288e9774ab892928d6d417f7ccb0c7cdebbb = $this->env->getExtension("native_profiler");
        $__internal_e7215183b8f47fba14e8a6120e3c288e9774ab892928d6d417f7ccb0c7cdebbb->enter($__internal_e7215183b8f47fba14e8a6120e3c288e9774ab892928d6d417f7ccb0c7cdebbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t<ul id=\"secondary_nav\" class=\"nav nav-pills nav-stacked list-group\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "parent", array()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 8
            echo "\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item
\t\t\t\t\t\t";
            // line 9
            if (($this->getAttribute($context["link"], "slug", array()) == $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))) {
                // line 10
                echo "\t\t\t\t\t\t\tactive
\t\t\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["link"], "slug", array()), "parent" => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "parent", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t<h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t\t\t";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_e7215183b8f47fba14e8a6120e3c288e9774ab892928d6d417f7ccb0c7cdebbb->leave($__internal_e7215183b8f47fba14e8a6120e3c288e9774ab892928d6d417f7ccb0c7cdebbb_prof);

    }

    public function getTemplateName()
    {
        return "default/child_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  77 => 19,  72 => 16,  61 => 13,  58 => 12,  54 => 10,  52 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12 col-sm-3">*/
/* 			<ul id="secondary_nav" class="nav nav-pills nav-stacked list-group">*/
/* 				{% for link in page.parent.children %}*/
/* 					<li role="presentation" class="list-group-item*/
/* 						{% if(link.slug == page.slug) %}*/
/* 							active*/
/* 						{% endif %}*/
/* 						">*/
/* 							<a href="{{ path('childPage', { 'slug': link.slug, 'parent': page.parent.slug }) }}">{{ link.name }}</a>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 		<div class="col-xs-12 col-sm-9">*/
/* 			<h1>{{page.name}}</h1>*/
/* 			{{page.content | raw}}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
