<?php

/* default/child_page.html.twig */
class __TwigTemplate_0e733985a07e25d3a41f71e8f5fde5ce0c5fdb468ed54ec046ed3da90e2f04d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "default/child_page.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_002d141c19f2abe67ff682b4f6791ce57dfce73f294912ea7344c4f5f4424862 = $this->env->getExtension("native_profiler");
        $__internal_002d141c19f2abe67ff682b4f6791ce57dfce73f294912ea7344c4f5f4424862->enter($__internal_002d141c19f2abe67ff682b4f6791ce57dfce73f294912ea7344c4f5f4424862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/child_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_002d141c19f2abe67ff682b4f6791ce57dfce73f294912ea7344c4f5f4424862->leave($__internal_002d141c19f2abe67ff682b4f6791ce57dfce73f294912ea7344c4f5f4424862_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1840bd4f449852eaadaa07e33935be215d87f1b060ee76e5833852910509586b = $this->env->getExtension("native_profiler");
        $__internal_1840bd4f449852eaadaa07e33935be215d87f1b060ee76e5833852910509586b->enter($__internal_1840bd4f449852eaadaa07e33935be215d87f1b060ee76e5833852910509586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pageWith-style.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" media=\"(max-width: 640px)\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pageWith-style-max640px.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_1840bd4f449852eaadaa07e33935be215d87f1b060ee76e5833852910509586b->leave($__internal_1840bd4f449852eaadaa07e33935be215d87f1b060ee76e5833852910509586b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c4717733746ad391932a52e36dda1d5e52c944ec94dd41efb06f4527fe95114 = $this->env->getExtension("native_profiler");
        $__internal_1c4717733746ad391932a52e36dda1d5e52c944ec94dd41efb06f4527fe95114->enter($__internal_1c4717733746ad391932a52e36dda1d5e52c944ec94dd41efb06f4527fe95114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "\t<div id=\"secondaryNav\">
\t\t<ul id=\"secondaryMenu\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "parent", array()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 13
            echo "\t\t\t\t<li class=\"
\t\t\t\t\t";
            // line 14
            if (($this->getAttribute($context["link"], "slug", array()) == $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))) {
                // line 15
                echo "\t\t\t\t\t\tcurrent
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\">
\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["link"], "slug", array()), "parent" => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "parent", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</ul>
\t</div>
\t<div id=\"article\">
\t\t<h1>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t\t";
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
\t</div>
\t<div style=\"clear: both\"></div>
";
        
        $__internal_1c4717733746ad391932a52e36dda1d5e52c944ec94dd41efb06f4527fe95114->leave($__internal_1c4717733746ad391932a52e36dda1d5e52c944ec94dd41efb06f4527fe95114_prof);

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
        return array (  105 => 25,  101 => 24,  96 => 21,  85 => 18,  82 => 17,  78 => 15,  76 => 14,  73 => 13,  69 => 12,  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'default/layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	 {{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="{{asset('css/pageWith-style.css')}}">*/
/* 	<link rel="stylesheet" media="(max-width: 640px)" href="{{asset('css/pageWith-style-max640px.css')}}" type="text/css" />*/
/* {% endblock %}*/
/* 	*/
/* {% block content %}*/
/* 	<div id="secondaryNav">*/
/* 		<ul id="secondaryMenu">*/
/* 			{% for link in page.parent.children %}*/
/* 				<li class="*/
/* 					{% if(link.slug == page.slug) %}*/
/* 						current*/
/* 					{% endif %}*/
/* 					">*/
/* 						<a href="{{ path('childPage', { 'slug': link.slug, 'parent': page.parent.slug }) }}">{{ link.name }}</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div id="article">*/
/* 		<h1>{{page.name}}</h1>*/
/* 		{{page.content | raw}}*/
/* 	</div>*/
/* 	<div style="clear: both"></div>*/
/* {% endblock %}*/
/* */
/* */