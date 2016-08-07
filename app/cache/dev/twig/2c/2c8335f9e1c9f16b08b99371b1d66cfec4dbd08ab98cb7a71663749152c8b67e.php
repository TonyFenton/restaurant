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
        $__internal_7dafe0268542f2482a3001e7d31c546ad88a1595c37504df62f752ce3eacccc0 = $this->env->getExtension("native_profiler");
        $__internal_7dafe0268542f2482a3001e7d31c546ad88a1595c37504df62f752ce3eacccc0->enter($__internal_7dafe0268542f2482a3001e7d31c546ad88a1595c37504df62f752ce3eacccc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dafe0268542f2482a3001e7d31c546ad88a1595c37504df62f752ce3eacccc0->leave($__internal_7dafe0268542f2482a3001e7d31c546ad88a1595c37504df62f752ce3eacccc0_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9b6012cfd347202c22725bc1873c5b86dc4f22174754a80c3df020a7cb29890c = $this->env->getExtension("native_profiler");
        $__internal_9b6012cfd347202c22725bc1873c5b86dc4f22174754a80c3df020a7cb29890c->enter($__internal_9b6012cfd347202c22725bc1873c5b86dc4f22174754a80c3df020a7cb29890c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_9b6012cfd347202c22725bc1873c5b86dc4f22174754a80c3df020a7cb29890c->leave($__internal_9b6012cfd347202c22725bc1873c5b86dc4f22174754a80c3df020a7cb29890c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e7dc03a5385bf174c9ed56c456f8bd96283e1d48098066ceb24eed80eebfb93 = $this->env->getExtension("native_profiler");
        $__internal_7e7dc03a5385bf174c9ed56c456f8bd96283e1d48098066ceb24eed80eebfb93->enter($__internal_7e7dc03a5385bf174c9ed56c456f8bd96283e1d48098066ceb24eed80eebfb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Page edit</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Back to the list</a>
        </li>
        <li>
\t\t\t";
        // line 23
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 24
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t<input type=\"submit\" value=\"Delete\">
\t\t\t\t";
            // line 26
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t";
        }
        // line 28
        echo "        </li>
    </ul>
";
        
        $__internal_7e7dc03a5385bf174c9ed56c456f8bd96283e1d48098066ceb24eed80eebfb93->leave($__internal_7e7dc03a5385bf174c9ed56c456f8bd96283e1d48098066ceb24eed80eebfb93_prof);

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
        return array (  105 => 28,  100 => 26,  94 => 24,  92 => 23,  86 => 20,  79 => 16,  74 => 14,  70 => 13,  66 => 11,  60 => 10,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
