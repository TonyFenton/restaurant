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
        $__internal_c95f244f2a0dc0afd588674b1160df6cbb4cae68147989688c68ddd2c20697e7 = $this->env->getExtension("native_profiler");
        $__internal_c95f244f2a0dc0afd588674b1160df6cbb4cae68147989688c68ddd2c20697e7->enter($__internal_c95f244f2a0dc0afd588674b1160df6cbb4cae68147989688c68ddd2c20697e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c95f244f2a0dc0afd588674b1160df6cbb4cae68147989688c68ddd2c20697e7->leave($__internal_c95f244f2a0dc0afd588674b1160df6cbb4cae68147989688c68ddd2c20697e7_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_de25aab46c201afbbfff98444c3c5b7e237a51fff12c5a739b7cece8235e1bbf = $this->env->getExtension("native_profiler");
        $__internal_de25aab46c201afbbfff98444c3c5b7e237a51fff12c5a739b7cece8235e1bbf->enter($__internal_de25aab46c201afbbfff98444c3c5b7e237a51fff12c5a739b7cece8235e1bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
";
        
        $__internal_de25aab46c201afbbfff98444c3c5b7e237a51fff12c5a739b7cece8235e1bbf->leave($__internal_de25aab46c201afbbfff98444c3c5b7e237a51fff12c5a739b7cece8235e1bbf_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_3e16ab634dbad8d069edd056b46c98a7ac2b824c533ab0bbcb401843861e55c3 = $this->env->getExtension("native_profiler");
        $__internal_3e16ab634dbad8d069edd056b46c98a7ac2b824c533ab0bbcb401843861e55c3->enter($__internal_3e16ab634dbad8d069edd056b46c98a7ac2b824c533ab0bbcb401843861e55c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <h1>Footer list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) ? $context["footers"] : $this->getContext($context, "footers")));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
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
        // line 23
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_footer_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_3e16ab634dbad8d069edd056b46c98a7ac2b824c533ab0bbcb401843861e55c3->leave($__internal_3e16ab634dbad8d069edd056b46c98a7ac2b824c533ab0bbcb401843861e55c3_prof);

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
        return array (  95 => 28,  88 => 23,  77 => 20,  74 => 19,  70 => 18,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	/*/
/* 	<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* {% endblock %}*/
/* 	*/
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
