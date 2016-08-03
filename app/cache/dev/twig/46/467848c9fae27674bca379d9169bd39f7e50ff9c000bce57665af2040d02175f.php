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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5851302e4f6167f143e6eb1ea9a9afa55dd1aa72b2fa00aab7e215ef86331998 = $this->env->getExtension("native_profiler");
        $__internal_5851302e4f6167f143e6eb1ea9a9afa55dd1aa72b2fa00aab7e215ef86331998->enter($__internal_5851302e4f6167f143e6eb1ea9a9afa55dd1aa72b2fa00aab7e215ef86331998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5851302e4f6167f143e6eb1ea9a9afa55dd1aa72b2fa00aab7e215ef86331998->leave($__internal_5851302e4f6167f143e6eb1ea9a9afa55dd1aa72b2fa00aab7e215ef86331998_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b9e5ae0dddd18fa563fa59d6a827a9a6a3bec614d9474142427265ff87f8e1c = $this->env->getExtension("native_profiler");
        $__internal_2b9e5ae0dddd18fa563fa59d6a827a9a6a3bec614d9474142427265ff87f8e1c->enter($__internal_2b9e5ae0dddd18fa563fa59d6a827a9a6a3bec614d9474142427265ff87f8e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Page list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_page_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2b9e5ae0dddd18fa563fa59d6a827a9a6a3bec614d9474142427265ff87f8e1c->leave($__internal_2b9e5ae0dddd18fa563fa59d6a827a9a6a3bec614d9474142427265ff87f8e1c_prof);

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
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Page list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for page in pages %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_page_show', { 'id': page.id }) }}">{{ page.name }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_page_show', { 'id': page.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_page_edit', { 'id': page.id }) }}">edit</a>*/
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
