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
        $__internal_4145f0f19baabd341be4619b3c1be5cc338b9fcd43c3d61a5de852e79ef61f4c = $this->env->getExtension("native_profiler");
        $__internal_4145f0f19baabd341be4619b3c1be5cc338b9fcd43c3d61a5de852e79ef61f4c->enter($__internal_4145f0f19baabd341be4619b3c1be5cc338b9fcd43c3d61a5de852e79ef61f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4145f0f19baabd341be4619b3c1be5cc338b9fcd43c3d61a5de852e79ef61f4c->leave($__internal_4145f0f19baabd341be4619b3c1be5cc338b9fcd43c3d61a5de852e79ef61f4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e84d6fc1e6001f36431445affd9d6c3daee17014b79a76d0afdc88da6b1ade1d = $this->env->getExtension("native_profiler");
        $__internal_e84d6fc1e6001f36431445affd9d6c3daee17014b79a76d0afdc88da6b1ade1d->enter($__internal_e84d6fc1e6001f36431445affd9d6c3daee17014b79a76d0afdc88da6b1ade1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e84d6fc1e6001f36431445affd9d6c3daee17014b79a76d0afdc88da6b1ade1d->leave($__internal_e84d6fc1e6001f36431445affd9d6c3daee17014b79a76d0afdc88da6b1ade1d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50efb860cfe0f4c1ddcbb8a2b324a264716b407b62e098e6191e7be241ef8eeb = $this->env->getExtension("native_profiler");
        $__internal_50efb860cfe0f4c1ddcbb8a2b324a264716b407b62e098e6191e7be241ef8eeb->enter($__internal_50efb860cfe0f4c1ddcbb8a2b324a264716b407b62e098e6191e7be241ef8eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50efb860cfe0f4c1ddcbb8a2b324a264716b407b62e098e6191e7be241ef8eeb->leave($__internal_50efb860cfe0f4c1ddcbb8a2b324a264716b407b62e098e6191e7be241ef8eeb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eab73cb7cdb7caaed7da8f96b5c1eb6f4a7c0d349a16cdfba32d7838fef9e53 = $this->env->getExtension("native_profiler");
        $__internal_5eab73cb7cdb7caaed7da8f96b5c1eb6f4a7c0d349a16cdfba32d7838fef9e53->enter($__internal_5eab73cb7cdb7caaed7da8f96b5c1eb6f4a7c0d349a16cdfba32d7838fef9e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5eab73cb7cdb7caaed7da8f96b5c1eb6f4a7c0d349a16cdfba32d7838fef9e53->leave($__internal_5eab73cb7cdb7caaed7da8f96b5c1eb6f4a7c0d349a16cdfba32d7838fef9e53_prof);

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
