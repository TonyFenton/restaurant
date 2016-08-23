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
        $__internal_0426ee86b5aeebb7fcebefb484d6c8405acb4ba339db149a9c7a7bd3fe60b89e = $this->env->getExtension("native_profiler");
        $__internal_0426ee86b5aeebb7fcebefb484d6c8405acb4ba339db149a9c7a7bd3fe60b89e->enter($__internal_0426ee86b5aeebb7fcebefb484d6c8405acb4ba339db149a9c7a7bd3fe60b89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0426ee86b5aeebb7fcebefb484d6c8405acb4ba339db149a9c7a7bd3fe60b89e->leave($__internal_0426ee86b5aeebb7fcebefb484d6c8405acb4ba339db149a9c7a7bd3fe60b89e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5577627bb588cf911c148e60db601ca224731d1aac8d9ed314fd02debbb414f6 = $this->env->getExtension("native_profiler");
        $__internal_5577627bb588cf911c148e60db601ca224731d1aac8d9ed314fd02debbb414f6->enter($__internal_5577627bb588cf911c148e60db601ca224731d1aac8d9ed314fd02debbb414f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5577627bb588cf911c148e60db601ca224731d1aac8d9ed314fd02debbb414f6->leave($__internal_5577627bb588cf911c148e60db601ca224731d1aac8d9ed314fd02debbb414f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb0db5f30f80cbbef216da5741773aa815bb0b0e41288c658289b0aee6c6912d = $this->env->getExtension("native_profiler");
        $__internal_cb0db5f30f80cbbef216da5741773aa815bb0b0e41288c658289b0aee6c6912d->enter($__internal_cb0db5f30f80cbbef216da5741773aa815bb0b0e41288c658289b0aee6c6912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb0db5f30f80cbbef216da5741773aa815bb0b0e41288c658289b0aee6c6912d->leave($__internal_cb0db5f30f80cbbef216da5741773aa815bb0b0e41288c658289b0aee6c6912d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a68722bf975b59575bc2cf3e99d7256a5cc59a0bf2dae7b33e72c2936b957fe = $this->env->getExtension("native_profiler");
        $__internal_6a68722bf975b59575bc2cf3e99d7256a5cc59a0bf2dae7b33e72c2936b957fe->enter($__internal_6a68722bf975b59575bc2cf3e99d7256a5cc59a0bf2dae7b33e72c2936b957fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6a68722bf975b59575bc2cf3e99d7256a5cc59a0bf2dae7b33e72c2936b957fe->leave($__internal_6a68722bf975b59575bc2cf3e99d7256a5cc59a0bf2dae7b33e72c2936b957fe_prof);

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
