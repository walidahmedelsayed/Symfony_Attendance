<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_104888d570746299f6fb0a5eb1ab8d30703133c56ef53ffdf72a31be350af62b extends Twig_Template
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
        $__internal_54538c3225ec6679fc95f46876c26247ca07dc9a2fb9e66c9867773c8697ccfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54538c3225ec6679fc95f46876c26247ca07dc9a2fb9e66c9867773c8697ccfa->enter($__internal_54538c3225ec6679fc95f46876c26247ca07dc9a2fb9e66c9867773c8697ccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_2d7b3d9c7057ac914b3c4f9a385703bb47dd5539161891f9c1f028ea51423a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7b3d9c7057ac914b3c4f9a385703bb47dd5539161891f9c1f028ea51423a86->enter($__internal_2d7b3d9c7057ac914b3c4f9a385703bb47dd5539161891f9c1f028ea51423a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_54538c3225ec6679fc95f46876c26247ca07dc9a2fb9e66c9867773c8697ccfa->leave($__internal_54538c3225ec6679fc95f46876c26247ca07dc9a2fb9e66c9867773c8697ccfa_prof);

        
        $__internal_2d7b3d9c7057ac914b3c4f9a385703bb47dd5539161891f9c1f028ea51423a86->leave($__internal_2d7b3d9c7057ac914b3c4f9a385703bb47dd5539161891f9c1f028ea51423a86_prof);

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
", "@Twig/Exception/exception.json.twig", "/home/habib/working/php/attendsSystem/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
