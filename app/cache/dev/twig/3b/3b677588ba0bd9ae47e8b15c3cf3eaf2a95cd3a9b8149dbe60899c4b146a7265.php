<?php

/* base.html.twig */
class __TwigTemplate_a2fe4fd61c697fa9c433220ae8e6e8057407debddc88ecc0b78752661997dccb extends Twig_Template
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
        $__internal_111224ce87983defe532cc8eb9dba1e84e5c93a6f5bc3218185b473e5bff9c92 = $this->env->getExtension("native_profiler");
        $__internal_111224ce87983defe532cc8eb9dba1e84e5c93a6f5bc3218185b473e5bff9c92->enter($__internal_111224ce87983defe532cc8eb9dba1e84e5c93a6f5bc3218185b473e5bff9c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_111224ce87983defe532cc8eb9dba1e84e5c93a6f5bc3218185b473e5bff9c92->leave($__internal_111224ce87983defe532cc8eb9dba1e84e5c93a6f5bc3218185b473e5bff9c92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dd0542cd5b29dfc158fc75154ab8fe9cc517455dc5df72e0b44879b5bb8da70 = $this->env->getExtension("native_profiler");
        $__internal_0dd0542cd5b29dfc158fc75154ab8fe9cc517455dc5df72e0b44879b5bb8da70->enter($__internal_0dd0542cd5b29dfc158fc75154ab8fe9cc517455dc5df72e0b44879b5bb8da70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0dd0542cd5b29dfc158fc75154ab8fe9cc517455dc5df72e0b44879b5bb8da70->leave($__internal_0dd0542cd5b29dfc158fc75154ab8fe9cc517455dc5df72e0b44879b5bb8da70_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_e5864f36b997c2e8263512a261d5a6e8b0d401b564f1b7daabe25f16e034e845 = $this->env->getExtension("native_profiler");
        $__internal_e5864f36b997c2e8263512a261d5a6e8b0d401b564f1b7daabe25f16e034e845->enter($__internal_e5864f36b997c2e8263512a261d5a6e8b0d401b564f1b7daabe25f16e034e845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_e5864f36b997c2e8263512a261d5a6e8b0d401b564f1b7daabe25f16e034e845->leave($__internal_e5864f36b997c2e8263512a261d5a6e8b0d401b564f1b7daabe25f16e034e845_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_308764f4b956c8904c63ae7cab9fbb81ffaa58f40b29a0e29b40dadb1c743f78 = $this->env->getExtension("native_profiler");
        $__internal_308764f4b956c8904c63ae7cab9fbb81ffaa58f40b29a0e29b40dadb1c743f78->enter($__internal_308764f4b956c8904c63ae7cab9fbb81ffaa58f40b29a0e29b40dadb1c743f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_308764f4b956c8904c63ae7cab9fbb81ffaa58f40b29a0e29b40dadb1c743f78->leave($__internal_308764f4b956c8904c63ae7cab9fbb81ffaa58f40b29a0e29b40dadb1c743f78_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2dd65a80d7288b683aec707b37831921008df2d08f4a9f0b03d61f127ca854d = $this->env->getExtension("native_profiler");
        $__internal_b2dd65a80d7288b683aec707b37831921008df2d08f4a9f0b03d61f127ca854d->enter($__internal_b2dd65a80d7288b683aec707b37831921008df2d08f4a9f0b03d61f127ca854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b2dd65a80d7288b683aec707b37831921008df2d08f4a9f0b03d61f127ca854d->leave($__internal_b2dd65a80d7288b683aec707b37831921008df2d08f4a9f0b03d61f127ca854d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b391135fece44ffd4442f2c20e7645e2a9a385a1494dbd65b5ac29bd22b97e9c = $this->env->getExtension("native_profiler");
        $__internal_b391135fece44ffd4442f2c20e7645e2a9a385a1494dbd65b5ac29bd22b97e9c->enter($__internal_b391135fece44ffd4442f2c20e7645e2a9a385a1494dbd65b5ac29bd22b97e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b391135fece44ffd4442f2c20e7645e2a9a385a1494dbd65b5ac29bd22b97e9c->leave($__internal_b391135fece44ffd4442f2c20e7645e2a9a385a1494dbd65b5ac29bd22b97e9c_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fcb0a6e8cf54808d7716f28209bbac8198bae9ffa0a39d68fdd94e25e365363 = $this->env->getExtension("native_profiler");
        $__internal_8fcb0a6e8cf54808d7716f28209bbac8198bae9ffa0a39d68fdd94e25e365363->enter($__internal_8fcb0a6e8cf54808d7716f28209bbac8198bae9ffa0a39d68fdd94e25e365363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8fcb0a6e8cf54808d7716f28209bbac8198bae9ffa0a39d68fdd94e25e365363->leave($__internal_8fcb0a6e8cf54808d7716f28209bbac8198bae9ffa0a39d68fdd94e25e365363_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
