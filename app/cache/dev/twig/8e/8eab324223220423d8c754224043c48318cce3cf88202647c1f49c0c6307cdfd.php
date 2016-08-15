<?php

/* admin/page/new.html.twig */
class __TwigTemplate_bb5c114a30818109df4e380218aae19f75dfcf7e04d598b00a441df8ed4299b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/new.html.twig", 1);
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
        $__internal_c53af2fc61538b47f7f9ccbed69379cafc6c4ac0b5c2a98cd281ab019e5ed2a8 = $this->env->getExtension("native_profiler");
        $__internal_c53af2fc61538b47f7f9ccbed69379cafc6c4ac0b5c2a98cd281ab019e5ed2a8->enter($__internal_c53af2fc61538b47f7f9ccbed69379cafc6c4ac0b5c2a98cd281ab019e5ed2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c53af2fc61538b47f7f9ccbed69379cafc6c4ac0b5c2a98cd281ab019e5ed2a8->leave($__internal_c53af2fc61538b47f7f9ccbed69379cafc6c4ac0b5c2a98cd281ab019e5ed2a8_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_51588d0a60699f89a632e8a76e74fed5291e78d28b190140c08b5dd98ae02518 = $this->env->getExtension("native_profiler");
        $__internal_51588d0a60699f89a632e8a76e74fed5291e78d28b190140c08b5dd98ae02518->enter($__internal_51588d0a60699f89a632e8a76e74fed5291e78d28b190140c08b5dd98ae02518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<li>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t</li>
\t<li class=\"active\">
\t\tNowa
\t</li>
";
        
        $__internal_51588d0a60699f89a632e8a76e74fed5291e78d28b190140c08b5dd98ae02518->leave($__internal_51588d0a60699f89a632e8a76e74fed5291e78d28b190140c08b5dd98ae02518_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_d961c999194241e7d4cbebeb6c80868df6be7b3d399d5aa2aceb6f2ef2717518 = $this->env->getExtension("native_profiler");
        $__internal_d961c999194241e7d4cbebeb6c80868df6be7b3d399d5aa2aceb6f2ef2717518->enter($__internal_d961c999194241e7d4cbebeb6c80868df6be7b3d399d5aa2aceb6f2ef2717518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\"><h1>Tworzenie strony</h1></div>
\t\t<div class=\"panel-body\">\t\t
\t\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Utwórz\">
\t\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t\t\t<a id=\"backtolist\"class=\"btn btn-danger\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\" role=\"button\">Anuluj</a>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_d961c999194241e7d4cbebeb6c80868df6be7b3d399d5aa2aceb6f2ef2717518->leave($__internal_d961c999194241e7d4cbebeb6c80868df6be7b3d399d5aa2aceb6f2ef2717518_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  77 => 19,  72 => 17,  68 => 16,  63 => 13,  57 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<li>*/
/* 		<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* 	</li>*/
/* 	<li class="active">*/
/* 		Nowa*/
/* 	</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading"><h1>Tworzenie strony</h1></div>*/
/* 		<div class="panel-body">		*/
/* 			{{ form_start(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Utwórz">*/
/* 			{{ form_end(form) }}*/
/* 		*/
/* 			<a id="backtolist"class="btn btn-danger" href="{{ path('admin_page_index') }}" role="button">Anuluj</a>		*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
