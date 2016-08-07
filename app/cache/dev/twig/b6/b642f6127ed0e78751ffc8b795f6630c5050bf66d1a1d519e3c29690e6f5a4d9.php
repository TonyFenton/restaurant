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
        $__internal_335d28439d8e130de03eb9124a7d44d4c709654aa398905409efa1f472922885 = $this->env->getExtension("native_profiler");
        $__internal_335d28439d8e130de03eb9124a7d44d4c709654aa398905409efa1f472922885->enter($__internal_335d28439d8e130de03eb9124a7d44d4c709654aa398905409efa1f472922885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335d28439d8e130de03eb9124a7d44d4c709654aa398905409efa1f472922885->leave($__internal_335d28439d8e130de03eb9124a7d44d4c709654aa398905409efa1f472922885_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d9bc5b0ed8ed1dc7254c58318adba4901da7d7b0e0c0bccddbda98a3affe7293 = $this->env->getExtension("native_profiler");
        $__internal_d9bc5b0ed8ed1dc7254c58318adba4901da7d7b0e0c0bccddbda98a3affe7293->enter($__internal_d9bc5b0ed8ed1dc7254c58318adba4901da7d7b0e0c0bccddbda98a3affe7293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
";
        
        $__internal_d9bc5b0ed8ed1dc7254c58318adba4901da7d7b0e0c0bccddbda98a3affe7293->leave($__internal_d9bc5b0ed8ed1dc7254c58318adba4901da7d7b0e0c0bccddbda98a3affe7293_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ceb52c79d294edd60312b8b865b6489f83d8f7481c48b3e2cc504fd2f291a31 = $this->env->getExtension("native_profiler");
        $__internal_2ceb52c79d294edd60312b8b865b6489f83d8f7481c48b3e2cc504fd2f291a31->enter($__internal_2ceb52c79d294edd60312b8b865b6489f83d8f7481c48b3e2cc504fd2f291a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "\t\t<div class=\"flash-notice\">
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t
    <h1>Footer list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) ? $context["footers"] : $this->getContext($context, "footers")));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
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
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_footer_new");
        echo "\">Dodaj stopkę</a>
        </li>
    </ul>
";
        
        $__internal_2ceb52c79d294edd60312b8b865b6489f83d8f7481c48b3e2cc504fd2f291a31->leave($__internal_2ceb52c79d294edd60312b8b865b6489f83d8f7481c48b3e2cc504fd2f291a31_prof);

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
        return array (  115 => 35,  108 => 30,  97 => 27,  94 => 26,  90 => 25,  78 => 15,  69 => 12,  66 => 11,  62 => 10,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/* 	{% for flash_message in app.session.flashBag.get('notice') %}*/
/* 		<div class="flash-notice">*/
/* 			{{ flash_message }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	*/
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
/*             <a href="{{ path('admin_footer_new') }}">Dodaj stopkę</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
