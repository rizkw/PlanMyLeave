<?php
/**
 * This view displays the login form. Its layout differs from other pages of the application.
 *
 * @license    http://opensource.org/licenses/MIT MIT
 * @since      0.1.0
 */
?>
<style>
    html,
    body {
        min-height: 100%;
    }

    body {
        margin: 0;
        background: #f4f6f8;
        color: #111827;
        font-family: "Segoe UI", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }

    .pml-login-page,
    .pml-login-page * {
        box-sizing: border-box;
    }

    .pml-login-page {
        position: relative;
        min-height: calc(100vh - 1px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        overflow: hidden;
        background:
            radial-gradient(circle at 12% 18%, rgba(37, 99, 235, 0.16), transparent 31%),
            radial-gradient(circle at 88% 82%, rgba(14, 165, 233, 0.14), transparent 34%),
            linear-gradient(135deg, #eef4ff 0%, #f8fafc 48%, #eef8fb 100%);
    }

    .pml-login-page::before,
    .pml-login-page::after {
        content: "";
        position: absolute;
        border-radius: 999px;
        pointer-events: none;
        filter: blur(2px);
    }

    .pml-login-page::before {
        width: 340px;
        height: 340px;
        top: -190px;
        right: -100px;
        background: rgba(37, 99, 235, 0.10);
    }

    .pml-login-page::after {
        width: 280px;
        height: 280px;
        bottom: -170px;
        left: -80px;
        background: rgba(6, 182, 212, 0.11);
    }

    .pml-login-shell {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 980px;
        min-height: 570px;
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(360px, 0.82fr);
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.8);
        border-radius: 24px;
        background: #ffffff;
        box-shadow: 0 28px 80px rgba(15, 23, 42, 0.16);
    }

    .pml-brand-panel {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 570px;
        padding: 46px;
        overflow: hidden;
        background: linear-gradient(145deg, #172554 0%, #1d4ed8 58%, #0891b2 100%);
        color: #ffffff;
    }

    .pml-brand-panel::before {
        content: "";
        position: absolute;
        width: 360px;
        height: 360px;
        right: -170px;
        top: -120px;
        border-radius: 50%;
        border: 82px solid rgba(255, 255, 255, 0.07);
    }

    .pml-brand-panel::after {
        content: "";
        position: absolute;
        width: 230px;
        height: 230px;
        left: -120px;
        bottom: -120px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
    }

    .pml-brand-logo,
    .pml-brand-copy,
    .pml-brand-footer {
        position: relative;
        z-index: 1;
    }

    .pml-brand-logo img {
        display: block;
        width: 230px;
        max-width: 100%;
        height: auto;
        filter: brightness(0) invert(1);
    }

    .pml-brand-copy {
        max-width: 470px;
        padding: 50px 0;
    }

    .pml-brand-kicker {
        display: inline-flex;
        align-items: center;
        padding: 7px 12px;
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.10);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .pml-brand-copy h1 {
        max-width: 430px;
        margin: 22px 0 14px;
        color: #ffffff;
        font-size: 42px;
        line-height: 1.12;
        font-weight: 700;
        letter-spacing: -0.035em;
    }

    .pml-brand-copy p {
        max-width: 430px;
        margin: 0;
        color: rgba(255, 255, 255, 0.78);
        font-size: 16px;
        line-height: 1.65;
    }

    .pml-brand-footer {
        color: rgba(255, 255, 255, 0.64);
        font-size: 12px;
        line-height: 1.5;
    }

    .pml-form-panel {
        display: flex;
        align-items: center;
        padding: 56px 52px;
        background: #ffffff;
    }

    .pml-form-inner {
        width: 100%;
        max-width: 380px;
        margin: 0 auto;
    }

    .pml-mobile-logo {
        display: none;
        margin-bottom: 34px;
    }

    .pml-mobile-logo img {
        display: block;
        width: 230px;
        max-width: 100%;
        height: auto;
    }

    .pml-form-heading {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 10px;
    }

    .pml-form-heading h2 {
        margin: 0;
        color: #111827;
        font-size: 30px;
        line-height: 1.2;
        font-weight: 700;
        letter-spacing: -0.025em;
    }

    .pml-form-heading a,
    .pml-form-heading button {
        flex: 0 0 auto;
    }

    .pml-form-intro {
        margin: 0 0 30px;
        color: #6b7280;
        font-size: 14px;
        line-height: 1.6;
    }

    .pml-form-inner form {
        margin: 0;
    }

    .pml-form-inner label {
        display: block;
        margin: 0 0 8px;
        color: #374151;
        font-size: 13px;
        line-height: 20px;
        font-weight: 600;
    }

    .pml-form-inner input[type="text"],
    .pml-form-inner input[type="password"],
    .pml-form-inner select,
    .pml-form-inner .select2-container {
        width: 100% !important;
        max-width: none !important;
    }

    .pml-form-inner input[type="text"],
    .pml-form-inner input[type="password"],
    .pml-form-inner select {
        height: 48px;
        margin: 0 0 20px;
        padding: 0 14px;
        border: 1px solid #d1d5db;
        border-radius: 10px;
        outline: none;
        background: #ffffff;
        color: #111827;
        font-family: "Segoe UI", Arial, sans-serif;
        font-size: 15px;
        line-height: 48px;
        box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
        transition: border-color 160ms ease, box-shadow 160ms ease, background-color 160ms ease;
    }

    .pml-form-inner input[type="text"]:focus,
    .pml-form-inner input[type="password"]:focus,
    .pml-form-inner select:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
    }

    .pml-form-inner .select2-container {
        margin-bottom: 20px;
    }

    .pml-form-inner .select2-container .select2-choice,
    .pml-form-inner .select2-container .select2-selection--single {
        height: 48px;
        border: 1px solid #d1d5db;
        border-radius: 10px;
        background: #ffffff;
        box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
    }

    .pml-form-inner .select2-container .select2-choice > .select2-chosen,
    .pml-form-inner .select2-container .select2-selection__rendered {
        line-height: 46px;
        padding-left: 14px;
        color: #111827;
    }

    .pml-form-inner .select2-container .select2-choice .select2-arrow,
    .pml-form-inner .select2-container .select2-selection__arrow {
        height: 46px;
        border-left: 0;
        background: transparent;
    }

    .pml-login-button {
        width: 100%;
        min-height: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 4px;
        padding: 12px 20px;
        border: 0;
        border-radius: 10px;
        background: #2563eb;
        color: #ffffff;
        font-family: "Segoe UI", Arial, sans-serif;
        font-size: 15px;
        line-height: 24px;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 10px 22px rgba(37, 99, 235, 0.22);
        transition: background-color 160ms ease, transform 160ms ease, box-shadow 160ms ease;
    }

    .pml-login-button:hover,
    .pml-login-button:focus {
        background: #1d4ed8;
        color: #ffffff;
        outline: none;
        box-shadow: 0 12px 26px rgba(37, 99, 235, 0.28);
        transform: translateY(-1px);
    }

    .pml-login-button:active {
        transform: translateY(0);
    }

    .pml-form-inner .alert,
    .pml-form-inner .error,
    .pml-form-inner .validation-errors {
        margin: 0 0 20px;
        padding: 12px 14px;
        border: 1px solid #fecaca;
        border-radius: 10px;
        background: #fef2f2;
        color: #991b1b;
        font-size: 13px;
        line-height: 20px;
    }

    .pml-form-inner .alert-success {
        border-color: #bbf7d0;
        background: #f0fdf4;
        color: #166534;
    }

    .pml-form-inner .help-block,
    .pml-form-inner .help-inline {
        color: #b91c1c;
        font-size: 12px;
    }

    .pml-form-inner .mdi {
        font-size: 18px;
        line-height: 1;
    }

    .pml-form-footer {
        margin-top: 28px;
        padding-top: 22px;
        border-top: 1px solid #e5e7eb;
        text-align: center;
    }

    .pml-form-footer img {
        display: block;
        width: 85px;
        height: auto;
        margin: 0 auto;
    }

    #frmModalAjaxWait .modal-header,
    #frmModalAjaxWait .modal-body {
        text-align: center;
    }

    #frmModalAjaxWait .modal-header h1 {
        margin: 0;
        font-size: 22px;
        line-height: 1.3;
    }

    #frmModalAjaxWait .modal-body img {
        display: block;
        margin: 0 auto;
    }

    @media (max-width: 820px) {
        .pml-login-page {
            padding: 24px 16px;
        }

        .pml-login-shell {
            max-width: 560px;
            min-height: 0;
            display: block;
            border-radius: 20px;
        }

        .pml-brand-panel {
            display: none;
        }

        .pml-form-panel {
            padding: 40px 34px;
        }

        .pml-mobile-logo {
            display: block;
        }
    }

    @media (max-width: 480px) {
        .pml-login-page {
            align-items: flex-start;
            padding: 16px 12px;
        }

        .pml-login-shell {
            border-radius: 16px;
        }

        .pml-form-panel {
            padding: 30px 22px;
        }

        .pml-mobile-logo {
            margin-bottom: 28px;
        }

        .pml-mobile-logo img {
            width: 205px;
        }

        .pml-form-heading h2 {
            font-size: 26px;
        }
    }
