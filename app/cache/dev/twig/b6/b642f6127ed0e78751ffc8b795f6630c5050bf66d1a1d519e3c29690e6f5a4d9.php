<?php

/* admin/footer/index.html.twig */
class __TwigTemplate_cc1ab58422ec9e1f4c90ad396316b18dd1d4f3acf8e794db45826af2b44f44cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/footer/index.html.twig", 1);
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
        $__internal_8cdaf1d138d6f01a9321b628c614506a6efc88aff0c457a814b90890e81707f3 = $this->env->getExtension("native_profiler");
        $__internal_8cdaf1d138d6f01a9321b628c614506a6efc88aff0c457a814b90890e81707f3->enter($__internal_8cdaf1d138d6f01a9321b628c614506a6efc88aff0c457a814b90890e81707f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cdaf1d138d6f01a9321b628c614506a6efc88aff0c457a814b90890e81707f3->leave($__internal_8cdaf1d138d6f01a9321b628c614506a6efc88aff0c457a814b90890e81707f3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b895636e24ae36412421d90c7c71d7fddb052aa744f4ab323b6f474a16aaada0 = $this->env->getExtension("native_profiler");
        $__internal_b895636e24ae36412421d90c7c71d7fddb052aa744f4ab323b6f474a16aaada0->enter($__internal_b895636e24ae36412421d90c7c71d7fddb052aa744f4ab323b6f474a16aaada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Footer list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) ? $context["footers"] : $this->getContext($context, "footers")));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 14
            echo "            <tr>
                <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_footer_edit", array("id" => $this->getAttribute($context["footer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["footer"], "name", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_footer_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b895636e24ae36412421d90c7c71d7fddb052aa744f4ab323b6f474a16aaada0->leave($__internal_b895636e24ae36412421d90c7c71d7fddb052aa744f4ab323b6f474a16aaada0_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  69 => 18,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Footer list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for footer in footers %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_footer_edit', { 'id': footer.id }) }}">{{ footer.name }}</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_footer_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
