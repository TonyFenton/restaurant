<?php

/* admin/page/index.html.twig */
class __TwigTemplate_565c977c1f1c893b52f810ca8567b8e295e47a2ce71c08a1f8abd46444175711 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
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
                echo "\t\t\t\t\t\t\t\t/ ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "parent", array()), "slug", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 28
            echo "                             / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", array()), "html", null, true);
            echo "
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_page_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
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
        return array (  100 => 39,  93 => 34,  80 => 28,  74 => 26,  72 => 25,  63 => 21,  60 => 20,  56 => 19,  44 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
/* 								/ {{ page.parent.slug }}*/
/* 							{% endif %}*/
/*                              / {{ page.slug }}*/
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
