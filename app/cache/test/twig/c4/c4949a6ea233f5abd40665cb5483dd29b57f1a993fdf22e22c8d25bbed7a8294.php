<?php

/* default/parent_page.html.twig */
class __TwigTemplate_947fc60d5a0b34be1acd6b34fd62858e785ca112ce86bfcb26fca80285c6755d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_layout.html.twig", "default/parent_page.html.twig", 1);
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
        $__internal_8b140a138b1c0e69b4a5dac857fbb8da44fd28adb55759bb974fa017fa228626 = $this->env->getExtension("native_profiler");
        $__internal_8b140a138b1c0e69b4a5dac857fbb8da44fd28adb55759bb974fa017fa228626->enter($__internal_8b140a138b1c0e69b4a5dac857fbb8da44fd28adb55759bb974fa017fa228626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/parent_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b140a138b1c0e69b4a5dac857fbb8da44fd28adb55759bb974fa017fa228626->leave($__internal_8b140a138b1c0e69b4a5dac857fbb8da44fd28adb55759bb974fa017fa228626_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_30dde701212c4302b2f32c6697018f16e41572dc14d63f4818cb45883eb3f059 = $this->env->getExtension("native_profiler");
        $__internal_30dde701212c4302b2f32c6697018f16e41572dc14d63f4818cb45883eb3f059->enter($__internal_30dde701212c4302b2f32c6697018f16e41572dc14d63f4818cb45883eb3f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t<ul id=\"secondary_nav\" class=\"nav nav-pills nav-stacked list-group\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 13
            echo "\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item
\t\t\t\t\t\t";
            // line 14
            if (($this->getAttribute($context["link"], "slug", array()) == $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))) {
                // line 15
                echo "\t\t\t\t\t\t\tactive
\t\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\t\">
\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["link"], "slug", array()), "parent" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t";
        // line 24
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_30dde701212c4302b2f32c6697018f16e41572dc14d63f4818cb45883eb3f059->leave($__internal_30dde701212c4302b2f32c6697018f16e41572dc14d63f4818cb45883eb3f059_prof);

    }

    public function getTemplateName()
    {
        return "default/parent_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  80 => 21,  69 => 18,  66 => 17,  62 => 15,  60 => 14,  57 => 13,  53 => 12,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12">*/
/* 			<h1>{{page.name}}</h1>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12 col-sm-3">*/
/* 			<ul id="secondary_nav" class="nav nav-pills nav-stacked list-group">*/
/* 				{% for link in page.children %}*/
/* 					<li role="presentation" class="list-group-item*/
/* 						{% if(link.slug == page.slug) %}*/
/* 							active*/
/* 						{% endif %}*/
/* 						">*/
/* 						<a href="{{ path('childPage', { 'slug': link.slug, 'parent': page.slug }) }}">{{ link.name }}</a>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 		<div class="col-xs-12 col-sm-9">*/
/* 			{{page.content | raw}}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
