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
        $__internal_a5f6d64955c589e26d93a26e78f2ab2518cb01c863e3473fa534986358f30385 = $this->env->getExtension("native_profiler");
        $__internal_a5f6d64955c589e26d93a26e78f2ab2518cb01c863e3473fa534986358f30385->enter($__internal_a5f6d64955c589e26d93a26e78f2ab2518cb01c863e3473fa534986358f30385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f6d64955c589e26d93a26e78f2ab2518cb01c863e3473fa534986358f30385->leave($__internal_a5f6d64955c589e26d93a26e78f2ab2518cb01c863e3473fa534986358f30385_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_269468ed4e38e38cdcb1a6d5f7553a903943383610dda13985d02b6bcc72038a = $this->env->getExtension("native_profiler");
        $__internal_269468ed4e38e38cdcb1a6d5f7553a903943383610dda13985d02b6bcc72038a->enter($__internal_269468ed4e38e38cdcb1a6d5f7553a903943383610dda13985d02b6bcc72038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_269468ed4e38e38cdcb1a6d5f7553a903943383610dda13985d02b6bcc72038a->leave($__internal_269468ed4e38e38cdcb1a6d5f7553a903943383610dda13985d02b6bcc72038a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36920616ba4da2896ae6dd316ba5a97f880ec2a3bdf833c378726e9308bbcdab = $this->env->getExtension("native_profiler");
        $__internal_36920616ba4da2896ae6dd316ba5a97f880ec2a3bdf833c378726e9308bbcdab->enter($__internal_36920616ba4da2896ae6dd316ba5a97f880ec2a3bdf833c378726e9308bbcdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_36920616ba4da2896ae6dd316ba5a97f880ec2a3bdf833c378726e9308bbcdab->leave($__internal_36920616ba4da2896ae6dd316ba5a97f880ec2a3bdf833c378726e9308bbcdab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_344fd83d8836ddde1b0234c77cd2dfc893d11a7a5f20cb23618b8d23ad7920eb = $this->env->getExtension("native_profiler");
        $__internal_344fd83d8836ddde1b0234c77cd2dfc893d11a7a5f20cb23618b8d23ad7920eb->enter($__internal_344fd83d8836ddde1b0234c77cd2dfc893d11a7a5f20cb23618b8d23ad7920eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_344fd83d8836ddde1b0234c77cd2dfc893d11a7a5f20cb23618b8d23ad7920eb->leave($__internal_344fd83d8836ddde1b0234c77cd2dfc893d11a7a5f20cb23618b8d23ad7920eb_prof);

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
