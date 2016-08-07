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
        $__internal_76cf052a3d7d37cbd1a1f6ad4ab19308270b3b5168d3db0cb85c3fb2d739d0ca = $this->env->getExtension("native_profiler");
        $__internal_76cf052a3d7d37cbd1a1f6ad4ab19308270b3b5168d3db0cb85c3fb2d739d0ca->enter($__internal_76cf052a3d7d37cbd1a1f6ad4ab19308270b3b5168d3db0cb85c3fb2d739d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_76cf052a3d7d37cbd1a1f6ad4ab19308270b3b5168d3db0cb85c3fb2d739d0ca->leave($__internal_76cf052a3d7d37cbd1a1f6ad4ab19308270b3b5168d3db0cb85c3fb2d739d0ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c57cd24996215b1d80f8c2dcf9264f2960e087d3fa5e9ca1c5e90afc3f7c709f = $this->env->getExtension("native_profiler");
        $__internal_c57cd24996215b1d80f8c2dcf9264f2960e087d3fa5e9ca1c5e90afc3f7c709f->enter($__internal_c57cd24996215b1d80f8c2dcf9264f2960e087d3fa5e9ca1c5e90afc3f7c709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c57cd24996215b1d80f8c2dcf9264f2960e087d3fa5e9ca1c5e90afc3f7c709f->leave($__internal_c57cd24996215b1d80f8c2dcf9264f2960e087d3fa5e9ca1c5e90afc3f7c709f_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_529e6cca4f64f10fc5b44d0a302ae571b893a599665cd393176ef11128d9feb2 = $this->env->getExtension("native_profiler");
        $__internal_529e6cca4f64f10fc5b44d0a302ae571b893a599665cd393176ef11128d9feb2->enter($__internal_529e6cca4f64f10fc5b44d0a302ae571b893a599665cd393176ef11128d9feb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_529e6cca4f64f10fc5b44d0a302ae571b893a599665cd393176ef11128d9feb2->leave($__internal_529e6cca4f64f10fc5b44d0a302ae571b893a599665cd393176ef11128d9feb2_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_c30e6c550ccaae2812962be6d68b450769db1f4626b6a1ec0d59c989372db985 = $this->env->getExtension("native_profiler");
        $__internal_c30e6c550ccaae2812962be6d68b450769db1f4626b6a1ec0d59c989372db985->enter($__internal_c30e6c550ccaae2812962be6d68b450769db1f4626b6a1ec0d59c989372db985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_c30e6c550ccaae2812962be6d68b450769db1f4626b6a1ec0d59c989372db985->leave($__internal_c30e6c550ccaae2812962be6d68b450769db1f4626b6a1ec0d59c989372db985_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e653376cec64a064f0545d8889078143896a04718fa42406acc463b3e5019d62 = $this->env->getExtension("native_profiler");
        $__internal_e653376cec64a064f0545d8889078143896a04718fa42406acc463b3e5019d62->enter($__internal_e653376cec64a064f0545d8889078143896a04718fa42406acc463b3e5019d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e653376cec64a064f0545d8889078143896a04718fa42406acc463b3e5019d62->leave($__internal_e653376cec64a064f0545d8889078143896a04718fa42406acc463b3e5019d62_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2228f1edcdbbf41d0b1fddfde50d16083f5026a4f08969c10d429fecf3a58b0 = $this->env->getExtension("native_profiler");
        $__internal_d2228f1edcdbbf41d0b1fddfde50d16083f5026a4f08969c10d429fecf3a58b0->enter($__internal_d2228f1edcdbbf41d0b1fddfde50d16083f5026a4f08969c10d429fecf3a58b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d2228f1edcdbbf41d0b1fddfde50d16083f5026a4f08969c10d429fecf3a58b0->leave($__internal_d2228f1edcdbbf41d0b1fddfde50d16083f5026a4f08969c10d429fecf3a58b0_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c796485e4a620c2771ebec0957f73b5849ec8484b60f48ea121fd9a3ddac3b4e = $this->env->getExtension("native_profiler");
        $__internal_c796485e4a620c2771ebec0957f73b5849ec8484b60f48ea121fd9a3ddac3b4e->enter($__internal_c796485e4a620c2771ebec0957f73b5849ec8484b60f48ea121fd9a3ddac3b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c796485e4a620c2771ebec0957f73b5849ec8484b60f48ea121fd9a3ddac3b4e->leave($__internal_c796485e4a620c2771ebec0957f73b5849ec8484b60f48ea121fd9a3ddac3b4e_prof);

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
