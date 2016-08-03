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
        $__internal_4b90172f7695e76e60ba800f262ad3175ff3d9af95a2293cf182c8ac4dbda014 = $this->env->getExtension("native_profiler");
        $__internal_4b90172f7695e76e60ba800f262ad3175ff3d9af95a2293cf182c8ac4dbda014->enter($__internal_4b90172f7695e76e60ba800f262ad3175ff3d9af95a2293cf182c8ac4dbda014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4b90172f7695e76e60ba800f262ad3175ff3d9af95a2293cf182c8ac4dbda014->leave($__internal_4b90172f7695e76e60ba800f262ad3175ff3d9af95a2293cf182c8ac4dbda014_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc7de9af7d247fdbb690f5b97d2bd735df28f30dd609dc3874f43dbeac32cae0 = $this->env->getExtension("native_profiler");
        $__internal_bc7de9af7d247fdbb690f5b97d2bd735df28f30dd609dc3874f43dbeac32cae0->enter($__internal_bc7de9af7d247fdbb690f5b97d2bd735df28f30dd609dc3874f43dbeac32cae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bc7de9af7d247fdbb690f5b97d2bd735df28f30dd609dc3874f43dbeac32cae0->leave($__internal_bc7de9af7d247fdbb690f5b97d2bd735df28f30dd609dc3874f43dbeac32cae0_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_779d3262245e4359b7805da2f16d41dbef9cd1a8d5b30c4f716f17f6c048ead3 = $this->env->getExtension("native_profiler");
        $__internal_779d3262245e4359b7805da2f16d41dbef9cd1a8d5b30c4f716f17f6c048ead3->enter($__internal_779d3262245e4359b7805da2f16d41dbef9cd1a8d5b30c4f716f17f6c048ead3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_779d3262245e4359b7805da2f16d41dbef9cd1a8d5b30c4f716f17f6c048ead3->leave($__internal_779d3262245e4359b7805da2f16d41dbef9cd1a8d5b30c4f716f17f6c048ead3_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_fac8e0901981e82b91a37150e66811362e2ef34c000aee56eb08d9b5d3ec7eff = $this->env->getExtension("native_profiler");
        $__internal_fac8e0901981e82b91a37150e66811362e2ef34c000aee56eb08d9b5d3ec7eff->enter($__internal_fac8e0901981e82b91a37150e66811362e2ef34c000aee56eb08d9b5d3ec7eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_fac8e0901981e82b91a37150e66811362e2ef34c000aee56eb08d9b5d3ec7eff->leave($__internal_fac8e0901981e82b91a37150e66811362e2ef34c000aee56eb08d9b5d3ec7eff_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9de46d14858884b905020159c77543432be77920099137027e4cb55af9258543 = $this->env->getExtension("native_profiler");
        $__internal_9de46d14858884b905020159c77543432be77920099137027e4cb55af9258543->enter($__internal_9de46d14858884b905020159c77543432be77920099137027e4cb55af9258543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9de46d14858884b905020159c77543432be77920099137027e4cb55af9258543->leave($__internal_9de46d14858884b905020159c77543432be77920099137027e4cb55af9258543_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb8061592c413f0037e742f073702f4071c85fabe2d645f01953e27fd4d1ace = $this->env->getExtension("native_profiler");
        $__internal_7bb8061592c413f0037e742f073702f4071c85fabe2d645f01953e27fd4d1ace->enter($__internal_7bb8061592c413f0037e742f073702f4071c85fabe2d645f01953e27fd4d1ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7bb8061592c413f0037e742f073702f4071c85fabe2d645f01953e27fd4d1ace->leave($__internal_7bb8061592c413f0037e742f073702f4071c85fabe2d645f01953e27fd4d1ace_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2dec9fb0b84ef147223a5c4bf7fb67c8cc34b18eea94fdca63263b2e3436796 = $this->env->getExtension("native_profiler");
        $__internal_b2dec9fb0b84ef147223a5c4bf7fb67c8cc34b18eea94fdca63263b2e3436796->enter($__internal_b2dec9fb0b84ef147223a5c4bf7fb67c8cc34b18eea94fdca63263b2e3436796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b2dec9fb0b84ef147223a5c4bf7fb67c8cc34b18eea94fdca63263b2e3436796->leave($__internal_b2dec9fb0b84ef147223a5c4bf7fb67c8cc34b18eea94fdca63263b2e3436796_prof);

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
