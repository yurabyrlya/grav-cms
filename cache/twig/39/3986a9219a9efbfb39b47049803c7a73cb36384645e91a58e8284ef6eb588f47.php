<?php

/* @Page:/var/www/html/gravCms/grav-admin/user/pages/04.page */
class __TwigTemplate_544698a43f0e88dfd77d88139beac34b24a306f7915f68aadb1f80c62d43c052 extends Twig_Template
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
        // line 1
        echo "<hr />
<hr />
<p>test</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/gravCms/grav-admin/user/pages/04.page";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr />
<hr />
<p>test</p>", "@Page:/var/www/html/gravCms/grav-admin/user/pages/04.page", "");
    }
}
