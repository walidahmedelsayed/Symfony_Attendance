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
        $__internal_8d6cef39c017a1960534c494c73bc3a3ff24865b0de3ee4f3a4508e9fa3dea16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6cef39c017a1960534c494c73bc3a3ff24865b0de3ee4f3a4508e9fa3dea16->enter($__internal_8d6cef39c017a1960534c494c73bc3a3ff24865b0de3ee4f3a4508e9fa3dea16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_accc1144f89a417a4226490289f086d00328fee1b89ac16544b343fd2741b611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accc1144f89a417a4226490289f086d00328fee1b89ac16544b343fd2741b611->enter($__internal_accc1144f89a417a4226490289f086d00328fee1b89ac16544b343fd2741b611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_8d6cef39c017a1960534c494c73bc3a3ff24865b0de3ee4f3a4508e9fa3dea16->leave($__internal_8d6cef39c017a1960534c494c73bc3a3ff24865b0de3ee4f3a4508e9fa3dea16_prof);

        
        $__internal_accc1144f89a417a4226490289f086d00328fee1b89ac16544b343fd2741b611->leave($__internal_accc1144f89a417a4226490289f086d00328fee1b89ac16544b343fd2741b611_prof);

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
", "@Twig/Exception/exception.json.twig", "/home/walid/Desktop/ITI/Symfony/Symfony_Attendance/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
