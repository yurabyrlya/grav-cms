<?php

/* @Page:/var/www/html/gravCms/grav-admin/user/pages/03.test2 */
class __TwigTemplate_db60455b2020ab3d629ee5b3ac59e359b56d2a911089283fc3b91ae50fdcf64f extends Twig_Template
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
        echo "<p><strong>bold </strong>
<em>cursiv</em></p>
<p><img alt=\"image\" src=\"/user/pages/03.test2/img.jpg\" /></p>
<h2>h2</h2>
<h1>h1</h1>
<ul>
<li>list1</li>
<li>list2</li>
<li>
<p>list3</p>
</li>
<li>list1</li>
<li>liat2</li>
</ul>
<p><a href=\"#\"> link html</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/gravCms/grav-admin/user/pages/03.test2";
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
        return new Twig_Source("<p><strong>bold </strong>
<em>cursiv</em></p>
<p><img alt=\"image\" src=\"/user/pages/03.test2/img.jpg\" /></p>
<h2>h2</h2>
<h1>h1</h1>
<ul>
<li>list1</li>
<li>list2</li>
<li>
<p>list3</p>
</li>
<li>list1</li>
<li>liat2</li>
</ul>
<p><a href=\"#\"> link html</a></p>", "@Page:/var/www/html/gravCms/grav-admin/user/pages/03.test2", "");
    }
}
