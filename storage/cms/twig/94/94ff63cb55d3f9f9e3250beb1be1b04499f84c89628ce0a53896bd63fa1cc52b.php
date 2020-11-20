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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/header.htm */
class __TwigTemplate_dcee9a0032e1897fa0e10910a8739d7c60802979f9d647e2a195666a58280547 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("media" => 5, "theme" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['media', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"header\" class=\"container mx-auto\">
    <nav class=\"navigation col navigation--primary\">
        <div class=\"logo\">
            <a href=\"/\">
                <img width=\"150px\" height=\"150px\" class=\"rbvd-logo\" src=\"";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "logo_header", [], "any", false, false, true, 5)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "logo_header", [], "any", false, false, true, 5), 5, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/RebornVintagedesing.png")));
        echo "\" alt=\"Logo\"> 
            </a>
        </div>
        <div class=\"navigation__links-wrap\">
            <button class=\"navigation__button\" aria-label=\"mobile menu\">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class=\"navigation__links\">
                <li>
                    <a href=\"#portfolio\" class=\"js-trigger\">Portfolio</a>
                </li>
              
                <li>
                    <a href=\"#about\" class=\"js-trigger\" data-mt-tolerance=\"-50\" style=\"transition-delay: 0.3s;\">About</a>
                </li>
                <li>
                    <a href=\"#services\" class=\"js-trigger\" data-mt-tolerance=\"-50\" style=\"transition-delay: 0.4s;\">Services</a>
                </li>
                <li>
                    <a href=\"#contact\" class=\"js-trigger\" data-mt-tolerance=\"-80\" style=\"transition-delay: 0.5s;\">Contact</a>
                </li>
            </ul>
            <div class=\"navigation__overlay\"></div>
            <a href=\"#header\" title=\"Go to top\" class=\"scroll-to-top-btn js-trigger\"><i class=\"icofont-long-arrow-up icofont-lg\"></i></a>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"container mx-auto\">
    <nav class=\"navigation col navigation--primary\">
        <div class=\"logo\">
            <a href=\"/\">
                <img width=\"150px\" height=\"150px\" class=\"rbvd-logo\" src=\"{{ this.theme.logo_header ? this.theme.logo_header|media : 'assets/dist/images/RebornVintagedesing.png'|theme  }}\" alt=\"Logo\"> 
            </a>
        </div>
        <div class=\"navigation__links-wrap\">
            <button class=\"navigation__button\" aria-label=\"mobile menu\">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class=\"navigation__links\">
                <li>
                    <a href=\"#portfolio\" class=\"js-trigger\">Portfolio</a>
                </li>
              
                <li>
                    <a href=\"#about\" class=\"js-trigger\" data-mt-tolerance=\"-50\" style=\"transition-delay: 0.3s;\">About</a>
                </li>
                <li>
                    <a href=\"#services\" class=\"js-trigger\" data-mt-tolerance=\"-50\" style=\"transition-delay: 0.4s;\">Services</a>
                </li>
                <li>
                    <a href=\"#contact\" class=\"js-trigger\" data-mt-tolerance=\"-80\" style=\"transition-delay: 0.5s;\">Contact</a>
                </li>
            </ul>
            <div class=\"navigation__overlay\"></div>
            <a href=\"#header\" title=\"Go to top\" class=\"scroll-to-top-btn js-trigger\"><i class=\"icofont-long-arrow-up icofont-lg\"></i></a>
        </div>
    </nav>
</header>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/header.htm", "");
    }
}
