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
        $__internal_62bae62461745db86dd8b06cccd533159cafbc6627da22d8e30b42fd97bc0ccf = $this->env->getExtension("native_profiler");
        $__internal_62bae62461745db86dd8b06cccd533159cafbc6627da22d8e30b42fd97bc0ccf->enter($__internal_62bae62461745db86dd8b06cccd533159cafbc6627da22d8e30b42fd97bc0ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62bae62461745db86dd8b06cccd533159cafbc6627da22d8e30b42fd97bc0ccf->leave($__internal_62bae62461745db86dd8b06cccd533159cafbc6627da22d8e30b42fd97bc0ccf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4203a106e2acb0e4f79f820fd48825d422471dfc23b642e17ed40ba46fedec8 = $this->env->getExtension("native_profiler");
        $__internal_c4203a106e2acb0e4f79f820fd48825d422471dfc23b642e17ed40ba46fedec8->enter($__internal_c4203a106e2acb0e4f79f820fd48825d422471dfc23b642e17ed40ba46fedec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c4203a106e2acb0e4f79f820fd48825d422471dfc23b642e17ed40ba46fedec8->leave($__internal_c4203a106e2acb0e4f79f820fd48825d422471dfc23b642e17ed40ba46fedec8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_785a580a51ff4bc362f970a07700dd1d21f801e0ef70b367679c142091613b48 = $this->env->getExtension("native_profiler");
        $__internal_785a580a51ff4bc362f970a07700dd1d21f801e0ef70b367679c142091613b48->enter($__internal_785a580a51ff4bc362f970a07700dd1d21f801e0ef70b367679c142091613b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_785a580a51ff4bc362f970a07700dd1d21f801e0ef70b367679c142091613b48->leave($__internal_785a580a51ff4bc362f970a07700dd1d21f801e0ef70b367679c142091613b48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c52e50a610d9cb46f710e26581461c1573254158802dac6a7ee28fd6245cb000 = $this->env->getExtension("native_profiler");
        $__internal_c52e50a610d9cb46f710e26581461c1573254158802dac6a7ee28fd6245cb000->enter($__internal_c52e50a610d9cb46f710e26581461c1573254158802dac6a7ee28fd6245cb000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c52e50a610d9cb46f710e26581461c1573254158802dac6a7ee28fd6245cb000->leave($__internal_c52e50a610d9cb46f710e26581461c1573254158802dac6a7ee28fd6245cb000_prof);

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
