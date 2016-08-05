<?php

/* admin/footer/edit.html.twig */
class __TwigTemplate_86d1fff4dbeb53b772b6830607b2f3a4465b4926d9c1f514004f1f4c065b465b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/footer/edit.html.twig", 1);
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
        $__internal_3763daf26a849e96ea6cced5160438c7b9e603f94d537965baa28170c90df7f1 = $this->env->getExtension("native_profiler");
        $__internal_3763daf26a849e96ea6cced5160438c7b9e603f94d537965baa28170c90df7f1->enter($__internal_3763daf26a849e96ea6cced5160438c7b9e603f94d537965baa28170c90df7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3763daf26a849e96ea6cced5160438c7b9e603f94d537965baa28170c90df7f1->leave($__internal_3763daf26a849e96ea6cced5160438c7b9e603f94d537965baa28170c90df7f1_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2f8c6946b70f3e4599a79c3075a0a71d1df29d60cc40a0c1d66e023947806dff = $this->env->getExtension("native_profiler");
        $__internal_2f8c6946b70f3e4599a79c3075a0a71d1df29d60cc40a0c1d66e023947806dff->enter($__internal_2f8c6946b70f3e4599a79c3075a0a71d1df29d60cc40a0c1d66e023947806dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t/
\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_footer_edit", array("id" => $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "name", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_2f8c6946b70f3e4599a79c3075a0a71d1df29d60cc40a0c1d66e023947806dff->leave($__internal_2f8c6946b70f3e4599a79c3075a0a71d1df29d60cc40a0c1d66e023947806dff_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c8d9ee2a8fe20bdbbba34b00e0cc83aab2f15cd61130d9dac52ed407acd2844 = $this->env->getExtension("native_profiler");
        $__internal_0c8d9ee2a8fe20bdbbba34b00e0cc83aab2f15cd61130d9dac52ed407acd2844->enter($__internal_0c8d9ee2a8fe20bdbbba34b00e0cc83aab2f15cd61130d9dac52ed407acd2844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Footer edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0c8d9ee2a8fe20bdbbba34b00e0cc83aab2f15cd61130d9dac52ed407acd2844->leave($__internal_0c8d9ee2a8fe20bdbbba34b00e0cc83aab2f15cd61130d9dac52ed407acd2844_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  92 => 23,  86 => 20,  79 => 16,  74 => 14,  70 => 13,  66 => 11,  60 => 10,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	/*/
/* 	<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* 	/*/
/* 	<a href="{{ path('admin_footer_edit', { 'id': footer.id }) }}">{{ footer.name }}</a>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Footer edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_footer_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
