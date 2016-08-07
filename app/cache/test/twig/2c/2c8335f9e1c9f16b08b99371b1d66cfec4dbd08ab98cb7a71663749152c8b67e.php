<?php

/* admin/page/edit.html.twig */
class __TwigTemplate_a39ec2eebe703d557756e808a0fbfe97275e9fb2c5e4950ce85311521418ba9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/edit.html.twig", 1);
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
        $__internal_6960c42fb11339e6b0a801379d82796e0f37652e1b9427c6dcae3ce93fb0f785 = $this->env->getExtension("native_profiler");
        $__internal_6960c42fb11339e6b0a801379d82796e0f37652e1b9427c6dcae3ce93fb0f785->enter($__internal_6960c42fb11339e6b0a801379d82796e0f37652e1b9427c6dcae3ce93fb0f785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6960c42fb11339e6b0a801379d82796e0f37652e1b9427c6dcae3ce93fb0f785->leave($__internal_6960c42fb11339e6b0a801379d82796e0f37652e1b9427c6dcae3ce93fb0f785_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e405598f047e922063c0d269b3ac79aa2f906f93b9561ea532f10356d594f2ce = $this->env->getExtension("native_profiler");
        $__internal_e405598f047e922063c0d269b3ac79aa2f906f93b9561ea532f10356d594f2ce->enter($__internal_e405598f047e922063c0d269b3ac79aa2f906f93b9561ea532f10356d594f2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t/
\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_e405598f047e922063c0d269b3ac79aa2f906f93b9561ea532f10356d594f2ce->leave($__internal_e405598f047e922063c0d269b3ac79aa2f906f93b9561ea532f10356d594f2ce_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c7d2e920099ca802182ef17a4f11f126a815e41287944babe96485422cc64a8 = $this->env->getExtension("native_profiler");
        $__internal_7c7d2e920099ca802182ef17a4f11f126a815e41287944babe96485422cc64a8->enter($__internal_7c7d2e920099ca802182ef17a4f11f126a815e41287944babe96485422cc64a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Page edit</h1>

\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "\t\t<div class=\"flash-notice\">
\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Back to the list</a>
        </li>
        <li>
\t\t\t";
        // line 29
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 30
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t<input type=\"submit\" value=\"Delete\">
\t\t\t\t";
            // line 32
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t";
        }
        // line 34
        echo "        </li>
    </ul>
";
        
        $__internal_7c7d2e920099ca802182ef17a4f11f126a815e41287944babe96485422cc64a8->leave($__internal_7c7d2e920099ca802182ef17a4f11f126a815e41287944babe96485422cc64a8_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  119 => 32,  113 => 30,  111 => 29,  105 => 26,  98 => 22,  93 => 20,  89 => 19,  86 => 18,  77 => 15,  74 => 14,  70 => 13,  66 => 11,  60 => 10,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	/*/
/* 	<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* 	/*/
/* 	<a href="{{ path('admin_page_edit', { 'id': page.id }) }}">{{ page.name }}</a>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Page edit</h1>*/
/* */
/* 	{% for flash_message in app.session.flashBag.get('notice') %}*/
/* 		<div class="flash-notice">*/
/* 			{{ flash_message }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	*/
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_page_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/* 			{% if delete_form is not null %}*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="Delete">*/
/* 				{{ form_end(delete_form) }}*/
/* 			{% endif %}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
