<?php

/* default/_main_menu.html.twig */
class __TwigTemplate_0dc46c05557edf7324f9809b47537fcd1a639349b4789676436b665ffe327ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9c5963061926278efb49ff932351d455a66978c0d6b58d3ee990eae25787252 = $this->env->getExtension("native_profiler");
        $__internal_d9c5963061926278efb49ff932351d455a66978c0d6b58d3ee990eae25787252->enter($__internal_d9c5963061926278efb49ff932351d455a66978c0d6b58d3ee990eae25787252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_main_menu.html.twig"));

        // line 1
        echo "<ul id=\"nav\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "\t\t<li class=\"
\t\t\t";
            // line 4
            if (($this->getAttribute($context["link"], "slug", array()) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                // line 5
                echo "\t\t\t\tcurrent
\t\t\t";
            }
            // line 7
            echo "\t\t\t\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mainPage", array("slug" => $this->getAttribute($context["link"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t";
            // line 8
            if ( !twig_test_empty($this->getAttribute($context["link"], "children", array()))) {
                // line 9
                echo "\t\t\t^<ul>
\t\t\t\t";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["link"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["blabla"]) {
                    echo "\t
\t\t\t\t\t<li class=\"
\t\t\t\t\t\t";
                    // line 12
                    if (($this->getAttribute($context["blabla"], "slug", array()) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                        // line 13
                        echo "\t\t\t\t\t\t\tcurrent
\t\t\t\t\t\t";
                    }
                    // line 15
                    echo "\t\t\t\t\t\t\"><a href=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("parent" => $this->getAttribute($context["link"], "slug", array()), "slug" => $this->getAttribute($context["blabla"], "slug", array()))), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blabla"], "name", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blabla'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 20
            echo "\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>";
        
        $__internal_d9c5963061926278efb49ff932351d455a66978c0d6b58d3ee990eae25787252->leave($__internal_d9c5963061926278efb49ff932351d455a66978c0d6b58d3ee990eae25787252_prof);

    }

    public function getTemplateName()
    {
        return "default/_main_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  79 => 20,  75 => 18,  63 => 15,  59 => 13,  57 => 12,  50 => 10,  47 => 9,  45 => 8,  38 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul id="nav">*/
/* 	{% for link in menu %}*/
/* 		<li class="*/
/* 			{% if(link.slug == currentPage) %}*/
/* 				current*/
/* 			{% endif %}*/
/* 			"><a href="{{ path('mainPage', { 'slug': link.slug }) }}">{{ link.name }}</a>*/
/* 			{% if (link.children is not empty) %}*/
/* 			^<ul>*/
/* 				{% for blabla in link.children %}	*/
/* 					<li class="*/
/* 						{% if(blabla.slug == currentPage) %}*/
/* 							current*/
/* 						{% endif %}*/
/* 						"><a href=" {{ path('childPage', {'parent': link.slug, 'slug': blabla.slug}) }} ">{{ blabla.name }}</a>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 			{% endif %}*/
/* 		</li>*/
/* 	{% endfor %}*/
/* </ul>*/
