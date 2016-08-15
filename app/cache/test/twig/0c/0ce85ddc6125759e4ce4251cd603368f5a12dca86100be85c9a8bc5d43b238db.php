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
        $__internal_e887d117a6dfb0651e4dcfba4baef1d81930dba3a62443df17a0f689a1af6645 = $this->env->getExtension("native_profiler");
        $__internal_e887d117a6dfb0651e4dcfba4baef1d81930dba3a62443df17a0f689a1af6645->enter($__internal_e887d117a6dfb0651e4dcfba4baef1d81930dba3a62443df17a0f689a1af6645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e887d117a6dfb0651e4dcfba4baef1d81930dba3a62443df17a0f689a1af6645->leave($__internal_e887d117a6dfb0651e4dcfba4baef1d81930dba3a62443df17a0f689a1af6645_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6756521dc1d215ed517f377ab093fdbae1ee18e329737720158bd2581cc4a1af = $this->env->getExtension("native_profiler");
        $__internal_6756521dc1d215ed517f377ab093fdbae1ee18e329737720158bd2581cc4a1af->enter($__internal_6756521dc1d215ed517f377ab093fdbae1ee18e329737720158bd2581cc4a1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_6756521dc1d215ed517f377ab093fdbae1ee18e329737720158bd2581cc4a1af->leave($__internal_6756521dc1d215ed517f377ab093fdbae1ee18e329737720158bd2581cc4a1af_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_488b67f2344f4007874ba1f5dea7e52b3bfd18c195bfafd5e168ce4e1f39d7fa = $this->env->getExtension("native_profiler");
        $__internal_488b67f2344f4007874ba1f5dea7e52b3bfd18c195bfafd5e168ce4e1f39d7fa->enter($__internal_488b67f2344f4007874ba1f5dea7e52b3bfd18c195bfafd5e168ce4e1f39d7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_488b67f2344f4007874ba1f5dea7e52b3bfd18c195bfafd5e168ce4e1f39d7fa->leave($__internal_488b67f2344f4007874ba1f5dea7e52b3bfd18c195bfafd5e168ce4e1f39d7fa_prof);

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
