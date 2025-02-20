<?php

namespace Sprint\Migration;


class module_main20241111162719 extends Version
{
    protected $author = "mizevvln@yandex.ru";

    protected $description = "";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_socialservices_user',
  'VALUE' => 
  array (
    'OATOKEN' => true,
    'REFRESH_TOKEN' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_user_auth_code',
  'VALUE' => 
  array (
    'OTP_SECRET' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_user_phone_auth',
  'VALUE' => 
  array (
    'OTP_SECRET' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~mp24_paid',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~mp24_paid_date',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~new_license18_0_sign',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_CLIENT_LANG',
  'VALUE' => 'ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_COMPOSITE',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_FINISH_DATE',
  'VALUE' => '4eed0b208db6352961d809de17ed43ab666c66551d70c524700c5c6acd7c2249.2024-12-07',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_MAX_SERVERS',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_MAX_USERS',
  'VALUE' => 'd4cb5c1cdffb25198f821e9bd14e40d5bea4f5f58ab4b0d8e121e873426461cf.0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_PARTNER_ID',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_PHONE_SIP',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~support_finish_date',
  'VALUE' => '2024-12-07',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~update_autocheck_result',
  'VALUE' => 
  array (
    'check_date' => 1731318760,
    'result' => false,
    'error' => '',
    'modules' => 
    array (
    ),
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'admin_lid',
  'VALUE' => 'ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'admin_passwordh',
  'VALUE' => 'FVsQemYUBwMtCUVcAhcGCgsTAQ==',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'all_bcc',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'allow_qrcode_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'allow_socserv_authorization',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'ALLOW_SPREAD_COOKIE',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'attach_images',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_components_template',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_controller_sso',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_multisite',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auto_time_zone',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'bx_fast_download',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'captcha_registration',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'captcha_restoring_password',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'collect_geonames',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'component_cache_on',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'component_managed_cache_on',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'compres_css_js_files',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'control_file_duplicates',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'convert_mail_header',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'convert_original_file_name',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'CONVERT_UNIX_NEWLINE_2_WINDOWS',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'cookie_name',
  'VALUE' => 'BITRIX_SM',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'custom_register_page',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'device_history_cleanup_days',
  'VALUE' => '180',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'disk_space',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_archive_size_limit_auto',
  'VALUE' => '104857600',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_log_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_search_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_stat_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_bucket_id_auto',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_delete_old_auto',
  'VALUE' => '4',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_do_clouds_auto',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_file_kernel_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_file_public_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_integrity_check_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_exec_time_auto',
  'VALUE' => '20',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_exec_time_sleep_auto',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_file_size_auto',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_old_cnt_auto',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_old_size_auto',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_old_time_auto',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_site_id_auto',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_temporary_cache',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_use_compression_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'duplicates_max_size',
  'VALUE' => '100',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'email_from',
  'VALUE' => 'y.baev95@mail.ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'error_reporting',
  'VALUE' => '85',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_block_user',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_cleanup_days',
  'VALUE' => '7',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_file_access',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_group_policy',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_login_fail',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_login_success',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_logout',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_marketplace',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_module_access',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_password_change',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_password_request',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_permissions_fail',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_register',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_register_fail',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_task',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_delete',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_edit',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_groups',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'fill_to_mail',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'GROUP_DEFAULT_RIGHT',
  'VALUE' => 'D',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'GROUP_DEFAULT_TASK',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'hide_panel_for_users',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'image_resize_quality',
  'VALUE' => '95',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'imageeditor_proxy_enabled',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'imageeditor_proxy_white_list',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'inactive_users_block_days',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'LAST_DB_OPTIMIZATION_TIME',
  'VALUE' => '1730979625',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'last_mp_modules_result',
  'VALUE' => 
  array (
    'check_date' => 1731306460,
    'update_module' => 
    array (
    ),
    'end_update' => 
    array (
    ),
    'new_module' => 
    array (
    ),
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_additional_parameters',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_event_bulk',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_event_period',
  'VALUE' => '14',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_gen_text_version',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_link_protocol',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'map_left_menu_type',
  'VALUE' => 'left',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'map_top_menu_type',
  'VALUE' => 'top',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'max_file_size',
  'VALUE' => '20000000',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'move_js_to_body',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mp_modules_date',
  'VALUE' => 
  array (
    0 => 
    array (
      'ID' => 'sprint.migration',
      'NAME' => 'Миграции для разработчиков',
      'TMS' => 1731318765,
    ),
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_auth',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_required',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_uniq_check',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_phone_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_phone_required',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_cleanup_days',
  'VALUE' => '7',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_def_group',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_email_confirmation',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'optimize_css_files',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'optimize_js_files',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'PARAM_MAX_SITES',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'PARAM_MAX_USERS',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'phone_number_default_country',
  'VALUE' => '16',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_history_cleanup_days',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_height',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_size',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_width',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group',
  'VALUE' => '4',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group_add',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group_delete',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group',
  'VALUE' => '3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group_add',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group_delete',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_type',
  'VALUE' => 'auto',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_authority_rating',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_authority_weight_formula',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_authority',
  'VALUE' => '30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_last_visit',
  'VALUE' => '90',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_size',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_count_vote',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_normalization',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_normalization_type',
  'VALUE' => 'auto',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_self_vote',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_start_authority',
  'VALUE' => '3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_d',
  'VALUE' => 'Это нравится',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_n',
  'VALUE' => 'Не нравится',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_y',
  'VALUE' => 'Нравится',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_show',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_template',
  'VALUE' => 'like',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_type',
  'VALUE' => 'like',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_weight',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'save_original_file_name',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'secure_logout',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'send_mid',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'server_name',
  'VALUE' => 'alkogolizm-klinika.local',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'server_uniq_id',
  'VALUE' => 'vbim180cz98bscu4wf5ygq41opqfbjq9',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_auth_only',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_expand',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_show_message',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'show_panel_for_users',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'signer_default_key',
  'VALUE' => 'c983b5714b6327ebf911cd1824fe33c9a8f1a56c038c860f3d901fe20e3a1bc7abff23184fa89fbe6097e8e738d6ca16ba8bd16f7d3ccfa8a256c8023b751c5f',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'site_checker_access',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'site_checker_success',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'site_name',
  'VALUE' => 'alkogolizm-klinika.local',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'skip_mask_array_auto',
  'VALUE' => 
  array (
    0 => 'upload',
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'skip_mask_auto',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'smile_gallery_id',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'smile_last_update',
  'VALUE' => '1730971839',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'sms_default_service',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'stable_versions_only',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'store_password',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'strong_update_check',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'track_outgoing_emails_click',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'track_outgoing_emails_read',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'translate_key_yandex',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'translit_original_file_name',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_autocheck',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_devsrv',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_is_gzip_installed',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_load_timeout',
  'VALUE' => '30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_safe_mode',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site',
  'VALUE' => 'www.1c-bitrix.ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_ns',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_addr',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_pass',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_port',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_user',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_stop_autocheck',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_system_check',
  'VALUE' => '11.11.2024 12:52:30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_system_update',
  'VALUE' => '11.11.2024 12:52:40',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_use_https',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'upload_dir',
  'VALUE' => 'upload',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'url_preview_enable',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'url_preview_save_images',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_digest_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_encrypted_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_hot_keys',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_minified_assets',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_secure_password_cookies',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_time_zones',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_device_geodata',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_device_history',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_device_notify',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_profile_history',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'vendor',
  'VALUE' => '1c_bitrix',
));
    }
}
