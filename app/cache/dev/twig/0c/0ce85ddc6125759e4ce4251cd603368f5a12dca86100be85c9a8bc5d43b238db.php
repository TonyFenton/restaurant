<?php

/* admin/footer/new.html.twig */
class __TwigTemplate_9ccd356cb80059d69ecfc0e67a1aa5440058307c46521ff4128d4a72782ec5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/footer/new.html.twig", 1);
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
        $__internal_f640f93366643c2efd654f7ce31fed233c34169452a8079b4c4604d1d116036c = $this->env->getExtension("native_profiler");
        $__internal_f640f93366643c2efd654f7ce31fed233c34169452a8079b4c4604d1d116036c->enter($__internal_f640f93366643c2efd654f7ce31fed233c34169452a8079b4c4604d1d116036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f640f93366643c2efd654f7ce31fed233c34169452a8079b4c4604d1d116036c->leave($__internal_f640f93366643c2efd654f7ce31fed233c34169452a8079b4c4604d1d116036c_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8e7e1443c5f3455ac1bfaa0be57bbacb92dfacc58feeeaa2d13173c713f2dc09 = $this->env->getExtension("native_profiler");
        $__internal_8e7e1443c5f3455ac1bfaa0be57bbacb92dfacc58feeeaa2d13173c713f2dc09->enter($__internal_8e7e1443c5f3455ac1bfaa0be57bbacb92dfacc58feeeaa2d13173c713f2dc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<li>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t</li>
\t<li class=\"active\">
\t\tNowa
\t</li>
";
        
        $__internal_8e7e1443c5f3455ac1bfaa0be57bbacb92dfacc58feeeaa2d13173c713f2dc09->leave($__internal_8e7e1443c5f3455ac1bfaa0be57bbacb92dfacc58feeeaa2d13173c713f2dc09_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_5404c90682172cd19a0b18e1a69e1f0e96cbf980ca331908bade83f4713c9641 = $this->env->getExtension("native_profiler");
        $__internal_5404c90682172cd19a0b18e1a69e1f0e96cbf980ca331908bade83f4713c9641->enter($__internal_5404c90682172cd19a0b18e1a69e1f0e96cbf980ca331908bade83f4713c9641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\"><h1>Tworzenie stopki</h1></div>
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
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\" role=\"button\">Anuluj</a>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_5404c90682172cd19a0b18e1a69e1f0e96cbf980ca331908bade83f4713c9641->leave($__internal_5404c90682172cd19a0b18e1a69e1f0e96cbf980ca331908bade83f4713c9641_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer/new.html.twig";
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
/* 		<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* 	</li>*/
/* 	<li class="active">*/
/* 		Nowa*/
/* 	</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading"><h1>Tworzenie stopki</h1></div>*/
/* 		<div class="panel-body">		*/
/* 			{{ form_start(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Utwórz">*/
/* 			{{ form_end(form) }}*/
/* 		*/
/* 			<a id="backtolist"class="btn btn-danger" href="{{ path('admin_footer_index') }}" role="button">Anuluj</a>		*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
