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

/* captcha_gd_acp.html */
class __TwigTemplate_261029b0386078ffae047410035981c5298b8da3d78f01df039dd326f6aa122b extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "captcha_gd_acp.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>
\t<a href=\"";
        // line 4
        echo ($context["U_ACTION"] ?? null);
        echo "\" style=\"float: ";
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo ";\">&laquo; ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
        echo "</a>

<h1>";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS");
        echo "</h1>

<p>";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS_EXPLAIN");
        echo "</p>


<form id=\"acp_captcha\" method=\"post\" action=\"";
        // line 11
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
<legend>";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("GENERAL_OPTIONS");
        echo "</legend>

<dl>
\t<dt><label for=\"captcha_gd_foreground_noise\">";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_FOREGROUND_NOISE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input id=\"captcha_gd_foreground_noise\" name=\"captcha_gd_foreground_noise\" value=\"1\" class=\"radio\" type=\"radio\"";
        // line 18
        if (($context["CAPTCHA_GD_FOREGROUND_NOISE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t<label><input name=\"captcha_gd_foreground_noise\" value=\"0\" class=\"radio\" type=\"radio\"";
        // line 19
        if ( !($context["CAPTCHA_GD_FOREGROUND_NOISE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"captcha_gd_x_grid\">";
        // line 22
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_X_GRID");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_X_GRID_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"captcha_gd_x_grid\" name=\"captcha_gd_x_grid\" value=\"";
        // line 23
        echo ($context["CAPTCHA_GD_X_GRID"] ?? null);
        echo "\" type=\"number\" /></dd>
</dl>
<dl>
\t<dt><label for=\"captcha_gd_y_grid\">";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_Y_GRID");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_Y_GRID_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"captcha_gd_y_grid\" name=\"captcha_gd_y_grid\" value=\"";
        // line 27
        echo ($context["CAPTCHA_GD_Y_GRID"] ?? null);
        echo "\" type=\"number\" /></dd>
</dl>
<dl>
\t<dt><label for=\"captcha_gd_wave\">";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_WAVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_WAVE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input id=\"captcha_gd_wave\" name=\"captcha_gd_wave\" value=\"1\" class=\"radio\" type=\"radio\"";
        // line 31
        if (($context["CAPTCHA_GD_WAVE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t<label><input name=\"captcha_gd_wave\" value=\"0\" class=\"radio\" type=\"radio\"";
        // line 32
        if ( !($context["CAPTCHA_GD_WAVE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
</dd>
</dl>
<dl>
\t<dt><label for=\"captcha_gd_3d_noise\">";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_3D_NOISE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_3D_NOISE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input id=\"captcha_gd_3d_noise\" name=\"captcha_gd_3d_noise\" value=\"1\" class=\"radio\" type=\"radio\"";
        // line 37
        if (($context["CAPTCHA_GD_3D_NOISE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t<label><input name=\"captcha_gd_3d_noise\" value=\"0\" class=\"radio\" type=\"radio\"";
        // line 38
        if ( !($context["CAPTCHA_GD_3D_NOISE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
</dd>
</dl>
<dl>
\t<dt><label for=\"captcha_gd_fonts\">";
        // line 42
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_FONTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_GD_FONTS_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input id=\"captcha_gd_fonts\" name=\"captcha_gd_fonts\" value=\"1\" class=\"radio\" type=\"radio\"";
        // line 43
        if ((($context["CAPTCHA_GD_FONTS"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_FONT_DEFAULT");
        echo "</label>
\t\t<label><input name=\"captcha_gd_fonts\" value=\"2\" class=\"radio\" type=\"radio\"";
        // line 44
        if ((($context["CAPTCHA_GD_FONTS"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_FONT_NEW");
        echo "</label>
\t\t<label><input name=\"captcha_gd_fonts\" value=\"3\" class=\"radio\" type=\"radio\"";
        // line 45
        if ((($context["CAPTCHA_GD_FONTS"] ?? null) == 3)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_FONT_LOWER");
        echo "</label>

</dd>
</dl>

</fieldset>
<fieldset>
\t<legend>";
        // line 52
        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
        echo "</legend>
\t";
        // line 53
        if (($context["CAPTCHA_PREVIEW"] ?? null)) {
            // line 54
            echo "\t";
            $location = (("" . ($context["CAPTCHA_PREVIEW"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_PREVIEW"] ?? null)) . ""), "captcha_gd_acp.html", 54)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 55
            echo "\t";
        }
        // line 56
        echo "
</fieldset>

<fieldset>
\t<legend>";
        // line 60
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 62
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 63
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" id=\"preview\" name=\"preview\" value=\"";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
        echo "\" />&nbsp;
\t</p>

\t<input type=\"hidden\" name=\"select_captcha\" value=\"";
        // line 67
        echo ($context["CAPTCHA_NAME"] ?? null);
        echo "\" />
\t<input type=\"hidden\" name=\"configure\" value=\"1\" />

\t";
        // line 70
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 74
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "captcha_gd_acp.html", 74)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "captcha_gd_acp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 74,  278 => 70,  272 => 67,  266 => 64,  262 => 63,  258 => 62,  253 => 60,  247 => 56,  244 => 55,  231 => 54,  229 => 53,  225 => 52,  211 => 45,  203 => 44,  195 => 43,  188 => 42,  177 => 38,  169 => 37,  162 => 36,  151 => 32,  143 => 31,  136 => 30,  130 => 27,  123 => 26,  117 => 23,  110 => 22,  100 => 19,  92 => 18,  85 => 17,  79 => 14,  73 => 11,  67 => 8,  62 => 6,  53 => 4,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_gd_acp.html", "");
    }
}
