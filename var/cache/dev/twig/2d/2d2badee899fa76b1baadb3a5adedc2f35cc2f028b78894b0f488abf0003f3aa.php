<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1e2b5b33fd3e41b7a7d21d88673e8499855f75b3899929ad797bc1568c7e5bd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ba0b3ee7261baa80854cdaabd0a61ce8956ba074a2dba355b53c8eb797fc0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba0b3ee7261baa80854cdaabd0a61ce8956ba074a2dba355b53c8eb797fc0c4->enter($__internal_8ba0b3ee7261baa80854cdaabd0a61ce8956ba074a2dba355b53c8eb797fc0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f710ab5e22bae7cbec4eaa40c602832b07c688054feef38983f3e0c49fd23faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f710ab5e22bae7cbec4eaa40c602832b07c688054feef38983f3e0c49fd23faf->enter($__internal_f710ab5e22bae7cbec4eaa40c602832b07c688054feef38983f3e0c49fd23faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_8ba0b3ee7261baa80854cdaabd0a61ce8956ba074a2dba355b53c8eb797fc0c4->leave($__internal_8ba0b3ee7261baa80854cdaabd0a61ce8956ba074a2dba355b53c8eb797fc0c4_prof);

        
        $__internal_f710ab5e22bae7cbec4eaa40c602832b07c688054feef38983f3e0c49fd23faf->leave($__internal_f710ab5e22bae7cbec4eaa40c602832b07c688054feef38983f3e0c49fd23faf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/habib/working/php/Symfony_Attendance/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
