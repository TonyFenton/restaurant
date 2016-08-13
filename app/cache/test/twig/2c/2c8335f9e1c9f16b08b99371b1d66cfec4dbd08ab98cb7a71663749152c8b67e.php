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
        $__internal_299f1be896e7b04a423f5d5cc9135689d7c6111a467c35e0ac4ee4ec6b53ade0 = $this->env->getExtension("native_profiler");
        $__internal_299f1be896e7b04a423f5d5cc9135689d7c6111a467c35e0ac4ee4ec6b53ade0->enter($__internal_299f1be896e7b04a423f5d5cc9135689d7c6111a467c35e0ac4ee4ec6b53ade0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_299f1be896e7b04a423f5d5cc9135689d7c6111a467c35e0ac4ee4ec6b53ade0->leave($__internal_299f1be896e7b04a423f5d5cc9135689d7c6111a467c35e0ac4ee4ec6b53ade0_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fac31414d3adf98382d19f5aa85b0123b78bf4a8159c7aa4938f25b2d9966187 = $this->env->getExtension("native_profiler");
        $__internal_fac31414d3adf98382d19f5aa85b0123b78bf4a8159c7aa4938f25b2d9966187->enter($__internal_fac31414d3adf98382d19f5aa85b0123b78bf4a8159c7aa4938f25b2d9966187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_fac31414d3adf98382d19f5aa85b0123b78bf4a8159c7aa4938f25b2d9966187->leave($__internal_fac31414d3adf98382d19f5aa85b0123b78bf4a8159c7aa4938f25b2d9966187_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_9aee44389b061146ffc3d9647578166187aaeb6367b33bbc6d928e0471e2fca1 = $this->env->getExtension("native_profiler");
        $__internal_9aee44389b061146ffc3d9647578166187aaeb6367b33bbc6d928e0471e2fca1->enter($__internal_9aee44389b061146ffc3d9647578166187aaeb6367b33bbc6d928e0471e2fca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9aee44389b061146ffc3d9647578166187aaeb6367b33bbc6d928e0471e2fca1->leave($__internal_9aee44389b061146ffc3d9647578166187aaeb6367b33bbc6d928e0471e2fca1_prof);

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
