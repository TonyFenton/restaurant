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
        $__internal_39d14b5b5f10a59a55e43585b3f75cdc5ddd3a224af0c099be4d345e94cbe161 = $this->env->getExtension("native_profiler");
        $__internal_39d14b5b5f10a59a55e43585b3f75cdc5ddd3a224af0c099be4d345e94cbe161->enter($__internal_39d14b5b5f10a59a55e43585b3f75cdc5ddd3a224af0c099be4d345e94cbe161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_39d14b5b5f10a59a55e43585b3f75cdc5ddd3a224af0c099be4d345e94cbe161->leave($__internal_39d14b5b5f10a59a55e43585b3f75cdc5ddd3a224af0c099be4d345e94cbe161_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8590fdb6a82903839347e1afbfe9e00fcfa68ba6a56c2b3cf9629f9b768d708 = $this->env->getExtension("native_profiler");
        $__internal_e8590fdb6a82903839347e1afbfe9e00fcfa68ba6a56c2b3cf9629f9b768d708->enter($__internal_e8590fdb6a82903839347e1afbfe9e00fcfa68ba6a56c2b3cf9629f9b768d708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e8590fdb6a82903839347e1afbfe9e00fcfa68ba6a56c2b3cf9629f9b768d708->leave($__internal_e8590fdb6a82903839347e1afbfe9e00fcfa68ba6a56c2b3cf9629f9b768d708_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_7a8d23ee619220a88b0b3b71cc3eaf582914777f4717b656a79276e01162d7ff = $this->env->getExtension("native_profiler");
        $__internal_7a8d23ee619220a88b0b3b71cc3eaf582914777f4717b656a79276e01162d7ff->enter($__internal_7a8d23ee619220a88b0b3b71cc3eaf582914777f4717b656a79276e01162d7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_7a8d23ee619220a88b0b3b71cc3eaf582914777f4717b656a79276e01162d7ff->leave($__internal_7a8d23ee619220a88b0b3b71cc3eaf582914777f4717b656a79276e01162d7ff_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_c238a7d711012dc878bf5205218fc75c4ec47c5a92a75e6d05d46c19e3a975e6 = $this->env->getExtension("native_profiler");
        $__internal_c238a7d711012dc878bf5205218fc75c4ec47c5a92a75e6d05d46c19e3a975e6->enter($__internal_c238a7d711012dc878bf5205218fc75c4ec47c5a92a75e6d05d46c19e3a975e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_c238a7d711012dc878bf5205218fc75c4ec47c5a92a75e6d05d46c19e3a975e6->leave($__internal_c238a7d711012dc878bf5205218fc75c4ec47c5a92a75e6d05d46c19e3a975e6_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c80397b4025ab2453b7096c1614d68555eaa31aed8a17da4a672c40826aa1dfe = $this->env->getExtension("native_profiler");
        $__internal_c80397b4025ab2453b7096c1614d68555eaa31aed8a17da4a672c40826aa1dfe->enter($__internal_c80397b4025ab2453b7096c1614d68555eaa31aed8a17da4a672c40826aa1dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c80397b4025ab2453b7096c1614d68555eaa31aed8a17da4a672c40826aa1dfe->leave($__internal_c80397b4025ab2453b7096c1614d68555eaa31aed8a17da4a672c40826aa1dfe_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_32789c36ad4d4d36b81d0f1ce47203495c1990ec2ed76df1485d9187f9cb8615 = $this->env->getExtension("native_profiler");
        $__internal_32789c36ad4d4d36b81d0f1ce47203495c1990ec2ed76df1485d9187f9cb8615->enter($__internal_32789c36ad4d4d36b81d0f1ce47203495c1990ec2ed76df1485d9187f9cb8615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32789c36ad4d4d36b81d0f1ce47203495c1990ec2ed76df1485d9187f9cb8615->leave($__internal_32789c36ad4d4d36b81d0f1ce47203495c1990ec2ed76df1485d9187f9cb8615_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40909dd71d0c203e68e5234067b1d2e0ebdf28b4a00cf7c0a36e83be3b312e9f = $this->env->getExtension("native_profiler");
        $__internal_40909dd71d0c203e68e5234067b1d2e0ebdf28b4a00cf7c0a36e83be3b312e9f->enter($__internal_40909dd71d0c203e68e5234067b1d2e0ebdf28b4a00cf7c0a36e83be3b312e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_40909dd71d0c203e68e5234067b1d2e0ebdf28b4a00cf7c0a36e83be3b312e9f->leave($__internal_40909dd71d0c203e68e5234067b1d2e0ebdf28b4a00cf7c0a36e83be3b312e9f_prof);

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
