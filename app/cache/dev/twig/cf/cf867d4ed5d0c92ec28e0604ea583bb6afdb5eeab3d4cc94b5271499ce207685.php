<?php

/* ::base.html.twig */
class __TwigTemplate_bcc2f572028ccde0a0655c3a1cb2a36d8f0c749fef76ab661cee0c0c10328f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e5c3299814a46640a706797bb42da6b9ecc691e88c37c583111e05284749146 = $this->env->getExtension("native_profiler");
        $__internal_6e5c3299814a46640a706797bb42da6b9ecc691e88c37c583111e05284749146->enter($__internal_6e5c3299814a46640a706797bb42da6b9ecc691e88c37c583111e05284749146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"";
        // line 6
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
\t\t<meta name=\"keywords\" content=\"";
        // line 7
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link href='https://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_6e5c3299814a46640a706797bb42da6b9ecc691e88c37c583111e05284749146->leave($__internal_6e5c3299814a46640a706797bb42da6b9ecc691e88c37c583111e05284749146_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e7fe41def355321769e3ffb8b7133d3e8d57b7a7d999b81d41b3f1658c321d4 = $this->env->getExtension("native_profiler");
        $__internal_6e7fe41def355321769e3ffb8b7133d3e8d57b7a7d999b81d41b3f1658c321d4->enter($__internal_6e7fe41def355321769e3ffb8b7133d3e8d57b7a7d999b81d41b3f1658c321d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6e7fe41def355321769e3ffb8b7133d3e8d57b7a7d999b81d41b3f1658c321d4->leave($__internal_6e7fe41def355321769e3ffb8b7133d3e8d57b7a7d999b81d41b3f1658c321d4_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_8c8587574e577fd15df3a929906083c61a53cb7e57c94d1251a856245fd7ed3d = $this->env->getExtension("native_profiler");
        $__internal_8c8587574e577fd15df3a929906083c61a53cb7e57c94d1251a856245fd7ed3d->enter($__internal_8c8587574e577fd15df3a929906083c61a53cb7e57c94d1251a856245fd7ed3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_8c8587574e577fd15df3a929906083c61a53cb7e57c94d1251a856245fd7ed3d->leave($__internal_8c8587574e577fd15df3a929906083c61a53cb7e57c94d1251a856245fd7ed3d_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_c969f4d66a0b4a71a2c73a098c3edbd474d73806d323cf4bd007d8f38b87c440 = $this->env->getExtension("native_profiler");
        $__internal_c969f4d66a0b4a71a2c73a098c3edbd474d73806d323cf4bd007d8f38b87c440->enter($__internal_c969f4d66a0b4a71a2c73a098c3edbd474d73806d323cf4bd007d8f38b87c440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_c969f4d66a0b4a71a2c73a098c3edbd474d73806d323cf4bd007d8f38b87c440->leave($__internal_c969f4d66a0b4a71a2c73a098c3edbd474d73806d323cf4bd007d8f38b87c440_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9938a0db935d695889c11853156d26395d22a26d1613a7180eb36204f9fa738b = $this->env->getExtension("native_profiler");
        $__internal_9938a0db935d695889c11853156d26395d22a26d1613a7180eb36204f9fa738b->enter($__internal_9938a0db935d695889c11853156d26395d22a26d1613a7180eb36204f9fa738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9938a0db935d695889c11853156d26395d22a26d1613a7180eb36204f9fa738b->leave($__internal_9938a0db935d695889c11853156d26395d22a26d1613a7180eb36204f9fa738b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_54de942fc551ceb7304f48f5e87e7aa45ccc416032320fa1d84903f4449e0ea5 = $this->env->getExtension("native_profiler");
        $__internal_54de942fc551ceb7304f48f5e87e7aa45ccc416032320fa1d84903f4449e0ea5->enter($__internal_54de942fc551ceb7304f48f5e87e7aa45ccc416032320fa1d84903f4449e0ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_54de942fc551ceb7304f48f5e87e7aa45ccc416032320fa1d84903f4449e0ea5->leave($__internal_54de942fc551ceb7304f48f5e87e7aa45ccc416032320fa1d84903f4449e0ea5_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d2876df03ca8a5d6c996a19c8e79a30db3d4a50a24eeb6ec36df5b7e07bd10e = $this->env->getExtension("native_profiler");
        $__internal_8d2876df03ca8a5d6c996a19c8e79a30db3d4a50a24eeb6ec36df5b7e07bd10e->enter($__internal_8d2876df03ca8a5d6c996a19c8e79a30db3d4a50a24eeb6ec36df5b7e07bd10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d2876df03ca8a5d6c996a19c8e79a30db3d4a50a24eeb6ec36df5b7e07bd10e->leave($__internal_8d2876df03ca8a5d6c996a19c8e79a30db3d4a50a24eeb6ec36df5b7e07bd10e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 14,  114 => 13,  103 => 8,  92 => 7,  81 => 6,  70 => 5,  61 => 15,  58 => 14,  56 => 13,  48 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/* 		<meta name="description" content="{% block description %}{% endblock %}" />*/
/* 		<meta name="keywords" content="{% block keywords %}{% endblock %}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 		<link href='https://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
