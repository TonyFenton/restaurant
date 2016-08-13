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
        $__internal_8ec243fe70fed2d1c35889cc11962a77f452ea2bf65716e14fec531be036cb24 = $this->env->getExtension("native_profiler");
        $__internal_8ec243fe70fed2d1c35889cc11962a77f452ea2bf65716e14fec531be036cb24->enter($__internal_8ec243fe70fed2d1c35889cc11962a77f452ea2bf65716e14fec531be036cb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec243fe70fed2d1c35889cc11962a77f452ea2bf65716e14fec531be036cb24->leave($__internal_8ec243fe70fed2d1c35889cc11962a77f452ea2bf65716e14fec531be036cb24_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_49262d8e494ce46fbb153696575a430ff242267bedf7e7b9e0619b4c36f6bcc2 = $this->env->getExtension("native_profiler");
        $__internal_49262d8e494ce46fbb153696575a430ff242267bedf7e7b9e0619b4c36f6bcc2->enter($__internal_49262d8e494ce46fbb153696575a430ff242267bedf7e7b9e0619b4c36f6bcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
";
        
        $__internal_49262d8e494ce46fbb153696575a430ff242267bedf7e7b9e0619b4c36f6bcc2->leave($__internal_49262d8e494ce46fbb153696575a430ff242267bedf7e7b9e0619b4c36f6bcc2_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_15bf624aac5c2dc1abefa17db096b9275a5e602432775ef8b90eab52f70db677 = $this->env->getExtension("native_profiler");
        $__internal_15bf624aac5c2dc1abefa17db096b9275a5e602432775ef8b90eab52f70db677->enter($__internal_15bf624aac5c2dc1abefa17db096b9275a5e602432775ef8b90eab52f70db677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_15bf624aac5c2dc1abefa17db096b9275a5e602432775ef8b90eab52f70db677->leave($__internal_15bf624aac5c2dc1abefa17db096b9275a5e602432775ef8b90eab52f70db677_prof);

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
