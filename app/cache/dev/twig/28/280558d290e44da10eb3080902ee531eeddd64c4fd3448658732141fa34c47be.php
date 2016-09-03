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
        $__internal_1c33cac24234dc8bbd0d328a505caaff803fc6d4376d3af60ee371c6502e71fa = $this->env->getExtension("native_profiler");
        $__internal_1c33cac24234dc8bbd0d328a505caaff803fc6d4376d3af60ee371c6502e71fa->enter($__internal_1c33cac24234dc8bbd0d328a505caaff803fc6d4376d3af60ee371c6502e71fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c33cac24234dc8bbd0d328a505caaff803fc6d4376d3af60ee371c6502e71fa->leave($__internal_1c33cac24234dc8bbd0d328a505caaff803fc6d4376d3af60ee371c6502e71fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22f1080e837bd81268a7e25422d87c238a8cc2820ff5cb85f6ea209f89357ea1 = $this->env->getExtension("native_profiler");
        $__internal_22f1080e837bd81268a7e25422d87c238a8cc2820ff5cb85f6ea209f89357ea1->enter($__internal_22f1080e837bd81268a7e25422d87c238a8cc2820ff5cb85f6ea209f89357ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_22f1080e837bd81268a7e25422d87c238a8cc2820ff5cb85f6ea209f89357ea1->leave($__internal_22f1080e837bd81268a7e25422d87c238a8cc2820ff5cb85f6ea209f89357ea1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0cff50f7c8469690f8ca9425e41e713b163b5f44380e1ea6358a396da90a4b0 = $this->env->getExtension("native_profiler");
        $__internal_b0cff50f7c8469690f8ca9425e41e713b163b5f44380e1ea6358a396da90a4b0->enter($__internal_b0cff50f7c8469690f8ca9425e41e713b163b5f44380e1ea6358a396da90a4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0cff50f7c8469690f8ca9425e41e713b163b5f44380e1ea6358a396da90a4b0->leave($__internal_b0cff50f7c8469690f8ca9425e41e713b163b5f44380e1ea6358a396da90a4b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30e9ee5f2100dcc6a42bf0902ba64b4654ae2d8d9edcbcda8380c2c89d66813e = $this->env->getExtension("native_profiler");
        $__internal_30e9ee5f2100dcc6a42bf0902ba64b4654ae2d8d9edcbcda8380c2c89d66813e->enter($__internal_30e9ee5f2100dcc6a42bf0902ba64b4654ae2d8d9edcbcda8380c2c89d66813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_30e9ee5f2100dcc6a42bf0902ba64b4654ae2d8d9edcbcda8380c2c89d66813e->leave($__internal_30e9ee5f2100dcc6a42bf0902ba64b4654ae2d8d9edcbcda8380c2c89d66813e_prof);

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
