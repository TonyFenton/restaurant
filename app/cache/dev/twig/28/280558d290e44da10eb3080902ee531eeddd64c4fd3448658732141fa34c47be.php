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
        $__internal_9876af4cc37dec7f859e9e0bf47735abbdcecc2f6144ef694b8d18e5435b4ea5 = $this->env->getExtension("native_profiler");
        $__internal_9876af4cc37dec7f859e9e0bf47735abbdcecc2f6144ef694b8d18e5435b4ea5->enter($__internal_9876af4cc37dec7f859e9e0bf47735abbdcecc2f6144ef694b8d18e5435b4ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9876af4cc37dec7f859e9e0bf47735abbdcecc2f6144ef694b8d18e5435b4ea5->leave($__internal_9876af4cc37dec7f859e9e0bf47735abbdcecc2f6144ef694b8d18e5435b4ea5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6b763efa7a5a03debc2a805bdec12baeb320f51d70330e6a3ba2567f86333cb = $this->env->getExtension("native_profiler");
        $__internal_e6b763efa7a5a03debc2a805bdec12baeb320f51d70330e6a3ba2567f86333cb->enter($__internal_e6b763efa7a5a03debc2a805bdec12baeb320f51d70330e6a3ba2567f86333cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e6b763efa7a5a03debc2a805bdec12baeb320f51d70330e6a3ba2567f86333cb->leave($__internal_e6b763efa7a5a03debc2a805bdec12baeb320f51d70330e6a3ba2567f86333cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5de9c6ded5e1aa3cb8840256370bbf200e86333d746f8a09985cbb7abd41e5b2 = $this->env->getExtension("native_profiler");
        $__internal_5de9c6ded5e1aa3cb8840256370bbf200e86333d746f8a09985cbb7abd41e5b2->enter($__internal_5de9c6ded5e1aa3cb8840256370bbf200e86333d746f8a09985cbb7abd41e5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5de9c6ded5e1aa3cb8840256370bbf200e86333d746f8a09985cbb7abd41e5b2->leave($__internal_5de9c6ded5e1aa3cb8840256370bbf200e86333d746f8a09985cbb7abd41e5b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f7996c06c95582fbda920954494f869943e310ee4a3f3cf8df2996cb1c23423 = $this->env->getExtension("native_profiler");
        $__internal_7f7996c06c95582fbda920954494f869943e310ee4a3f3cf8df2996cb1c23423->enter($__internal_7f7996c06c95582fbda920954494f869943e310ee4a3f3cf8df2996cb1c23423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7f7996c06c95582fbda920954494f869943e310ee4a3f3cf8df2996cb1c23423->leave($__internal_7f7996c06c95582fbda920954494f869943e310ee4a3f3cf8df2996cb1c23423_prof);

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
