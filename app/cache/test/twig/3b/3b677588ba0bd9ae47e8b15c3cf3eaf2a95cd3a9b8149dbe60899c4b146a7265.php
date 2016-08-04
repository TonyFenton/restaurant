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
        $__internal_bf832203a3afc95e27d40ef8ff0a95bf98b17292fa31a7ce58fbe51188149b55 = $this->env->getExtension("native_profiler");
        $__internal_bf832203a3afc95e27d40ef8ff0a95bf98b17292fa31a7ce58fbe51188149b55->enter($__internal_bf832203a3afc95e27d40ef8ff0a95bf98b17292fa31a7ce58fbe51188149b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bf832203a3afc95e27d40ef8ff0a95bf98b17292fa31a7ce58fbe51188149b55->leave($__internal_bf832203a3afc95e27d40ef8ff0a95bf98b17292fa31a7ce58fbe51188149b55_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87b6a156c8ab4ad158144f14d0d4a0167f1ddb77b979b6c5b749c77551f49801 = $this->env->getExtension("native_profiler");
        $__internal_87b6a156c8ab4ad158144f14d0d4a0167f1ddb77b979b6c5b749c77551f49801->enter($__internal_87b6a156c8ab4ad158144f14d0d4a0167f1ddb77b979b6c5b749c77551f49801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_87b6a156c8ab4ad158144f14d0d4a0167f1ddb77b979b6c5b749c77551f49801->leave($__internal_87b6a156c8ab4ad158144f14d0d4a0167f1ddb77b979b6c5b749c77551f49801_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_edd6a19ac622428979e7d27902f0596e726d45e93e259f3e3e1d4c91936ce8a1 = $this->env->getExtension("native_profiler");
        $__internal_edd6a19ac622428979e7d27902f0596e726d45e93e259f3e3e1d4c91936ce8a1->enter($__internal_edd6a19ac622428979e7d27902f0596e726d45e93e259f3e3e1d4c91936ce8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_edd6a19ac622428979e7d27902f0596e726d45e93e259f3e3e1d4c91936ce8a1->leave($__internal_edd6a19ac622428979e7d27902f0596e726d45e93e259f3e3e1d4c91936ce8a1_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_d5e5e855a35d0e25ed80ab54eb86307acc6d5de053a25587311c81a03d0a287e = $this->env->getExtension("native_profiler");
        $__internal_d5e5e855a35d0e25ed80ab54eb86307acc6d5de053a25587311c81a03d0a287e->enter($__internal_d5e5e855a35d0e25ed80ab54eb86307acc6d5de053a25587311c81a03d0a287e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_d5e5e855a35d0e25ed80ab54eb86307acc6d5de053a25587311c81a03d0a287e->leave($__internal_d5e5e855a35d0e25ed80ab54eb86307acc6d5de053a25587311c81a03d0a287e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc5636a29e7b002f95a09656483a2285f05707cc542ed0b38d33f364dc53a7f4 = $this->env->getExtension("native_profiler");
        $__internal_cc5636a29e7b002f95a09656483a2285f05707cc542ed0b38d33f364dc53a7f4->enter($__internal_cc5636a29e7b002f95a09656483a2285f05707cc542ed0b38d33f364dc53a7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc5636a29e7b002f95a09656483a2285f05707cc542ed0b38d33f364dc53a7f4->leave($__internal_cc5636a29e7b002f95a09656483a2285f05707cc542ed0b38d33f364dc53a7f4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d68d8579f2c408cdf00294ae8db3d5bcf21aac043bd1c40a6a5e520cbd1ccccc = $this->env->getExtension("native_profiler");
        $__internal_d68d8579f2c408cdf00294ae8db3d5bcf21aac043bd1c40a6a5e520cbd1ccccc->enter($__internal_d68d8579f2c408cdf00294ae8db3d5bcf21aac043bd1c40a6a5e520cbd1ccccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d68d8579f2c408cdf00294ae8db3d5bcf21aac043bd1c40a6a5e520cbd1ccccc->leave($__internal_d68d8579f2c408cdf00294ae8db3d5bcf21aac043bd1c40a6a5e520cbd1ccccc_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5e250e9d7a0b541e5ff540f3095eb373ffb0c53d0605a09cca98b0634b2709d = $this->env->getExtension("native_profiler");
        $__internal_e5e250e9d7a0b541e5ff540f3095eb373ffb0c53d0605a09cca98b0634b2709d->enter($__internal_e5e250e9d7a0b541e5ff540f3095eb373ffb0c53d0605a09cca98b0634b2709d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5e250e9d7a0b541e5ff540f3095eb373ffb0c53d0605a09cca98b0634b2709d->leave($__internal_e5e250e9d7a0b541e5ff540f3095eb373ffb0c53d0605a09cca98b0634b2709d_prof);

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
