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
        $__internal_87e31d0ade1df1bca06248e455b1f77228bba4dc8ab0e1d226bfd73dcad47771 = $this->env->getExtension("native_profiler");
        $__internal_87e31d0ade1df1bca06248e455b1f77228bba4dc8ab0e1d226bfd73dcad47771->enter($__internal_87e31d0ade1df1bca06248e455b1f77228bba4dc8ab0e1d226bfd73dcad47771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e31d0ade1df1bca06248e455b1f77228bba4dc8ab0e1d226bfd73dcad47771->leave($__internal_87e31d0ade1df1bca06248e455b1f77228bba4dc8ab0e1d226bfd73dcad47771_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_56e05798ec9d438eea4e0673c75bac524de2a84fa09d7fbdb66417652a0e4669 = $this->env->getExtension("native_profiler");
        $__internal_56e05798ec9d438eea4e0673c75bac524de2a84fa09d7fbdb66417652a0e4669->enter($__internal_56e05798ec9d438eea4e0673c75bac524de2a84fa09d7fbdb66417652a0e4669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_56e05798ec9d438eea4e0673c75bac524de2a84fa09d7fbdb66417652a0e4669->leave($__internal_56e05798ec9d438eea4e0673c75bac524de2a84fa09d7fbdb66417652a0e4669_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_abc7108d7471893d48d01dd4777dd317cf256fc1d4b295c88289f5c024b19308 = $this->env->getExtension("native_profiler");
        $__internal_abc7108d7471893d48d01dd4777dd317cf256fc1d4b295c88289f5c024b19308->enter($__internal_abc7108d7471893d48d01dd4777dd317cf256fc1d4b295c88289f5c024b19308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Footer edit</h1>
\t
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
        echo "
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
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_abc7108d7471893d48d01dd4777dd317cf256fc1d4b295c88289f5c024b19308->leave($__internal_abc7108d7471893d48d01dd4777dd317cf256fc1d4b295c88289f5c024b19308_prof);

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
        return array (  116 => 31,  111 => 29,  105 => 26,  98 => 22,  93 => 20,  89 => 19,  86 => 18,  77 => 15,  74 => 14,  70 => 13,  66 => 11,  60 => 10,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/* 	*/
/* 	{% for flash_message in app.session.flashBag.get('notice') %}*/
/* 		<div class="flash-notice">*/
/* 			{{ flash_message }}*/
/* 		</div>*/
/* 	{% endfor %}*/
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