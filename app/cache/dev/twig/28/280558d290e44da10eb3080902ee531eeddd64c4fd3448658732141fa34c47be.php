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
        $__internal_b30dc3bbe007077531990e7ddf90dad73bb850bc63ffe14455e260b4fb90ada3 = $this->env->getExtension("native_profiler");
        $__internal_b30dc3bbe007077531990e7ddf90dad73bb850bc63ffe14455e260b4fb90ada3->enter($__internal_b30dc3bbe007077531990e7ddf90dad73bb850bc63ffe14455e260b4fb90ada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30dc3bbe007077531990e7ddf90dad73bb850bc63ffe14455e260b4fb90ada3->leave($__internal_b30dc3bbe007077531990e7ddf90dad73bb850bc63ffe14455e260b4fb90ada3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_445d9e73ba44bada8d03516bc1ca099b508f99e4d4928105c9357cc60c78d7af = $this->env->getExtension("native_profiler");
        $__internal_445d9e73ba44bada8d03516bc1ca099b508f99e4d4928105c9357cc60c78d7af->enter($__internal_445d9e73ba44bada8d03516bc1ca099b508f99e4d4928105c9357cc60c78d7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_445d9e73ba44bada8d03516bc1ca099b508f99e4d4928105c9357cc60c78d7af->leave($__internal_445d9e73ba44bada8d03516bc1ca099b508f99e4d4928105c9357cc60c78d7af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff27f2513724641ecbdc8a4a3b27dfb114fb3742a5fa76801384218674898265 = $this->env->getExtension("native_profiler");
        $__internal_ff27f2513724641ecbdc8a4a3b27dfb114fb3742a5fa76801384218674898265->enter($__internal_ff27f2513724641ecbdc8a4a3b27dfb114fb3742a5fa76801384218674898265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff27f2513724641ecbdc8a4a3b27dfb114fb3742a5fa76801384218674898265->leave($__internal_ff27f2513724641ecbdc8a4a3b27dfb114fb3742a5fa76801384218674898265_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e9b1c7a121d017563bba265e798f25dd589339bb1f3d1e94ca0c194aa212c07 = $this->env->getExtension("native_profiler");
        $__internal_3e9b1c7a121d017563bba265e798f25dd589339bb1f3d1e94ca0c194aa212c07->enter($__internal_3e9b1c7a121d017563bba265e798f25dd589339bb1f3d1e94ca0c194aa212c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3e9b1c7a121d017563bba265e798f25dd589339bb1f3d1e94ca0c194aa212c07->leave($__internal_3e9b1c7a121d017563bba265e798f25dd589339bb1f3d1e94ca0c194aa212c07_prof);

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
