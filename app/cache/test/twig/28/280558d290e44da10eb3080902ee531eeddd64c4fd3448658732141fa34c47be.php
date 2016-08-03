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
        $__internal_0666ca37045537f61b9bdfb6ab47d8b0eaf3bbd30b0485711c410f0c2a609a71 = $this->env->getExtension("native_profiler");
        $__internal_0666ca37045537f61b9bdfb6ab47d8b0eaf3bbd30b0485711c410f0c2a609a71->enter($__internal_0666ca37045537f61b9bdfb6ab47d8b0eaf3bbd30b0485711c410f0c2a609a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0666ca37045537f61b9bdfb6ab47d8b0eaf3bbd30b0485711c410f0c2a609a71->leave($__internal_0666ca37045537f61b9bdfb6ab47d8b0eaf3bbd30b0485711c410f0c2a609a71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f83195e281c9e0dc06f5c86b53ff3d982d4d8dccd69ca001ded7e2866b53cc13 = $this->env->getExtension("native_profiler");
        $__internal_f83195e281c9e0dc06f5c86b53ff3d982d4d8dccd69ca001ded7e2866b53cc13->enter($__internal_f83195e281c9e0dc06f5c86b53ff3d982d4d8dccd69ca001ded7e2866b53cc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f83195e281c9e0dc06f5c86b53ff3d982d4d8dccd69ca001ded7e2866b53cc13->leave($__internal_f83195e281c9e0dc06f5c86b53ff3d982d4d8dccd69ca001ded7e2866b53cc13_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a4ace371d4994a385b95e629e7ad597caaf48009b62c350ceac6e6265e52139 = $this->env->getExtension("native_profiler");
        $__internal_4a4ace371d4994a385b95e629e7ad597caaf48009b62c350ceac6e6265e52139->enter($__internal_4a4ace371d4994a385b95e629e7ad597caaf48009b62c350ceac6e6265e52139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a4ace371d4994a385b95e629e7ad597caaf48009b62c350ceac6e6265e52139->leave($__internal_4a4ace371d4994a385b95e629e7ad597caaf48009b62c350ceac6e6265e52139_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2b5fc7fb517096d8528fbb43115b29a6a5bc75627614cf63d374cbf0a078858 = $this->env->getExtension("native_profiler");
        $__internal_b2b5fc7fb517096d8528fbb43115b29a6a5bc75627614cf63d374cbf0a078858->enter($__internal_b2b5fc7fb517096d8528fbb43115b29a6a5bc75627614cf63d374cbf0a078858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b2b5fc7fb517096d8528fbb43115b29a6a5bc75627614cf63d374cbf0a078858->leave($__internal_b2b5fc7fb517096d8528fbb43115b29a6a5bc75627614cf63d374cbf0a078858_prof);

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
