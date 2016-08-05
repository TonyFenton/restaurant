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
        $__internal_62db81a023f5c7840208497c272b101111dd606e76d7b8d4d8a6673c66d8aa7c = $this->env->getExtension("native_profiler");
        $__internal_62db81a023f5c7840208497c272b101111dd606e76d7b8d4d8a6673c66d8aa7c->enter($__internal_62db81a023f5c7840208497c272b101111dd606e76d7b8d4d8a6673c66d8aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62db81a023f5c7840208497c272b101111dd606e76d7b8d4d8a6673c66d8aa7c->leave($__internal_62db81a023f5c7840208497c272b101111dd606e76d7b8d4d8a6673c66d8aa7c_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_303cfe86f735b0752eac230d2f2612cc745fc346a6f2863cb55082b03a15aedb = $this->env->getExtension("native_profiler");
        $__internal_303cfe86f735b0752eac230d2f2612cc745fc346a6f2863cb55082b03a15aedb->enter($__internal_303cfe86f735b0752eac230d2f2612cc745fc346a6f2863cb55082b03a15aedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
";
        
        $__internal_303cfe86f735b0752eac230d2f2612cc745fc346a6f2863cb55082b03a15aedb->leave($__internal_303cfe86f735b0752eac230d2f2612cc745fc346a6f2863cb55082b03a15aedb_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a5b76a3d43098ba83404f1a9ea6d58c29e8d3202f1fc2e43657e47a7c7ebaa0 = $this->env->getExtension("native_profiler");
        $__internal_4a5b76a3d43098ba83404f1a9ea6d58c29e8d3202f1fc2e43657e47a7c7ebaa0->enter($__internal_4a5b76a3d43098ba83404f1a9ea6d58c29e8d3202f1fc2e43657e47a7c7ebaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4a5b76a3d43098ba83404f1a9ea6d58c29e8d3202f1fc2e43657e47a7c7ebaa0->leave($__internal_4a5b76a3d43098ba83404f1a9ea6d58c29e8d3202f1fc2e43657e47a7c7ebaa0_prof);

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
