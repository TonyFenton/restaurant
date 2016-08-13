<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_acaea16757a34f02262eba001d6c4668ec74fbb88272ecafd0b7f40213a557d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b863c5d6e9dae87c848a39a8c2a7c07520221f90731b3412a627de72663abdc4 = $this->env->getExtension("native_profiler");
        $__internal_b863c5d6e9dae87c848a39a8c2a7c07520221f90731b3412a627de72663abdc4->enter($__internal_b863c5d6e9dae87c848a39a8c2a7c07520221f90731b3412a627de72663abdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b863c5d6e9dae87c848a39a8c2a7c07520221f90731b3412a627de72663abdc4->leave($__internal_b863c5d6e9dae87c848a39a8c2a7c07520221f90731b3412a627de72663abdc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30b112072946155bd6b819af20e9f19e773603061365a69494f54b41ca3fc2c7 = $this->env->getExtension("native_profiler");
        $__internal_30b112072946155bd6b819af20e9f19e773603061365a69494f54b41ca3fc2c7->enter($__internal_30b112072946155bd6b819af20e9f19e773603061365a69494f54b41ca3fc2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30b112072946155bd6b819af20e9f19e773603061365a69494f54b41ca3fc2c7->leave($__internal_30b112072946155bd6b819af20e9f19e773603061365a69494f54b41ca3fc2c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3eee36699bb5f5ce77b6ce7491e2983e4e0c1a411c426fb49f17e460fe0e20a1 = $this->env->getExtension("native_profiler");
        $__internal_3eee36699bb5f5ce77b6ce7491e2983e4e0c1a411c426fb49f17e460fe0e20a1->enter($__internal_3eee36699bb5f5ce77b6ce7491e2983e4e0c1a411c426fb49f17e460fe0e20a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3eee36699bb5f5ce77b6ce7491e2983e4e0c1a411c426fb49f17e460fe0e20a1->leave($__internal_3eee36699bb5f5ce77b6ce7491e2983e4e0c1a411c426fb49f17e460fe0e20a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70238dbd3c386ca1a6608f7914a68b9e48d37ac6e2a3f7e3d132dfeaa000b23e = $this->env->getExtension("native_profiler");
        $__internal_70238dbd3c386ca1a6608f7914a68b9e48d37ac6e2a3f7e3d132dfeaa000b23e->enter($__internal_70238dbd3c386ca1a6608f7914a68b9e48d37ac6e2a3f7e3d132dfeaa000b23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_70238dbd3c386ca1a6608f7914a68b9e48d37ac6e2a3f7e3d132dfeaa000b23e->leave($__internal_70238dbd3c386ca1a6608f7914a68b9e48d37ac6e2a3f7e3d132dfeaa000b23e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
