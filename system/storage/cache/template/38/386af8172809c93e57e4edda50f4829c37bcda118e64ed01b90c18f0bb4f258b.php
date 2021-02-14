<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_09badde6573e6cefe39d68990927cd1d556e9dd466b3a7f5ef3d5c39e494d151 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"swiper-viewport\">
  <div id=\"carousel";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "      <div class=\"swiper-slide text-center\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 4);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 4);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 4);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 4);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
  </div>
  
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 10
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 5,
\tpagination: '.carousel";
        // line 13
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
\tautoplay: 2500,
\tloop: true
});
--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  78 => 10,  71 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/carousel.twig", "");
    }
}
