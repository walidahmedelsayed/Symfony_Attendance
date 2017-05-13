<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8edf4c7bd80c75d96468d429edbb8cc73d961580ddd9ee269f332f79ca9191c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e88810668f55d882c9dc6bb73ef86d802f08effa2587e4a63a63c011c49e88aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88810668f55d882c9dc6bb73ef86d802f08effa2587e4a63a63c011c49e88aa->enter($__internal_e88810668f55d882c9dc6bb73ef86d802f08effa2587e4a63a63c011c49e88aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5af87cc54dcb3d3cd582491f3ec697787cef4469c984b1414c5dd91779dba946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af87cc54dcb3d3cd582491f3ec697787cef4469c984b1414c5dd91779dba946->enter($__internal_5af87cc54dcb3d3cd582491f3ec697787cef4469c984b1414c5dd91779dba946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e88810668f55d882c9dc6bb73ef86d802f08effa2587e4a63a63c011c49e88aa->leave($__internal_e88810668f55d882c9dc6bb73ef86d802f08effa2587e4a63a63c011c49e88aa_prof);

        
        $__internal_5af87cc54dcb3d3cd582491f3ec697787cef4469c984b1414c5dd91779dba946->leave($__internal_5af87cc54dcb3d3cd582491f3ec697787cef4469c984b1414c5dd91779dba946_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e38dcf63c4bc9b86e427de4a1604070719e5609911f927536d7789abc382557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e38dcf63c4bc9b86e427de4a1604070719e5609911f927536d7789abc382557->enter($__internal_0e38dcf63c4bc9b86e427de4a1604070719e5609911f927536d7789abc382557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_193ad152a37f0ac614cf5c3308dc28e1e61564734ce7daa030405c675e0e73db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193ad152a37f0ac614cf5c3308dc28e1e61564734ce7daa030405c675e0e73db->enter($__internal_193ad152a37f0ac614cf5c3308dc28e1e61564734ce7daa030405c675e0e73db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_193ad152a37f0ac614cf5c3308dc28e1e61564734ce7daa030405c675e0e73db->leave($__internal_193ad152a37f0ac614cf5c3308dc28e1e61564734ce7daa030405c675e0e73db_prof);

        
        $__internal_0e38dcf63c4bc9b86e427de4a1604070719e5609911f927536d7789abc382557->leave($__internal_0e38dcf63c4bc9b86e427de4a1604070719e5609911f927536d7789abc382557_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b10cffd8dfdb461cba792f1db8999151157b151ce835e0b476074e35926a6345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10cffd8dfdb461cba792f1db8999151157b151ce835e0b476074e35926a6345->enter($__internal_b10cffd8dfdb461cba792f1db8999151157b151ce835e0b476074e35926a6345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9856a1dcda1a9179be1642aace49854b80782050dfcb9cf70aa8d38ca18b787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9856a1dcda1a9179be1642aace49854b80782050dfcb9cf70aa8d38ca18b787->enter($__internal_c9856a1dcda1a9179be1642aace49854b80782050dfcb9cf70aa8d38ca18b787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c9856a1dcda1a9179be1642aace49854b80782050dfcb9cf70aa8d38ca18b787->leave($__internal_c9856a1dcda1a9179be1642aace49854b80782050dfcb9cf70aa8d38ca18b787_prof);

        
        $__internal_b10cffd8dfdb461cba792f1db8999151157b151ce835e0b476074e35926a6345->leave($__internal_b10cffd8dfdb461cba792f1db8999151157b151ce835e0b476074e35926a6345_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c63fde3b10e7544124375866b4ebd90cd0f1385e06ab1b1c20a0f5eae3b52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c63fde3b10e7544124375866b4ebd90cd0f1385e06ab1b1c20a0f5eae3b52a->enter($__internal_02c63fde3b10e7544124375866b4ebd90cd0f1385e06ab1b1c20a0f5eae3b52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_137d36fb5cac939e9cb250c9307f1bdd3c9382b9d60a517e6df303bbba443ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137d36fb5cac939e9cb250c9307f1bdd3c9382b9d60a517e6df303bbba443ea2->enter($__internal_137d36fb5cac939e9cb250c9307f1bdd3c9382b9d60a517e6df303bbba443ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_137d36fb5cac939e9cb250c9307f1bdd3c9382b9d60a517e6df303bbba443ea2->leave($__internal_137d36fb5cac939e9cb250c9307f1bdd3c9382b9d60a517e6df303bbba443ea2_prof);

        
        $__internal_02c63fde3b10e7544124375866b4ebd90cd0f1385e06ab1b1c20a0f5eae3b52a->leave($__internal_02c63fde3b10e7544124375866b4ebd90cd0f1385e06ab1b1c20a0f5eae3b52a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/habib/working/php/attendsSystem/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
