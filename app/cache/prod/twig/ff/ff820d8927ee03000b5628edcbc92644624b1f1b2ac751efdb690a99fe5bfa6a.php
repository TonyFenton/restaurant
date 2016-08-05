<?php

/* default/child_page.html.twig */
class __TwigTemplate_a2cdeac152afcdf8f87770481660d97f008d964e4a007207cee276c0b1e9b42d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"secondaryNav\">
\t\t<ul id=\"secondaryMenu\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 13
            echo "\t\t\t\t<li class=\"
\t\t\t\t\t";
            // line 14
            if (($this->getAttribute($context["link"], "slug", array()) == $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()))) {
                // line 15
                echo "\t\t\t\t\t\tcurrent
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\">
\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["link"], "slug", array()), "parent" => $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h1>
\t\t";
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
\t<div style=\"clear: both\"></div>
";
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
        return array (  90 => 25,  86 => 24,  81 => 21,  70 => 18,  67 => 17,  63 => 15,  61 => 14,  58 => 13,  54 => 12,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
