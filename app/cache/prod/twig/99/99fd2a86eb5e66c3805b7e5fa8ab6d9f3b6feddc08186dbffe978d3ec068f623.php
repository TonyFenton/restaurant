<?php

/* default/_main_menu.html.twig */
class __TwigTemplate_e8d4d79bef0985b261089b2e5c2014fa44faf377c915514b61363b037446c796 extends Twig_Template
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
        // line 1
        echo "<ul id=\"nav\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "\t\t<li class=\"
\t\t\t";
            // line 4
            if (($this->getAttribute($context["link"], "slug", array()) == (isset($context["currentPage"]) ? $context["currentPage"] : null))) {
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
                    if (($this->getAttribute($context["blabla"], "slug", array()) == (isset($context["currentPage"]) ? $context["currentPage"] : null))) {
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
        return array (  83 => 22,  76 => 20,  72 => 18,  60 => 15,  56 => 13,  54 => 12,  47 => 10,  44 => 9,  42 => 8,  35 => 7,  31 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
