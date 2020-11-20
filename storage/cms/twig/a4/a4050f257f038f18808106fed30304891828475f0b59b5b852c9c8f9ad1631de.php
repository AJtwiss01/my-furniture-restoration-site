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
        $tags = array("if" => 66, "for" => 84);
        $filters = array("escape" => 6, "media" => 27, "theme" => 27, "raw" => 67, "length" => 84, "split" => 85);
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
        <h4 class=\"portfolio-item__thumbnail-title\">
          ";
        // line 6
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "title", [], "any", false, false, true, 6)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "title", [], "any", false, false, true, 6), "html", null, true))) : (print ("Project Title")));
        echo "
        </h4>
        <p class=\"portfolio-item__thumbnail-subtitle\">
          ";
        // line 9
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "company", [], "any", false, false, true, 9)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "company", [], "any", false, false, true, 9), "html", null, true))) : (print ("Company")));
        echo "
        </p>
        <a
          href=\"";
        // line 12
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 12)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 12), "html", null, true))) : (print ("https://www.websiteurl.com")));
        echo "\"
          target=\"_blank\"
          rel=\"noreferrer\"
          aria-label=\"portfolio link\"
          ><i class=\"icofont-link icofont-lg\"></i
        ></a>
      </div>
      <button
        class=\"portfolio-item__thumbnail-button\"
        aria-label=\"show portfolio button\"
      >
        <i class=\"icofont-long-arrow-right icofont-2x ml-1\"></i>
      </button>
    </div>
    <img
      src=\"";
        // line 27
        echo ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "thumbnail_image", [], "any", false, false, true, 27)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "thumbnail_image", [], "any", false, false, true, 27), 27, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/portfolio-item.jpg")));
        echo "\"
      alt=\"Portfolio Image\"
    />
  </div>
  <div class=\"portfolio-item__details\">
    <button
      type=\"button\"
      class=\"portfolio-item__details-back-button\"
      aria-label=\"close portfolio button\"
    >
      <i class=\"icofont-long-arrow-left icofont-3x\"></i>
    </button>
    <div class=\"portfolio-item__details-content\">
      <div class=\"portfolio-item__details-img\">
        <div>
          <div class=\"portfolio-item__details-heading-wrap\">
            <a
              class=\"text-gray-200\"
              href=\"";
        // line 45
        ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 45)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 45), "html", null, true))) : (print ("https://www.websiteurl.com")));
        echo "\"
              target=\"_blank\"
              rel=\"noreferrer\"
              >";
        // line 49
        ((twig_get_attribute($this->env, $this->source,         // line 48
($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 48)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "website_url", [], "any", false, false, true, 48), "html", null, true))) : (print ("https://www.websiteurl.com")));
        // line 49
        echo "</a
            >
          </div>
          <div class=\"portfolio-item__details-img-bg\"></div>
          <img
            src=\"";
        // line 54
        echo ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "full_image", [], "any", false, false, true, 54)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "full_image", [], "any", false, false, true, 54), 54, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/portfolio-item-full.jpg")));
        echo "\"
            alt=\"Portfolio Primary Image\"
            class=\"w-full\"
          />
        </div>
      </div>
      <div class=\"portfolio-item__details-text\">
        <h4 class=\"font-bold font-primary mb-4 mt-8 text-xl fade-up\">
          ";
        // line 63
        ((twig_get_attribute($this->env, $this->source,         // line 62
($context["portfolio"] ?? null), "portfolio_heading", [], "any", false, false, true, 62)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "portfolio_heading", [], "any", false, false, true, 62), "html", null, true))) : (print ("Project Overview")));
        // line 63
        echo "
        </h4>
        <div class=\"fade-up\">
          ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "portfolio_details", [], "any", false, false, true, 66)) {
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 67
($context["portfolio"] ?? null), "portfolio_details", [], "any", false, false, true, 67), 67, $this->source);
            echo " ";
        } else {
            // line 68
            echo "          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
            dolorem modi excepturi eveniet perferendis. Hic commodi distinctio
            eius odio in?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae ipsam
            sunt rem vero facere accusamus voluptatem quisquam? Adipisci
            dignissimos cupiditate repellat qui minus veniam illo repellendus
            ipsum debitis nam, sunt ad ipsam quos reprehenderit commodi quod.
            Nulla quibusdam magnam quas!
          </p>
          ";
        }
        // line 81
        echo "        </div>

        <ul class=\"fade-up\">
          ";
        // line 84
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "list_items", [], "any", false, false, true, 84)) > 0)) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 85
($context["portfolio"] ?? null), "list_items", [], "any", false, false, true, 85), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["list_item"]) {
                // line 86
                echo "          <li>- ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["list_item"], 86, $this->source), "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo " ";
        } else {
            // line 88
            echo "          <li>- OctoberCMS</li>
          <li>- Vue</li>
          <li>- Sass</li>
          ";
        }
        // line 92
        echo "        </ul>
        <div>
          <h5 class=\"font-bold font-primary mb-4 mt-6 text-xl fade-up\">
            Before
          </h5>
          <img
            src=\"";
        // line 98
        echo ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "before_image", [], "any", false, false, true, 98)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "before_image", [], "any", false, false, true, 98), 98, $this->source))) : (""));
        echo "\"
            alt=\"Before Image\"
          />
          <img
            src=\"";
        // line 102
        echo ((twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "second_before_image", [], "any", false, false, true, 102)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "second_before_image", [], "any", false, false, true, 102), 102, $this->source))) : (""));
        echo "\"
            alt=\"Before Second Image\"
          />
        </div>
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
        return array (  222 => 102,  215 => 98,  207 => 92,  201 => 88,  198 => 87,  189 => 86,  186 => 85,  182 => 84,  177 => 81,  162 => 68,  158 => 67,  155 => 66,  150 => 63,  148 => 62,  147 => 63,  136 => 54,  129 => 49,  127 => 48,  126 => 49,  120 => 45,  99 => 27,  81 => 12,  75 => 9,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"portfolio-item\">
  <div class=\"portfolio-item__thumbnail\">
    <div class=\"portfolio-item__thumbnail-overlay\">
      <div class=\"portfolio-item__thumbnail-content\">
        <h4 class=\"portfolio-item__thumbnail-title\">
          {{ portfolio.title ? portfolio.title : 'Project Title' }}
        </h4>
        <p class=\"portfolio-item__thumbnail-subtitle\">
          {{ portfolio.company ? portfolio.company : 'Company' }}
        </p>
        <a
          href=\"{{ portfolio.website_url ? portfolio.website_url : 'https://www.websiteurl.com' }}\"
          target=\"_blank\"
          rel=\"noreferrer\"
          aria-label=\"portfolio link\"
          ><i class=\"icofont-link icofont-lg\"></i
        ></a>
      </div>
      <button
        class=\"portfolio-item__thumbnail-button\"
        aria-label=\"show portfolio button\"
      >
        <i class=\"icofont-long-arrow-right icofont-2x ml-1\"></i>
      </button>
    </div>
    <img
      src=\"{{ portfolio.thumbnail_image ? portfolio.thumbnail_image|media : 'assets/dist/images/portfolio-item.jpg'|theme }}\"
      alt=\"Portfolio Image\"
    />
  </div>
  <div class=\"portfolio-item__details\">
    <button
      type=\"button\"
      class=\"portfolio-item__details-back-button\"
      aria-label=\"close portfolio button\"
    >
      <i class=\"icofont-long-arrow-left icofont-3x\"></i>
    </button>
    <div class=\"portfolio-item__details-content\">
      <div class=\"portfolio-item__details-img\">
        <div>
          <div class=\"portfolio-item__details-heading-wrap\">
            <a
              class=\"text-gray-200\"
              href=\"{{ portfolio.website_url ? portfolio.website_url : 'https://www.websiteurl.com' }}\"
              target=\"_blank\"
              rel=\"noreferrer\"
              >{{ portfolio.website_url ? portfolio.website_url :
              'https://www.websiteurl.com' }}</a
            >
          </div>
          <div class=\"portfolio-item__details-img-bg\"></div>
          <img
            src=\"{{ portfolio.full_image ? portfolio.full_image|media : 'assets/dist/images/portfolio-item-full.jpg'|theme }}\"
            alt=\"Portfolio Primary Image\"
            class=\"w-full\"
          />
        </div>
      </div>
      <div class=\"portfolio-item__details-text\">
        <h4 class=\"font-bold font-primary mb-4 mt-8 text-xl fade-up\">
          {{ portfolio.portfolio_heading ? portfolio.portfolio_heading :
          'Project Overview' }}
        </h4>
        <div class=\"fade-up\">
          {% if portfolio.portfolio_details %} {{
          portfolio.portfolio_details|raw }} {% else %}
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
            dolorem modi excepturi eveniet perferendis. Hic commodi distinctio
            eius odio in?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae ipsam
            sunt rem vero facere accusamus voluptatem quisquam? Adipisci
            dignissimos cupiditate repellat qui minus veniam illo repellendus
            ipsum debitis nam, sunt ad ipsam quos reprehenderit commodi quod.
            Nulla quibusdam magnam quas!
          </p>
          {% endif %}
        </div>

        <ul class=\"fade-up\">
          {% if portfolio.list_items|length > 0 %} {% for list_item in
          portfolio.list_items|split(',') %}
          <li>- {{ list_item }}</li>
          {% endfor %} {% else %}
          <li>- OctoberCMS</li>
          <li>- Vue</li>
          <li>- Sass</li>
          {% endif %}
        </ul>
        <div>
          <h5 class=\"font-bold font-primary mb-4 mt-6 text-xl fade-up\">
            Before
          </h5>
          <img
            src=\"{{ portfolio.before_image ? portfolio.before_image|media : ''}}\"
            alt=\"Before Image\"
          />
          <img
            src=\"{{ portfolio.second_before_image ? portfolio.second_before_image|media : ''}}\"
            alt=\"Before Second Image\"
          />
        </div>
      </div>
    </div>
  </div>
</div>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/portfolio-item.htm", "");
    }
}
