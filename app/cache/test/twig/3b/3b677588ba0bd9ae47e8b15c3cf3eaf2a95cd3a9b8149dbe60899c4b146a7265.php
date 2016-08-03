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
        $__internal_01bd13407c2bb752b48598c8d7a0a6ef038b885991d951e7b25c5a5becc89224 = $this->env->getExtension("native_profiler");
        $__internal_01bd13407c2bb752b48598c8d7a0a6ef038b885991d951e7b25c5a5becc89224->enter($__internal_01bd13407c2bb752b48598c8d7a0a6ef038b885991d951e7b25c5a5becc89224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_01bd13407c2bb752b48598c8d7a0a6ef038b885991d951e7b25c5a5becc89224->leave($__internal_01bd13407c2bb752b48598c8d7a0a6ef038b885991d951e7b25c5a5becc89224_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82483ddb7a9d371ba579b45735bb275916ec204a28939ca119352515e8cb6344 = $this->env->getExtension("native_profiler");
        $__internal_82483ddb7a9d371ba579b45735bb275916ec204a28939ca119352515e8cb6344->enter($__internal_82483ddb7a9d371ba579b45735bb275916ec204a28939ca119352515e8cb6344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_82483ddb7a9d371ba579b45735bb275916ec204a28939ca119352515e8cb6344->leave($__internal_82483ddb7a9d371ba579b45735bb275916ec204a28939ca119352515e8cb6344_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_7e992bbf0aa1256cf3c334f7efc59e2e2f73ba11e16e3bc9d496f8b2b1274a10 = $this->env->getExtension("native_profiler");
        $__internal_7e992bbf0aa1256cf3c334f7efc59e2e2f73ba11e16e3bc9d496f8b2b1274a10->enter($__internal_7e992bbf0aa1256cf3c334f7efc59e2e2f73ba11e16e3bc9d496f8b2b1274a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_7e992bbf0aa1256cf3c334f7efc59e2e2f73ba11e16e3bc9d496f8b2b1274a10->leave($__internal_7e992bbf0aa1256cf3c334f7efc59e2e2f73ba11e16e3bc9d496f8b2b1274a10_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_6d99b3012d2190ab25c4805b5aa14f8977b68eb5c2d036c9f2e7781f562dc405 = $this->env->getExtension("native_profiler");
        $__internal_6d99b3012d2190ab25c4805b5aa14f8977b68eb5c2d036c9f2e7781f562dc405->enter($__internal_6d99b3012d2190ab25c4805b5aa14f8977b68eb5c2d036c9f2e7781f562dc405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_6d99b3012d2190ab25c4805b5aa14f8977b68eb5c2d036c9f2e7781f562dc405->leave($__internal_6d99b3012d2190ab25c4805b5aa14f8977b68eb5c2d036c9f2e7781f562dc405_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85bf96ffdf04a5b06ed29c677db3eadcf5554d390eb311b8dbe767e404084714 = $this->env->getExtension("native_profiler");
        $__internal_85bf96ffdf04a5b06ed29c677db3eadcf5554d390eb311b8dbe767e404084714->enter($__internal_85bf96ffdf04a5b06ed29c677db3eadcf5554d390eb311b8dbe767e404084714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85bf96ffdf04a5b06ed29c677db3eadcf5554d390eb311b8dbe767e404084714->leave($__internal_85bf96ffdf04a5b06ed29c677db3eadcf5554d390eb311b8dbe767e404084714_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8baf9ead0e7717ab10d943cee734271f8fcbba6c3cecaee982cec39c4212589 = $this->env->getExtension("native_profiler");
        $__internal_c8baf9ead0e7717ab10d943cee734271f8fcbba6c3cecaee982cec39c4212589->enter($__internal_c8baf9ead0e7717ab10d943cee734271f8fcbba6c3cecaee982cec39c4212589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8baf9ead0e7717ab10d943cee734271f8fcbba6c3cecaee982cec39c4212589->leave($__internal_c8baf9ead0e7717ab10d943cee734271f8fcbba6c3cecaee982cec39c4212589_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a25da64af25f98984791e97d27876446b817bc3123357f70be3dae6e177de056 = $this->env->getExtension("native_profiler");
        $__internal_a25da64af25f98984791e97d27876446b817bc3123357f70be3dae6e177de056->enter($__internal_a25da64af25f98984791e97d27876446b817bc3123357f70be3dae6e177de056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a25da64af25f98984791e97d27876446b817bc3123357f70be3dae6e177de056->leave($__internal_a25da64af25f98984791e97d27876446b817bc3123357f70be3dae6e177de056_prof);

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
