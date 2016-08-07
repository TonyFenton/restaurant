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
        $__internal_10fd70103ecfcacb5d22bcd13140156cde0e37f2299627d387336b85e41b1948 = $this->env->getExtension("native_profiler");
        $__internal_10fd70103ecfcacb5d22bcd13140156cde0e37f2299627d387336b85e41b1948->enter($__internal_10fd70103ecfcacb5d22bcd13140156cde0e37f2299627d387336b85e41b1948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10fd70103ecfcacb5d22bcd13140156cde0e37f2299627d387336b85e41b1948->leave($__internal_10fd70103ecfcacb5d22bcd13140156cde0e37f2299627d387336b85e41b1948_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_22244858cc3cc1a691fe2e2470f484fb9cc3c5c0cc9d97779aae140c3242c2b5 = $this->env->getExtension("native_profiler");
        $__internal_22244858cc3cc1a691fe2e2470f484fb9cc3c5c0cc9d97779aae140c3242c2b5->enter($__internal_22244858cc3cc1a691fe2e2470f484fb9cc3c5c0cc9d97779aae140c3242c2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
";
        
        $__internal_22244858cc3cc1a691fe2e2470f484fb9cc3c5c0cc9d97779aae140c3242c2b5->leave($__internal_22244858cc3cc1a691fe2e2470f484fb9cc3c5c0cc9d97779aae140c3242c2b5_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_5aa61c9a52da28e24317b42674fec9353d79bc681bb45867eed9c46adf3c4404 = $this->env->getExtension("native_profiler");
        $__internal_5aa61c9a52da28e24317b42674fec9353d79bc681bb45867eed9c46adf3c4404->enter($__internal_5aa61c9a52da28e24317b42674fec9353d79bc681bb45867eed9c46adf3c4404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <h1>Page list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Adres</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
\t\t\t\t\t\t\t";
            // line 25
            if ( !twig_test_empty($this->getAttribute($context["page"], "parent", array()))) {
                // line 26
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["page"], "slug", array()), "parent" => $this->getAttribute($this->getAttribute($context["page"], "parent", array()), "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mainPage", array("slug" => $this->getAttribute($context["page"], "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("admin_page_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_5aa61c9a52da28e24317b42674fec9353d79bc681bb45867eed9c46adf3c4404->leave($__internal_5aa61c9a52da28e24317b42674fec9353d79bc681bb45867eed9c46adf3c4404_prof);

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
        return array (  118 => 40,  111 => 35,  101 => 30,  95 => 28,  89 => 26,  87 => 25,  78 => 21,  75 => 20,  71 => 19,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	/*/
/* 	<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Page list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Adres</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for page in pages %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_page_edit', { 'id': page.id }) }}">{{ page.name }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/* 							{% if page.parent is not empty %}*/
/* 								{{ path('childPage', { 'slug': page.slug, 'parent': page.parent.slug }) }}*/
/* 							{% else %}*/
/* 								{{ path('mainPage', { 'slug': page.slug }) }}*/
/* 							{% endif %}*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_page_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
