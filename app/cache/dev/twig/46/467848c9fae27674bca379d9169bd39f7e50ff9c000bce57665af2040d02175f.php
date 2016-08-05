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
        $__internal_f6b49e8f122c2f45a103205e960e5d0e3fd1eb04e58ed4a1106c84415199f3c7 = $this->env->getExtension("native_profiler");
        $__internal_f6b49e8f122c2f45a103205e960e5d0e3fd1eb04e58ed4a1106c84415199f3c7->enter($__internal_f6b49e8f122c2f45a103205e960e5d0e3fd1eb04e58ed4a1106c84415199f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b49e8f122c2f45a103205e960e5d0e3fd1eb04e58ed4a1106c84415199f3c7->leave($__internal_f6b49e8f122c2f45a103205e960e5d0e3fd1eb04e58ed4a1106c84415199f3c7_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8e77347e6ff49ea7947f0163c81ced9c7953255f50ba51ac98c8ddec9f29445e = $this->env->getExtension("native_profiler");
        $__internal_8e77347e6ff49ea7947f0163c81ced9c7953255f50ba51ac98c8ddec9f29445e->enter($__internal_8e77347e6ff49ea7947f0163c81ced9c7953255f50ba51ac98c8ddec9f29445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
";
        
        $__internal_8e77347e6ff49ea7947f0163c81ced9c7953255f50ba51ac98c8ddec9f29445e->leave($__internal_8e77347e6ff49ea7947f0163c81ced9c7953255f50ba51ac98c8ddec9f29445e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_3150547e4917e1f39b68512050e25fb0a88ad4d0cc42c07baaabc10a86506f14 = $this->env->getExtension("native_profiler");
        $__internal_3150547e4917e1f39b68512050e25fb0a88ad4d0cc42c07baaabc10a86506f14->enter($__internal_3150547e4917e1f39b68512050e25fb0a88ad4d0cc42c07baaabc10a86506f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3150547e4917e1f39b68512050e25fb0a88ad4d0cc42c07baaabc10a86506f14->leave($__internal_3150547e4917e1f39b68512050e25fb0a88ad4d0cc42c07baaabc10a86506f14_prof);

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
        return array (  115 => 39,  108 => 34,  95 => 28,  89 => 26,  87 => 25,  78 => 21,  75 => 20,  71 => 19,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
