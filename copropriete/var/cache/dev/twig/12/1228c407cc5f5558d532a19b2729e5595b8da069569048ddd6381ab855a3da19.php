<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ad25e4e008bfaf7d716cab14e1f42eb67fe05ebf2e28e7032bb5f9f646e86552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb5fae5621a3fc47aff567ad54514e69c11b5e23a396dea8aa741129cc7d9d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5fae5621a3fc47aff567ad54514e69c11b5e23a396dea8aa741129cc7d9d5f->enter($__internal_cb5fae5621a3fc47aff567ad54514e69c11b5e23a396dea8aa741129cc7d9d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_3c493fd3049da267291ea0a707857d135ebff38f43c95613a3f7d4b49a5fd9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c493fd3049da267291ea0a707857d135ebff38f43c95613a3f7d4b49a5fd9b9->enter($__internal_3c493fd3049da267291ea0a707857d135ebff38f43c95613a3f7d4b49a5fd9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_cb5fae5621a3fc47aff567ad54514e69c11b5e23a396dea8aa741129cc7d9d5f->leave($__internal_cb5fae5621a3fc47aff567ad54514e69c11b5e23a396dea8aa741129cc7d9d5f_prof);

        
        $__internal_3c493fd3049da267291ea0a707857d135ebff38f43c95613a3f7d4b49a5fd9b9->leave($__internal_3c493fd3049da267291ea0a707857d135ebff38f43c95613a3f7d4b49a5fd9b9_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_74516a0248a1fd1a8f92be313afc004967f34ce0482ac9f80069aea7b15d4080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74516a0248a1fd1a8f92be313afc004967f34ce0482ac9f80069aea7b15d4080->enter($__internal_74516a0248a1fd1a8f92be313afc004967f34ce0482ac9f80069aea7b15d4080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_976279a66de65642332e95cae9794fa79a237534d1f8c5374abefe67baa53b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976279a66de65642332e95cae9794fa79a237534d1f8c5374abefe67baa53b1f->enter($__internal_976279a66de65642332e95cae9794fa79a237534d1f8c5374abefe67baa53b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_976279a66de65642332e95cae9794fa79a237534d1f8c5374abefe67baa53b1f->leave($__internal_976279a66de65642332e95cae9794fa79a237534d1f8c5374abefe67baa53b1f_prof);

        
        $__internal_74516a0248a1fd1a8f92be313afc004967f34ce0482ac9f80069aea7b15d4080->leave($__internal_74516a0248a1fd1a8f92be313afc004967f34ce0482ac9f80069aea7b15d4080_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3594f164f0ea3d31914d9061b1c475390cf218ff37c99c6571b0317b37386094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3594f164f0ea3d31914d9061b1c475390cf218ff37c99c6571b0317b37386094->enter($__internal_3594f164f0ea3d31914d9061b1c475390cf218ff37c99c6571b0317b37386094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1f6e3a07ca0f79d542fc03021114425ed07f804a5a5270cf99f30c9d7600f93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6e3a07ca0f79d542fc03021114425ed07f804a5a5270cf99f30c9d7600f93d->enter($__internal_1f6e3a07ca0f79d542fc03021114425ed07f804a5a5270cf99f30c9d7600f93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1f6e3a07ca0f79d542fc03021114425ed07f804a5a5270cf99f30c9d7600f93d->leave($__internal_1f6e3a07ca0f79d542fc03021114425ed07f804a5a5270cf99f30c9d7600f93d_prof);

        
        $__internal_3594f164f0ea3d31914d9061b1c475390cf218ff37c99c6571b0317b37386094->leave($__internal_3594f164f0ea3d31914d9061b1c475390cf218ff37c99c6571b0317b37386094_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_392902a36a3fd5d38c431b85013e8ceeb3c5e9d189143e0aac06ee60033402b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392902a36a3fd5d38c431b85013e8ceeb3c5e9d189143e0aac06ee60033402b0->enter($__internal_392902a36a3fd5d38c431b85013e8ceeb3c5e9d189143e0aac06ee60033402b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_2097bfc7b464c9cbd6efb2bee02b4cac967f9c2def6c21bc99bed1b7e1ca4baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2097bfc7b464c9cbd6efb2bee02b4cac967f9c2def6c21bc99bed1b7e1ca4baa->enter($__internal_2097bfc7b464c9cbd6efb2bee02b4cac967f9c2def6c21bc99bed1b7e1ca4baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_2097bfc7b464c9cbd6efb2bee02b4cac967f9c2def6c21bc99bed1b7e1ca4baa->leave($__internal_2097bfc7b464c9cbd6efb2bee02b4cac967f9c2def6c21bc99bed1b7e1ca4baa_prof);

        
        $__internal_392902a36a3fd5d38c431b85013e8ceeb3c5e9d189143e0aac06ee60033402b0->leave($__internal_392902a36a3fd5d38c431b85013e8ceeb3c5e9d189143e0aac06ee60033402b0_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e7158a352b30c462c0eda8ba741b1550046aade6f1d4fe151a1cf654353cb86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7158a352b30c462c0eda8ba741b1550046aade6f1d4fe151a1cf654353cb86a->enter($__internal_e7158a352b30c462c0eda8ba741b1550046aade6f1d4fe151a1cf654353cb86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1df20e470e4f27278ed8b98a9b92929a19e0d27bac18421c5bf386e3b6c225df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df20e470e4f27278ed8b98a9b92929a19e0d27bac18421c5bf386e3b6c225df->enter($__internal_1df20e470e4f27278ed8b98a9b92929a19e0d27bac18421c5bf386e3b6c225df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_1df20e470e4f27278ed8b98a9b92929a19e0d27bac18421c5bf386e3b6c225df->leave($__internal_1df20e470e4f27278ed8b98a9b92929a19e0d27bac18421c5bf386e3b6c225df_prof);

        
        $__internal_e7158a352b30c462c0eda8ba741b1550046aade6f1d4fe151a1cf654353cb86a->leave($__internal_e7158a352b30c462c0eda8ba741b1550046aade6f1d4fe151a1cf654353cb86a_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_85f3585c0de78191903ec29bf785071215a2227e8e873d824ad76ef25637fbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f3585c0de78191903ec29bf785071215a2227e8e873d824ad76ef25637fbbf->enter($__internal_85f3585c0de78191903ec29bf785071215a2227e8e873d824ad76ef25637fbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a405554b26019d8022ef58f4079e86fc41ca99ef565f6c6dfc56d5b9e274a566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a405554b26019d8022ef58f4079e86fc41ca99ef565f6c6dfc56d5b9e274a566->enter($__internal_a405554b26019d8022ef58f4079e86fc41ca99ef565f6c6dfc56d5b9e274a566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_a405554b26019d8022ef58f4079e86fc41ca99ef565f6c6dfc56d5b9e274a566->leave($__internal_a405554b26019d8022ef58f4079e86fc41ca99ef565f6c6dfc56d5b9e274a566_prof);

        
        $__internal_85f3585c0de78191903ec29bf785071215a2227e8e873d824ad76ef25637fbbf->leave($__internal_85f3585c0de78191903ec29bf785071215a2227e8e873d824ad76ef25637fbbf_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_fd2fea65606033a9c1a60a28af5a372121ebadb7b555db205109c7a6a58043c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2fea65606033a9c1a60a28af5a372121ebadb7b555db205109c7a6a58043c0->enter($__internal_fd2fea65606033a9c1a60a28af5a372121ebadb7b555db205109c7a6a58043c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_150c5188d7446ca4b064eee7e761cd217c7152a37c39f0d00bd36c6fa8deab19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150c5188d7446ca4b064eee7e761cd217c7152a37c39f0d00bd36c6fa8deab19->enter($__internal_150c5188d7446ca4b064eee7e761cd217c7152a37c39f0d00bd36c6fa8deab19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_150c5188d7446ca4b064eee7e761cd217c7152a37c39f0d00bd36c6fa8deab19->leave($__internal_150c5188d7446ca4b064eee7e761cd217c7152a37c39f0d00bd36c6fa8deab19_prof);

        
        $__internal_fd2fea65606033a9c1a60a28af5a372121ebadb7b555db205109c7a6a58043c0->leave($__internal_fd2fea65606033a9c1a60a28af5a372121ebadb7b555db205109c7a6a58043c0_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_71e890c653f3e488e245aba0c3b5bc8a00bfa8c81f29d47f882b4e01373bb9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e890c653f3e488e245aba0c3b5bc8a00bfa8c81f29d47f882b4e01373bb9bb->enter($__internal_71e890c653f3e488e245aba0c3b5bc8a00bfa8c81f29d47f882b4e01373bb9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_f86db5bb719e043e2841c44977260d7eecdb3733c172b65605f37a4fa317726f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86db5bb719e043e2841c44977260d7eecdb3733c172b65605f37a4fa317726f->enter($__internal_f86db5bb719e043e2841c44977260d7eecdb3733c172b65605f37a4fa317726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f86db5bb719e043e2841c44977260d7eecdb3733c172b65605f37a4fa317726f->leave($__internal_f86db5bb719e043e2841c44977260d7eecdb3733c172b65605f37a4fa317726f_prof);

        
        $__internal_71e890c653f3e488e245aba0c3b5bc8a00bfa8c81f29d47f882b4e01373bb9bb->leave($__internal_71e890c653f3e488e245aba0c3b5bc8a00bfa8c81f29d47f882b4e01373bb9bb_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e6e5441c1fdc25dc2665f6e05be7af4670f1f5c5b464cf934deea56d2177f5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e5441c1fdc25dc2665f6e05be7af4670f1f5c5b464cf934deea56d2177f5de->enter($__internal_e6e5441c1fdc25dc2665f6e05be7af4670f1f5c5b464cf934deea56d2177f5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_572eeadd42a1e756cb772451a69302a574a9e64f62ec6f4ce23ec1bd1053617a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572eeadd42a1e756cb772451a69302a574a9e64f62ec6f4ce23ec1bd1053617a->enter($__internal_572eeadd42a1e756cb772451a69302a574a9e64f62ec6f4ce23ec1bd1053617a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_572eeadd42a1e756cb772451a69302a574a9e64f62ec6f4ce23ec1bd1053617a->leave($__internal_572eeadd42a1e756cb772451a69302a574a9e64f62ec6f4ce23ec1bd1053617a_prof);

        
        $__internal_e6e5441c1fdc25dc2665f6e05be7af4670f1f5c5b464cf934deea56d2177f5de->leave($__internal_e6e5441c1fdc25dc2665f6e05be7af4670f1f5c5b464cf934deea56d2177f5de_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_01348321e1ac739e94617f8d6eefb62a9d0fa1e4fb3fd5450c0ade202cf4d0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01348321e1ac739e94617f8d6eefb62a9d0fa1e4fb3fd5450c0ade202cf4d0fd->enter($__internal_01348321e1ac739e94617f8d6eefb62a9d0fa1e4fb3fd5450c0ade202cf4d0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_535446a09a5a6ab4fc87fde48b1b74f314a5550d4c007aa0cb4f9a55d5c7b3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535446a09a5a6ab4fc87fde48b1b74f314a5550d4c007aa0cb4f9a55d5c7b3e8->enter($__internal_535446a09a5a6ab4fc87fde48b1b74f314a5550d4c007aa0cb4f9a55d5c7b3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_535446a09a5a6ab4fc87fde48b1b74f314a5550d4c007aa0cb4f9a55d5c7b3e8->leave($__internal_535446a09a5a6ab4fc87fde48b1b74f314a5550d4c007aa0cb4f9a55d5c7b3e8_prof);

        
        $__internal_01348321e1ac739e94617f8d6eefb62a9d0fa1e4fb3fd5450c0ade202cf4d0fd->leave($__internal_01348321e1ac739e94617f8d6eefb62a9d0fa1e4fb3fd5450c0ade202cf4d0fd_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0d0654cf44ac6a1601a1487fd83a8f05ecccbb4f1ab76f973aeabb98c05f945b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0654cf44ac6a1601a1487fd83a8f05ecccbb4f1ab76f973aeabb98c05f945b->enter($__internal_0d0654cf44ac6a1601a1487fd83a8f05ecccbb4f1ab76f973aeabb98c05f945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_e263a6f995eafd566060c17ca677a81124f32761daad092c585bd49f68d11c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e263a6f995eafd566060c17ca677a81124f32761daad092c585bd49f68d11c58->enter($__internal_e263a6f995eafd566060c17ca677a81124f32761daad092c585bd49f68d11c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_e263a6f995eafd566060c17ca677a81124f32761daad092c585bd49f68d11c58->leave($__internal_e263a6f995eafd566060c17ca677a81124f32761daad092c585bd49f68d11c58_prof);

        
        $__internal_0d0654cf44ac6a1601a1487fd83a8f05ecccbb4f1ab76f973aeabb98c05f945b->leave($__internal_0d0654cf44ac6a1601a1487fd83a8f05ecccbb4f1ab76f973aeabb98c05f945b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