</style>

<div class="pml-login-page">
    <div class="pml-login-shell">
        <section class="pml-brand-panel" aria-label="Plan My Leave">
            <div class="pml-brand-logo">
                <img src="<?php echo base_url(); ?>assets/images/pml_logo.png" alt="Plan My Leave">
            </div>

            <div class="pml-brand-copy">
                <span class="pml-brand-kicker">Employee self-service</span>
                <h1><?php echo lang('Leave Management System'); ?></h1>
                <p>Access your leave requests, balances, approvals, and absence information from one secure workspace.</p>
            </div>

            <div class="pml-brand-footer">Plan My Leave</div>
        </section>

        <main class="pml-form-panel">
            <div class="pml-form-inner">
                <div class="pml-mobile-logo">
                    <img src="<?php echo base_url(); ?>assets/images/pml_logo.png" alt="Plan My Leave">
                </div>

                <div class="pml-form-heading">
                    <h2><?php echo lang('session_login_title'); ?></h2>
                </div>
                <p class="pml-form-intro">Enter your account details to continue.</p>

                <?php echo $flash_partial_view; ?>
                <?php echo validation_errors(); ?>

                <?php
                $attributes = array('id' => 'loginFrom');
                echo form_open('session/login', $attributes);
                $languages = $this->polyglot->nativelanguages($this->config->item('languages'));
                ?>

                <input type="hidden" name="last_page" value="session/login">

                <?php if (count($languages) == 1) { ?>
                    <input type="hidden" name="language" value="<?php echo $language_code; ?>">
                <?php } else { ?>
                    <label for="language"><?php echo lang('session_login_field_language'); ?></label>
                    <select name="language" id="language">
                        <?php foreach ($languages as $lang_code => $lang_name) { ?>
                            <option value="<?php echo $lang_code; ?>" <?php if ($language_code == $lang_code) echo 'selected'; ?>>
                                <?php echo $lang_name; ?>
                            </option>
                        <?php } ?>
                    </select>
                <?php } ?>

                <label for="login"><?php echo lang('session_login_field_login'); ?></label>
                <input type="text" name="login" id="login"
                    value="<?php echo (ENVIRONMENT == 'demo') ? 'bbalet' : set_value('login'); ?>"
                    autocomplete="username" required>

                <label for="password"><?php echo lang('session_login_field_password'); ?></label>
                <input type="password" name="password" id="password"
                    autocomplete="current-password"
                    value="<?php echo (ENVIRONMENT == 'demo') ? 'bbalet' : ''; ?>" required>

                <button type="submit" class="pml-login-button">
                    <i class="mdi mdi-login" aria-hidden="true"></i>
                    <span><?php echo lang('session_login_button_login'); ?></span>
                </button>
                </form>

                <div class="pml-form-footer">
                    <img src="<?php echo base_url(); ?>assets/images/vml_logo.png" alt="VML">
                </div>
            </div>
        </main>
    </div>
