<?php

/* welcome.twig */
class __TwigTemplate_3ba79ddcdc0ab3cbd69b6d0c51aedc8e1be8e8962369baaa79f580373c8cbf86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
        // line 2
        echo "    <h1>Welcome</h1>

    </p>
";
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block main %}
    <h1>Welcome</h1>

    </p>
{% endblock %}
", "welcome.twig", "/Applications/MAMP/htdocs/skillyCareerFront/templates/welcome.twig");
    }
}
