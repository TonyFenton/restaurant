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
        $__internal_111405b947859e8f18421a7faca8fa4a57222d75f5bda8722aad7b469e741766 = $this->env->getExtension("native_profiler");
        $__internal_111405b947859e8f18421a7faca8fa4a57222d75f5bda8722aad7b469e741766->enter($__internal_111405b947859e8f18421a7faca8fa4a57222d75f5bda8722aad7b469e741766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111405b947859e8f18421a7faca8fa4a57222d75f5bda8722aad7b469e741766->leave($__internal_111405b947859e8f18421a7faca8fa4a57222d75f5bda8722aad7b469e741766_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_188593f6ec8c58738c04afc36134ed86a7254b302dbf24cf9e64a0f4bc6022bc = $this->env->getExtension("native_profiler");
        $__internal_188593f6ec8c58738c04afc36134ed86a7254b302dbf24cf9e64a0f4bc6022bc->enter($__internal_188593f6ec8c58738c04afc36134ed86a7254b302dbf24cf9e64a0f4bc6022bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
";
        
        $__internal_188593f6ec8c58738c04afc36134ed86a7254b302dbf24cf9e64a0f4bc6022bc->leave($__internal_188593f6ec8c58738c04afc36134ed86a7254b302dbf24cf9e64a0f4bc6022bc_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_68844560bd9f9c846ff67eeeea1fe021693e75d6f3d1b0134423b4468f951c0e = $this->env->getExtension("native_profiler");
        $__internal_68844560bd9f9c846ff67eeeea1fe021693e75d6f3d1b0134423b4468f951c0e->enter($__internal_68844560bd9f9c846ff67eeeea1fe021693e75d6f3d1b0134423b4468f951c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "
    <h1>Page list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Adres</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
\t\t\t\t\t\t\t";
            // line 32
            if ( !twig_test_empty($this->getAttribute($context["page"], "parent", array()))) {
                // line 33
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("slug" => $this->getAttribute($context["page"], "slug", array()), "parent" => $this->getAttribute($this->getAttribute($context["page"], "parent", array()), "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mainPage", array("slug" => $this->getAttribute($context["page"], "slug", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 37
            echo "                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_page_new");
        echo "\">Dodaj stronę</a>
        </li>
    </ul>
";
        
        $__internal_68844560bd9f9c846ff67eeeea1fe021693e75d6f3d1b0134423b4468f951c0e->leave($__internal_68844560bd9f9c846ff67eeeea1fe021693e75d6f3d1b0134423b4468f951c0e_prof);

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
        return array (  138 => 47,  131 => 42,  121 => 37,  115 => 35,  109 => 33,  107 => 32,  98 => 28,  95 => 27,  91 => 26,  78 => 15,  69 => 12,  66 => 11,  62 => 10,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/* 	{% for flash_message in app.session.flashBag.get('notice') %}*/
/* 		<div class="flash-notice">*/
/* 			{{ flash_message }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* */
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
/*             <a href="{{ path('admin_page_new') }}">Dodaj stronę</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
