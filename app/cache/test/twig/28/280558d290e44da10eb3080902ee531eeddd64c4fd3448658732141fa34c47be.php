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
        $__internal_1e675e7fd02661c482815caddb5aaf10018d09fe508de8e6b02feecda678bcf5 = $this->env->getExtension("native_profiler");
        $__internal_1e675e7fd02661c482815caddb5aaf10018d09fe508de8e6b02feecda678bcf5->enter($__internal_1e675e7fd02661c482815caddb5aaf10018d09fe508de8e6b02feecda678bcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e675e7fd02661c482815caddb5aaf10018d09fe508de8e6b02feecda678bcf5->leave($__internal_1e675e7fd02661c482815caddb5aaf10018d09fe508de8e6b02feecda678bcf5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fba3544b244365313aa17a54084d561811ee8c1acf3dea054493e86ef0bca5d3 = $this->env->getExtension("native_profiler");
        $__internal_fba3544b244365313aa17a54084d561811ee8c1acf3dea054493e86ef0bca5d3->enter($__internal_fba3544b244365313aa17a54084d561811ee8c1acf3dea054493e86ef0bca5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fba3544b244365313aa17a54084d561811ee8c1acf3dea054493e86ef0bca5d3->leave($__internal_fba3544b244365313aa17a54084d561811ee8c1acf3dea054493e86ef0bca5d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7f31d21748610252e388427799bf0ab28dce4ad09933f9827e93a8c7009446b = $this->env->getExtension("native_profiler");
        $__internal_e7f31d21748610252e388427799bf0ab28dce4ad09933f9827e93a8c7009446b->enter($__internal_e7f31d21748610252e388427799bf0ab28dce4ad09933f9827e93a8c7009446b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7f31d21748610252e388427799bf0ab28dce4ad09933f9827e93a8c7009446b->leave($__internal_e7f31d21748610252e388427799bf0ab28dce4ad09933f9827e93a8c7009446b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dff891d97d4712ef84fd101198c582a9ee635ca13400fce3e3e94556ee79c52 = $this->env->getExtension("native_profiler");
        $__internal_2dff891d97d4712ef84fd101198c582a9ee635ca13400fce3e3e94556ee79c52->enter($__internal_2dff891d97d4712ef84fd101198c582a9ee635ca13400fce3e3e94556ee79c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2dff891d97d4712ef84fd101198c582a9ee635ca13400fce3e3e94556ee79c52->leave($__internal_2dff891d97d4712ef84fd101198c582a9ee635ca13400fce3e3e94556ee79c52_prof);

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
