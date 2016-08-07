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
        $__internal_73478999f001b6a2f97a37b35a162d5f775ccbc61d955ad31a998bbe89e3c96a = $this->env->getExtension("native_profiler");
        $__internal_73478999f001b6a2f97a37b35a162d5f775ccbc61d955ad31a998bbe89e3c96a->enter($__internal_73478999f001b6a2f97a37b35a162d5f775ccbc61d955ad31a998bbe89e3c96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_73478999f001b6a2f97a37b35a162d5f775ccbc61d955ad31a998bbe89e3c96a->leave($__internal_73478999f001b6a2f97a37b35a162d5f775ccbc61d955ad31a998bbe89e3c96a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f4a92979f499bf3af60e3dc0d67ace7747fc741c30ec81a48937f7d459215e6 = $this->env->getExtension("native_profiler");
        $__internal_9f4a92979f499bf3af60e3dc0d67ace7747fc741c30ec81a48937f7d459215e6->enter($__internal_9f4a92979f499bf3af60e3dc0d67ace7747fc741c30ec81a48937f7d459215e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9f4a92979f499bf3af60e3dc0d67ace7747fc741c30ec81a48937f7d459215e6->leave($__internal_9f4a92979f499bf3af60e3dc0d67ace7747fc741c30ec81a48937f7d459215e6_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_23fef8fa5a9befcff90a57ebb9c198c60054a3238c9a1668f49567def88717a5 = $this->env->getExtension("native_profiler");
        $__internal_23fef8fa5a9befcff90a57ebb9c198c60054a3238c9a1668f49567def88717a5->enter($__internal_23fef8fa5a9befcff90a57ebb9c198c60054a3238c9a1668f49567def88717a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_23fef8fa5a9befcff90a57ebb9c198c60054a3238c9a1668f49567def88717a5->leave($__internal_23fef8fa5a9befcff90a57ebb9c198c60054a3238c9a1668f49567def88717a5_prof);

    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_2aa25204713beec92c2eccc7604dad6a433045186627c75f4bc843b257bebab5 = $this->env->getExtension("native_profiler");
        $__internal_2aa25204713beec92c2eccc7604dad6a433045186627c75f4bc843b257bebab5->enter($__internal_2aa25204713beec92c2eccc7604dad6a433045186627c75f4bc843b257bebab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_2aa25204713beec92c2eccc7604dad6a433045186627c75f4bc843b257bebab5->leave($__internal_2aa25204713beec92c2eccc7604dad6a433045186627c75f4bc843b257bebab5_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e63e952ec0d595a55fd558d048ea6c43a23bf7a976dc9566e544dc9498aab144 = $this->env->getExtension("native_profiler");
        $__internal_e63e952ec0d595a55fd558d048ea6c43a23bf7a976dc9566e544dc9498aab144->enter($__internal_e63e952ec0d595a55fd558d048ea6c43a23bf7a976dc9566e544dc9498aab144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e63e952ec0d595a55fd558d048ea6c43a23bf7a976dc9566e544dc9498aab144->leave($__internal_e63e952ec0d595a55fd558d048ea6c43a23bf7a976dc9566e544dc9498aab144_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3557ce70d997ea4e59fb6dbfcfb2ce8af5e708aab712aa1406bd425b51d58caa = $this->env->getExtension("native_profiler");
        $__internal_3557ce70d997ea4e59fb6dbfcfb2ce8af5e708aab712aa1406bd425b51d58caa->enter($__internal_3557ce70d997ea4e59fb6dbfcfb2ce8af5e708aab712aa1406bd425b51d58caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3557ce70d997ea4e59fb6dbfcfb2ce8af5e708aab712aa1406bd425b51d58caa->leave($__internal_3557ce70d997ea4e59fb6dbfcfb2ce8af5e708aab712aa1406bd425b51d58caa_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24e5489ac2173feb3273d1bb1e0edf8892879a46db0e22146421f9c60b67a975 = $this->env->getExtension("native_profiler");
        $__internal_24e5489ac2173feb3273d1bb1e0edf8892879a46db0e22146421f9c60b67a975->enter($__internal_24e5489ac2173feb3273d1bb1e0edf8892879a46db0e22146421f9c60b67a975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24e5489ac2173feb3273d1bb1e0edf8892879a46db0e22146421f9c60b67a975->leave($__internal_24e5489ac2173feb3273d1bb1e0edf8892879a46db0e22146421f9c60b67a975_prof);

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
