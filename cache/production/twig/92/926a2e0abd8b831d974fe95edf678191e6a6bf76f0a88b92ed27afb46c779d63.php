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

/* overall_footer.html */
class __TwigTemplate_52f9ffe6685f33f3f5525cff74b80f99545a6bea995187d8f9869f5886754bb7 extends \Twig\Template
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
        echo "        ";
        // line 2
        echo "</div>
";
        // line 3
        // line 4
        echo "
<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
    ";
        // line 6
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 6)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 7
        echo "
    <div class=\"copyright\">
        ";
        // line 9
        // line 10
        echo "        <p class=\"footer-row\">
            <span>";
        // line 11
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span><span class=\"minilogo\">";
        echo ($context["MINI_LOGO_IMG"] ?? null);
        echo "</span>
            <p class=\"foot-copyright\">Artemis Protocol<a href=\"https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjyxO3WnrP0AhV3QzABHRgLCw0QFnoECAUQAQ&url=https%3A%2F%2Fwww.harmony.one%2F&usg=AOvVaw083IZhdj12eR9TVEIrVdW9\">Harmony One</a></p>
        </p>
        ";
        // line 14
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 15
            echo "        <p class=\"footer-row\">
            <span class=\"footer-copyright\">";
            // line 16
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
        </p>
        ";
        }
        // line 19
        echo "        ";
        // line 20
        echo "        <p class=\"footer-row\" role=\"menu\">
            <a class=\"footer-link\" href=\"";
        // line 21
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
                <span class=\"footer-link-text\">";
        // line 22
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
            </a>
            |
            <a class=\"footer-link\" href=\"";
        // line 25
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
                <span class=\"footer-link-text\">";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
            </a>
        </p>
        ";
        // line 29
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 30
            echo "        <p class=\"footer-row\">
            <span class=\"footer-info\">";
            // line 31
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
        </p>
        ";
        }
        // line 34
        echo "        ";
        if (($context["U_ACP"] ?? null)) {
            // line 35
            echo "        <p class=\"footer-row\">
            <a class=\"footer-link text-strong\" href=\"";
            // line 36
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a>
        </p>
        ";
        }
        // line 39
        echo "    </div>

    <div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 41
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
        <div id=\"darken\" class=\"darken\">&nbsp;</div>
    </div>

    <div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 45
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
        <a href=\"#\" class=\"alert_close\">
            <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
        </a>
        <h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
    </div>
    <div id=\"phpbb_confirm\" class=\"phpbb_alert\">
        <a href=\"#\" class=\"alert_close\">
            <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
        </a>
        <div class=\"alert_text\"></div>
    </div>
</div>

</div>

<div>
    <a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
    ";
        // line 63
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 64
        echo "</div>

<script src=\"";
        // line 66
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 67
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 68
        echo "
<script src=\"";
        // line 69
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 70
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 71
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 72
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 73
            echo "    <script>
        (function(\$){
            var \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
                \$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
            if (\$span.css('fontFamily') !== 'FontAwesome' ) {
                \$fa_cdn.after('<link href=\"";
            // line 78
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
                \$fa_cdn.remove();
            }
            \$span.remove();
        })(jQuery);
    </script>
";
        }
        // line 85
        echo "
";
        // line 86
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 87
            echo "    <script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
    <script>
        if (typeof window.cookieconsent === \"object\") {
            window.addEventListener(\"load\", function(){
                window.cookieconsent.initialise({
                    \"palette\": {
                        \"popup\": {
                            \"background\": \"#0F538A\"
                        },
                        \"button\": {
                            \"background\": \"#E5E5E5\"
                        }
                    },
                    \"theme\": \"classic\",
                    \"content\": {
                        \"message\": \"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
                        \"dismiss\": \"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
                        \"link\": \"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
                        \"href\": \"";
            // line 105
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
                    }
                });
            });
        }
    </script>
";
        }
        // line 112
        echo "
";
        // line 113
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 114
        echo "
";
        // line 115
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 115)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 116
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 116);
        echo "

";
        // line 118
        // line 119
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 119,  336 => 118,  331 => 116,  317 => 115,  314 => 114,  309 => 113,  306 => 112,  296 => 105,  292 => 104,  288 => 103,  284 => 102,  263 => 87,  261 => 86,  258 => 85,  248 => 78,  241 => 73,  239 => 72,  225 => 71,  211 => 70,  205 => 69,  202 => 68,  194 => 67,  190 => 66,  186 => 64,  182 => 63,  159 => 45,  144 => 41,  140 => 39,  132 => 36,  129 => 35,  126 => 34,  120 => 31,  117 => 30,  115 => 29,  109 => 26,  103 => 25,  97 => 22,  91 => 21,  88 => 20,  86 => 19,  80 => 16,  77 => 15,  75 => 14,  67 => 11,  64 => 10,  63 => 9,  59 => 7,  47 => 6,  43 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
