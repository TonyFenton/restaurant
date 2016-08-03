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
        $__internal_3b30ed5f50b399e49b38639781dbf4a71bd560f4a0cf4bd3311fdd27833467d8 = $this->env->getExtension("native_profiler");
        $__internal_3b30ed5f50b399e49b38639781dbf4a71bd560f4a0cf4bd3311fdd27833467d8->enter($__internal_3b30ed5f50b399e49b38639781dbf4a71bd560f4a0cf4bd3311fdd27833467d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b30ed5f50b399e49b38639781dbf4a71bd560f4a0cf4bd3311fdd27833467d8->leave($__internal_3b30ed5f50b399e49b38639781dbf4a71bd560f4a0cf4bd3311fdd27833467d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21dd9da19a24315f6f7e8f2e8b34a5a8b442e985d1c8ff2c50f502d1f8b07518 = $this->env->getExtension("native_profiler");
        $__internal_21dd9da19a24315f6f7e8f2e8b34a5a8b442e985d1c8ff2c50f502d1f8b07518->enter($__internal_21dd9da19a24315f6f7e8f2e8b34a5a8b442e985d1c8ff2c50f502d1f8b07518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_21dd9da19a24315f6f7e8f2e8b34a5a8b442e985d1c8ff2c50f502d1f8b07518->leave($__internal_21dd9da19a24315f6f7e8f2e8b34a5a8b442e985d1c8ff2c50f502d1f8b07518_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02ffefa49cdca88f08a7872766eb53a7162afb9b87ab231b6047de4704f57069 = $this->env->getExtension("native_profiler");
        $__internal_02ffefa49cdca88f08a7872766eb53a7162afb9b87ab231b6047de4704f57069->enter($__internal_02ffefa49cdca88f08a7872766eb53a7162afb9b87ab231b6047de4704f57069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02ffefa49cdca88f08a7872766eb53a7162afb9b87ab231b6047de4704f57069->leave($__internal_02ffefa49cdca88f08a7872766eb53a7162afb9b87ab231b6047de4704f57069_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0acbd3c4822c39b0178506320a15e6d41d4d9a02a1dc3113b6ed0242f0b853bb = $this->env->getExtension("native_profiler");
        $__internal_0acbd3c4822c39b0178506320a15e6d41d4d9a02a1dc3113b6ed0242f0b853bb->enter($__internal_0acbd3c4822c39b0178506320a15e6d41d4d9a02a1dc3113b6ed0242f0b853bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0acbd3c4822c39b0178506320a15e6d41d4d9a02a1dc3113b6ed0242f0b853bb->leave($__internal_0acbd3c4822c39b0178506320a15e6d41d4d9a02a1dc3113b6ed0242f0b853bb_prof);

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
