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
        $__internal_d094f3b540e0f2c3046857e89e00fac0e9fcfa8886688e032cea077a1ac37935 = $this->env->getExtension("native_profiler");
        $__internal_d094f3b540e0f2c3046857e89e00fac0e9fcfa8886688e032cea077a1ac37935->enter($__internal_d094f3b540e0f2c3046857e89e00fac0e9fcfa8886688e032cea077a1ac37935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_main_menu.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">
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
                echo "\t\t\t\tactive
\t\t\t";
            }
            // line 7
            echo "\t\t\t\">
\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mainPage", array("slug" => $this->getAttribute($context["link"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "
\t\t";
            // line 9
            if ( !twig_test_empty($this->getAttribute($context["link"], "children", array()))) {
                // line 10
                echo "\t\t\t\t<span class=\"glyphicon glyphicon-menu-down hidden-xs\"></span>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu hidden-xs\">
\t\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["link"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child_link"]) {
                    echo "\t
\t\t\t\t\t<li class=\"
\t\t\t\t\t\t";
                    // line 15
                    if (($this->getAttribute($context["child_link"], "slug", array()) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                        // line 16
                        echo "\t\t\t\t\t\t\tactive
\t\t\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t\t\t\t\"><a href=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("parent" => $this->getAttribute($context["link"], "slug", array()), "slug" => $this->getAttribute($context["child_link"], "slug", array()))), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child_link"], "name", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t</ul>
\t\t";
            } else {
                // line 23
                echo "\t\t\t</a>
\t\t";
            }
            // line 25
            echo "\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</ul>";
        
        $__internal_d094f3b540e0f2c3046857e89e00fac0e9fcfa8886688e032cea077a1ac37935->leave($__internal_d094f3b540e0f2c3046857e89e00fac0e9fcfa8886688e032cea077a1ac37935_prof);

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
        return array (  94 => 27,  87 => 25,  83 => 23,  79 => 21,  67 => 18,  63 => 16,  61 => 15,  54 => 13,  49 => 10,  47 => 9,  41 => 8,  38 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav navbar-nav">*/
/* 	{% for link in menu %}*/
/* 		<li class="*/
/* 			{% if(link.slug == currentPage) %}*/
/* 				active*/
/* 			{% endif %}*/
/* 			">*/
/* 			<a href="{{ path('mainPage', { 'slug': link.slug }) }}">{{ link.name }}*/
/* 		{% if (link.children is not empty) %}*/
/* 				<span class="glyphicon glyphicon-menu-down hidden-xs"></span>*/
/* 			</a>*/
/* 			<ul class="dropdown-menu hidden-xs">*/
/* 				{% for child_link in link.children %}	*/
/* 					<li class="*/
/* 						{% if(child_link.slug == currentPage) %}*/
/* 							active*/
/* 						{% endif %}*/
/* 						"><a href=" {{ path('childPage', {'parent': link.slug, 'slug': child_link.slug}) }} ">{{ child_link.name }}</a>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		{% else %}*/
/* 			</a>*/
/* 		{% endif %}*/
/* 		</li>*/
/* 	{% endfor %}*/
/* </ul>*/
