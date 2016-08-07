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
        $__internal_2ef36f649d07c73328bfff994fac09cf07b56a8d7d4b709e51a5e976c17f7feb = $this->env->getExtension("native_profiler");
        $__internal_2ef36f649d07c73328bfff994fac09cf07b56a8d7d4b709e51a5e976c17f7feb->enter($__internal_2ef36f649d07c73328bfff994fac09cf07b56a8d7d4b709e51a5e976c17f7feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2ef36f649d07c73328bfff994fac09cf07b56a8d7d4b709e51a5e976c17f7feb->leave($__internal_2ef36f649d07c73328bfff994fac09cf07b56a8d7d4b709e51a5e976c17f7feb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e80019209990a626ee4ad2a2a67bd47ccaed16536a49be24e77277bd3cc2288c = $this->env->getExtension("native_profiler");
        $__internal_e80019209990a626ee4ad2a2a67bd47ccaed16536a49be24e77277bd3cc2288c->enter($__internal_e80019209990a626ee4ad2a2a67bd47ccaed16536a49be24e77277bd3cc2288c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e80019209990a626ee4ad2a2a67bd47ccaed16536a49be24e77277bd3cc2288c->leave($__internal_e80019209990a626ee4ad2a2a67bd47ccaed16536a49be24e77277bd3cc2288c_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_9e0acc87caa76a5ec106e162d0956154c5477eee18f31a555b0a46a835ca2dc1 = $this->env->getExtension("native_profiler");
        $__internal_9e0acc87caa76a5ec106e162d0956154c5477eee18f31a555b0a46a835ca2dc1->enter($__internal_9e0acc87caa76a5ec106e162d0956154c5477eee18f31a555b0a46a835ca2dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_9e0acc87caa76a5ec106e162d0956154c5477eee18f31a555b0a46a835ca2dc1->leave($__internal_9e0acc87caa76a5ec106e162d0956154c5477eee18f31a555b0a46a835ca2dc1_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_13f9bd9ae9b7b293af8e2647f8758250001735c894a4d4b108caf44941e5ed6b = $this->env->getExtension("native_profiler");
        $__internal_13f9bd9ae9b7b293af8e2647f8758250001735c894a4d4b108caf44941e5ed6b->enter($__internal_13f9bd9ae9b7b293af8e2647f8758250001735c894a4d4b108caf44941e5ed6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_13f9bd9ae9b7b293af8e2647f8758250001735c894a4d4b108caf44941e5ed6b->leave($__internal_13f9bd9ae9b7b293af8e2647f8758250001735c894a4d4b108caf44941e5ed6b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ad6b5eccad0fee53c2ef38ce0c47b834706c45492725f411b0a3b4920f9013a = $this->env->getExtension("native_profiler");
        $__internal_2ad6b5eccad0fee53c2ef38ce0c47b834706c45492725f411b0a3b4920f9013a->enter($__internal_2ad6b5eccad0fee53c2ef38ce0c47b834706c45492725f411b0a3b4920f9013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ad6b5eccad0fee53c2ef38ce0c47b834706c45492725f411b0a3b4920f9013a->leave($__internal_2ad6b5eccad0fee53c2ef38ce0c47b834706c45492725f411b0a3b4920f9013a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c521d900be603cc849a90c99706eaf3aa3ea83ff146684f26d44e522c61d534 = $this->env->getExtension("native_profiler");
        $__internal_6c521d900be603cc849a90c99706eaf3aa3ea83ff146684f26d44e522c61d534->enter($__internal_6c521d900be603cc849a90c99706eaf3aa3ea83ff146684f26d44e522c61d534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c521d900be603cc849a90c99706eaf3aa3ea83ff146684f26d44e522c61d534->leave($__internal_6c521d900be603cc849a90c99706eaf3aa3ea83ff146684f26d44e522c61d534_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd0fafa4022b1b9f0210e123c71e89ac649b2f85e1225dd11bd41d01d3e28628 = $this->env->getExtension("native_profiler");
        $__internal_dd0fafa4022b1b9f0210e123c71e89ac649b2f85e1225dd11bd41d01d3e28628->enter($__internal_dd0fafa4022b1b9f0210e123c71e89ac649b2f85e1225dd11bd41d01d3e28628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dd0fafa4022b1b9f0210e123c71e89ac649b2f85e1225dd11bd41d01d3e28628->leave($__internal_dd0fafa4022b1b9f0210e123c71e89ac649b2f85e1225dd11bd41d01d3e28628_prof);

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