</div>

<div class="modal hide" id="frmModalAjaxWait" data-backdrop="static" data-keyboard="false" role="dialog" aria-live="polite" aria-label="<?php echo lang('global_msg_wait'); ?>">
    <div class="modal-header">
        <h1><?php echo lang('global_msg_wait'); ?></h1>
    </div>
    <div class="modal-body">
        <img src="<?php echo base_url(); ?>assets/images/loading.gif" alt="<?php echo lang('global_msg_wait'); ?>">
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
<script type="text/javascript">
    $(function () {
        <?php if ($this->config->item('csrf_protection') == TRUE) { ?>
            $.ajaxSetup({
                data: {
                    <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash(); ?>"
                }
            });
        <?php } ?>

        if ($('#language').length && Cookies.get('language') !== undefined) {
            var savedLanguage = Cookies.get('language');
            var isLanguageAvailable = $('#language option[value="' + savedLanguage + '"]').length !== 0;

            if (savedLanguage !== "<?php echo $language_code; ?>" && isLanguageAvailable) {
                $('#language').val(savedLanguage);
                $('#loginFrom').prop('action', '<?php echo base_url(); ?>session/language');
                $('#loginFrom').submit();
                return;
            }
        }

        if ($('#language').length && $.fn.select2) {
            $('#language').select2({ width: '100%' });

            $('#language').on('select2:select change', function (e) {
                var value = $(this).val();
                Cookies.set('language', value, { expires: 90, path: '/' });
                $('#loginFrom').prop('action', '<?php echo base_url(); ?>session/language');
                $('#loginFrom').submit();
            });
        }

        $('#login').focus();

        $('#password').on('keydown', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                $('#loginFrom').submit();
            }
        });
    });
</script>
