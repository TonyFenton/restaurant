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
        $__internal_acccf2da45665db5bb674b9fb9e7349543fe0aca9dc3279723049a6bb2ab39b4 = $this->env->getExtension("native_profiler");
        $__internal_acccf2da45665db5bb674b9fb9e7349543fe0aca9dc3279723049a6bb2ab39b4->enter($__internal_acccf2da45665db5bb674b9fb9e7349543fe0aca9dc3279723049a6bb2ab39b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_acccf2da45665db5bb674b9fb9e7349543fe0aca9dc3279723049a6bb2ab39b4->leave($__internal_acccf2da45665db5bb674b9fb9e7349543fe0aca9dc3279723049a6bb2ab39b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6b35158209b07fa6f8d2dd950614e7dd1cbb4e0a3155c3a912bde1e6d15ce34 = $this->env->getExtension("native_profiler");
        $__internal_a6b35158209b07fa6f8d2dd950614e7dd1cbb4e0a3155c3a912bde1e6d15ce34->enter($__internal_a6b35158209b07fa6f8d2dd950614e7dd1cbb4e0a3155c3a912bde1e6d15ce34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a6b35158209b07fa6f8d2dd950614e7dd1cbb4e0a3155c3a912bde1e6d15ce34->leave($__internal_a6b35158209b07fa6f8d2dd950614e7dd1cbb4e0a3155c3a912bde1e6d15ce34_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_c07ad266adec36260a300ece1f63b83ba21a585ad4f430a868fda2f8e92ee387 = $this->env->getExtension("native_profiler");
        $__internal_c07ad266adec36260a300ece1f63b83ba21a585ad4f430a868fda2f8e92ee387->enter($__internal_c07ad266adec36260a300ece1f63b83ba21a585ad4f430a868fda2f8e92ee387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_c07ad266adec36260a300ece1f63b83ba21a585ad4f430a868fda2f8e92ee387->leave($__internal_c07ad266adec36260a300ece1f63b83ba21a585ad4f430a868fda2f8e92ee387_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_855d97658bd929e73c3f2d3ecbef1db749376c7260fcc6bc3bfca4116fd9f416 = $this->env->getExtension("native_profiler");
        $__internal_855d97658bd929e73c3f2d3ecbef1db749376c7260fcc6bc3bfca4116fd9f416->enter($__internal_855d97658bd929e73c3f2d3ecbef1db749376c7260fcc6bc3bfca4116fd9f416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_855d97658bd929e73c3f2d3ecbef1db749376c7260fcc6bc3bfca4116fd9f416->leave($__internal_855d97658bd929e73c3f2d3ecbef1db749376c7260fcc6bc3bfca4116fd9f416_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ffe635be1a1693f773b50fcae994ced9f688b595b583e518b0374440881f740 = $this->env->getExtension("native_profiler");
        $__internal_2ffe635be1a1693f773b50fcae994ced9f688b595b583e518b0374440881f740->enter($__internal_2ffe635be1a1693f773b50fcae994ced9f688b595b583e518b0374440881f740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ffe635be1a1693f773b50fcae994ced9f688b595b583e518b0374440881f740->leave($__internal_2ffe635be1a1693f773b50fcae994ced9f688b595b583e518b0374440881f740_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_79345dd719c96356b9c9464ebae621a29753aa6f2373a627c5bd4ac35ba1f83e = $this->env->getExtension("native_profiler");
        $__internal_79345dd719c96356b9c9464ebae621a29753aa6f2373a627c5bd4ac35ba1f83e->enter($__internal_79345dd719c96356b9c9464ebae621a29753aa6f2373a627c5bd4ac35ba1f83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79345dd719c96356b9c9464ebae621a29753aa6f2373a627c5bd4ac35ba1f83e->leave($__internal_79345dd719c96356b9c9464ebae621a29753aa6f2373a627c5bd4ac35ba1f83e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ce088efd725e901355a70120f60f264d9edfc1ab9efb15c663eccc4ef90f14f = $this->env->getExtension("native_profiler");
        $__internal_9ce088efd725e901355a70120f60f264d9edfc1ab9efb15c663eccc4ef90f14f->enter($__internal_9ce088efd725e901355a70120f60f264d9edfc1ab9efb15c663eccc4ef90f14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ce088efd725e901355a70120f60f264d9edfc1ab9efb15c663eccc4ef90f14f->leave($__internal_9ce088efd725e901355a70120f60f264d9edfc1ab9efb15c663eccc4ef90f14f_prof);

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
