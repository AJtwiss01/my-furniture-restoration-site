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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/portfolio-item.htm */
class __TwigTemplate_00275c2d8746240392dfa48c17325ad62a044eea17817e9700ad29215ebe1350 extends \Twig\Template
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
        $tags = array("if" => 33, "for" => 43);
        $filters = array("escape" => 5, "media" => 13, "theme" => 13, "raw" => 34, "length" => 42, "split" => 43);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'media', 'theme', 'raw', 'length', 'split'],
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
        echo "<div class=\"portfolio-item\">
    <div class=\"portfolio-item__thumbnail\">
        <div class=\"portfolio-item__thumbnail-overlay\">
            <div class=\"portfolio-item__thumbnail-content\">
                <h4 class=\"portfolio-item__thumbnail-title\">";
        // line 5
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "title", [], "any", false, false, true, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "title", [], "any", false, false, true, 5), "html", null, true))) : (print ("Project Title")));
        echo "</h4>
                <p class=\"portfolio-item__thumbnail-subtitle\">";
        // line 6
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "company", [], "any", false, false, true, 6)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "company", [], "any", false, false, true, 6), "html", null, true))) : (print ("Company")));
        echo "</p>
                <a href=\"";
        // line 7
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 7)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 7), "html", null, true))) : (print ("https://www.websiteurl.com")));
        echo "\" target=\"_blank\" rel=\"noreferrer\" aria-label=\"portfolio link\"><i class=\"icofont-link icofont-lg\"></i></a>    
            </div>
            <button class=\"portfolio-item__thumbnail-button\" aria-label=\"show portfolio button\">
                <i class=\"icofont-long-arrow-right icofont-2x ml-1\"></i>
            </button>
        </div>
        <img src=\"";
        // line 13
        echo ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "thumbnail_image", [], "any", false, false, true, 13)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "thumbnail_image", [], "any", false, false, true, 13), 13, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/portfolio-item.jpg")));
        echo "\" alt=\"Portfolio Image\">
    </div>
    <div class=\"portfolio-item__details\">
        <button type=\"button\" class=\"portfolio-item__details-back-button\" aria-label=\"close portfolio button\">
            <i class=\"icofont-long-arrow-left icofont-3x\"></i>
        </button>
        <div class=\"portfolio-item__details-content\">
            <div class=\"portfolio-item__details-img\">
                <div>
                    <div class=\"portfolio-item__details-heading-wrap\">
                        <h4 class=\"font-bold text-2xl md:text-4xl\">";
        // line 23
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "title", [], "any", false, false, true, 23)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "title", [], "any", false, false, true, 23), "html", null, true))) : (print ("Project Title")));
        echo "</h4>
                        <a class=\"text-gray-200\" href=\"";
        // line 24
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 24)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 24), "html", null, true))) : (print ("https://www.websiteurl.com")));
        echo "\" target=\"_blank\" rel=\"noreferrer\">";
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 24)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 24), "html", null, true))) : (print ("https://www.websiteurl.com")));
        echo "</a>
                    </div>
                    <div class=\"portfolio-item__details-img-bg\"></div>
                    <img src=\"";
        // line 27
        echo ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "full_image", [], "any", false, false, true, 27)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "full_image", [], "any", false, false, true, 27), 27, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/portfolio-item-full.jpg")));
        echo "\" alt=\"Portfolio Primary Image\" class=\"w-full\">
                </div>
            </div>
            <div class=\"portfolio-item__details-text\">
                <h4 class=\"font-bold font-primary mb-4 mt-8 text-xl fade-up\">";
        // line 31
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "portfolio_heading", [], "any", false, false, true, 31)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "portfolio_heading", [], "any", false, false, true, 31), "html", null, true))) : (print ("Project Overview")));
        echo "</h4>
                <div class=\"fade-up\">
                    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "portfolio_details", [], "any", false, false, true, 33)) {
            // line 34
            echo "                        ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "portfolio_details", [], "any", false, false, true, 34), 34, $this->source);
            echo "
                    ";
        } else {
            // line 36
            echo "                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorem modi excepturi eveniet perferendis. Hic commodi distinctio eius odio in?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae ipsam sunt rem vero facere accusamus voluptatem quisquam? Adipisci dignissimos cupiditate repellat qui minus veniam illo repellendus ipsum debitis nam, sunt ad ipsam quos reprehenderit commodi quod. Nulla quibusdam magnam quas!</p>
                    ";
        }
        // line 39
        echo "                </div>
                <h5 class=\"font-bold font-primary mb-4 mt-6 text-xl fade-up\">";
        // line 40
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "list_title", [], "any", false, false, true, 40)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "list_title", [], "any", false, false, true, 40), "html", null, true))) : (print ("Tech Stack")));
        echo "</h5>
                <ul class=\"fade-up\">
                    ";
        // line 42
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "list_items", [], "any", false, false, true, 42)) > 0)) {
            // line 43
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "list_items", [], "any", false, false, true, 43), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["list_item"]) {
                // line 44
                echo "                            <li>- ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["list_item"], 44, $this->source), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    ";
        } else {
            // line 47
            echo "                        <li>- OctoberCMS</li>
                        <li>- Vue</li>
                        <li>- Sass</li>
                    ";
        }
        // line 51
        echo "                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/portfolio-item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  162 => 47,  159 => 46,  150 => 44,  145 => 43,  143 => 42,  138 => 40,  135 => 39,  130 => 36,  124 => 34,  122 => 33,  117 => 31,  110 => 27,  102 => 24,  98 => 23,  85 => 13,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"portfolio-item\">
    <div class=\"portfolio-item__thumbnail\">
        <div class=\"portfolio-item__thumbnail-overlay\">
            <div class=\"portfolio-item__thumbnail-content\">
                <h4 class=\"portfolio-item__thumbnail-title\">{{ portfolio.title ? portfolio.title : 'Project Title' }}</h4>
                <p class=\"portfolio-item__thumbnail-subtitle\">{{ portfolio.company ? portfolio.company : 'Company'  }}</p>
                <a href=\"{{ portfolio.website_url ? portfolio.website_url : 'https://www.websiteurl.com' }}\" target=\"_blank\" rel=\"noreferrer\" aria-label=\"portfolio link\"><i class=\"icofont-link icofont-lg\"></i></a>    
            </div>
            <button class=\"portfolio-item__thumbnail-button\" aria-label=\"show portfolio button\">
                <i class=\"icofont-long-arrow-right icofont-2x ml-1\"></i>
            </button>
        </div>
        <img src=\"{{ portfolio.thumbnail_image ? portfolio.thumbnail_image|media : 'assets/dist/images/portfolio-item.jpg'|theme }}\" alt=\"Portfolio Image\">
    </div>
    <div class=\"portfolio-item__details\">
        <button type=\"button\" class=\"portfolio-item__details-back-button\" aria-label=\"close portfolio button\">
            <i class=\"icofont-long-arrow-left icofont-3x\"></i>
        </button>
        <div class=\"portfolio-item__details-content\">
            <div class=\"portfolio-item__details-img\">
                <div>
                    <div class=\"portfolio-item__details-heading-wrap\">
                        <h4 class=\"font-bold text-2xl md:text-4xl\">{{ portfolio.title ? portfolio.title : 'Project Title' }}</h4>
                        <a class=\"text-gray-200\" href=\"{{ portfolio.website_url ? portfolio.website_url : 'https://www.websiteurl.com' }}\" target=\"_blank\" rel=\"noreferrer\">{{ portfolio.website_url ? portfolio.website_url : 'https://www.websiteurl.com' }}</a>
                    </div>
                    <div class=\"portfolio-item__details-img-bg\"></div>
                    <img src=\"{{ portfolio.full_image ? portfolio.full_image|media : 'assets/dist/images/portfolio-item-full.jpg'|theme }}\" alt=\"Portfolio Primary Image\" class=\"w-full\">
                </div>
            </div>
            <div class=\"portfolio-item__details-text\">
                <h4 class=\"font-bold font-primary mb-4 mt-8 text-xl fade-up\">{{ portfolio.portfolio_heading ? portfolio.portfolio_heading : 'Project Overview' }}</h4>
                <div class=\"fade-up\">
                    {% if portfolio.portfolio_details %}
                        {{ portfolio.portfolio_details|raw }}
                    {% else %}
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorem modi excepturi eveniet perferendis. Hic commodi distinctio eius odio in?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae ipsam sunt rem vero facere accusamus voluptatem quisquam? Adipisci dignissimos cupiditate repellat qui minus veniam illo repellendus ipsum debitis nam, sunt ad ipsam quos reprehenderit commodi quod. Nulla quibusdam magnam quas!</p>
                    {% endif %}
                </div>
                <h5 class=\"font-bold font-primary mb-4 mt-6 text-xl fade-up\">{{ portfolio.list_title ? portfolio.list_title : 'Tech Stack' }}</h5>
                <ul class=\"fade-up\">
                    {% if portfolio.list_items|length > 0 %}
                        {% for list_item in portfolio.list_items|split(',') %}
                            <li>- {{ list_item }}</li>
                        {% endfor %}
                    {% else %}
                        <li>- OctoberCMS</li>
                        <li>- Vue</li>
                        <li>- Sass</li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
</div>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/portfolio-item.htm", "");
    }
}
