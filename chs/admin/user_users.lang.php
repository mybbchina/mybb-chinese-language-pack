<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: user_users.lang.php 4304 2009-01-02 01:11:56Z25Z MyBB中文化团队 $
 */

$l['users'] = "用户";

$l['search_for_user'] = "搜索用户";
$l['browse_users'] = "浏览用户";
$l['browse_users_desc'] = "在下面您可以很方便的浏览您论坛的不同用户。这种方式对于生成不同的结果或设置不同的信息特别有用，搜索起来也是如此。";
$l['find_users'] = "查找用户";
$l['find_users_desc'] = "在这里您可以搜索您论坛的用户。填写的信息越详细，结果越精确。";
$l['create_user'] = "添加用户";
$l['create_user_desc'] = "您可以在这里添加一个新用户。";
$l['merge_users'] = "合并用户";
$l['merge_users_desc'] = "这里您可以将两个账户合成一个账户。\"来源帐户\" 将被合并到 \"目标帐户\" ，<strong>只保留目标账户</strong>。来源帐户的主题、回复、私人短信、日历事件、发帖计数器和好友列表都将被合并到目标帐户<br /><span style=\"font-size: 15px;\">请注意，此过程将无法复原！</span>";
$l['edit_user'] = "编辑用户";
$l['edit_user_desc'] = "这里您可以编辑用户个人资料、设置和签名；查看一般统计信息；和访问有关这个用户的其他网页的详细信息。";
$l['show_referrers'] = "查看引用";
$l['show_referrers_desc'] = "您的搜索结果如下所示。您可以列表或名片的方式查看结果。";
$l['show_ip_addresses'] = "显示IP地址";
$l['show_ip_addresses_desc'] = "选定的用户的注册IP地址和发帖IP地址如下所示。第一个IP地址是注册的IP地址（标示为此类）。任何其他的IP地址是发帖IP地址。";

$l['error_avatartoobig'] = "抱歉，但是无法更新你的头像，因为你指定的头像太大。最大尺寸时 {1}x{2} (宽 x 高)";
$l['error_invalidavatarurl'] = "您输入的头像URL地址似乎无效。请确认您输入的URL地址正确。";
$l['error_invalid_user'] = "您选择了一个无效用户。";
$l['error_no_perms_super_admin'] = "您无权编辑此用户，因为您不是超级管理员。";
$l['error_invalid_user_source'] = "您输入的来源帐户不存在。";
$l['error_invalid_user_destination'] = "您输入的目标帐户不存在。";
$l['error_cannot_merge_same_account'] = "来源账户和目标帐户必须不同。";
$l['error_no_users_found'] = "没有搜索到用户。请修改参数再试一次。";
$l['error_invalid_admin_view'] = "您的选择无效";
$l['error_missing_view_title'] = "没有输入标题";
$l['error_no_view_fields'] = "没有选择任何要显示的字段";
$l['error_invalid_view_perpage'] = "每页显示结果数不是有效的数字";
$l['error_invalid_view_sortby'] = "选择的排序字段无效";
$l['error_invalid_view_sortorder'] = "选择的排序顺序无效";
$l['error_invalid_view_delete'] = "要删除的无效";
$l['error_cannot_delete_view'] = "至少要有一个管理员的快速查看。";

$l['user_deletion_confirmation'] = "确定删除此用户?";

$l['success_coppa_activated'] = "选定的COPPA用户已经成功激活。";
$l['success_activated'] = "选择的用户激活成功。";
$l['success_user_created'] = "添加用户成功。";
$l['success_user_updated'] = "选择的用户更新成功。";
$l['success_user_deleted'] = "选择的用户删除成功。";
$l['success_merged'] = "已经成功合并到";
$l['succuss_view_set_as_default'] = "成功设置为默认。";
$l['success_view_created'] = "成功创建。";
$l['success_view_updated'] = "成功更新。";
$l['success_view_deleted'] = "成功删除。";

$l['confirm_view_deletion'] = "您确定要删除选定的查看?";

$l['warning_coppa_user'] = "<p class=\"alert\"><strong>警告: </strong> 此用户正在等待 COPPA 审核。 <a href=\"index.php?module=user/users&amp;action=activate_user&amp;uid={1}\">激活帐户</a></p>";

$l['required_profile_info'] = "个人资料信息";
$l['password'] = "密码";
$l['confirm_password'] = "确认密码";
$l['email_address'] = "Email地址";
$l['use_primary_user_group'] = "使用主用户组";
$l['primary_user_group'] = "主用户组";
$l['additional_user_groups'] = "附加用户组";
$l['additional_user_groups_desc'] = "按住 CTRL 选择多个组";
$l['display_user_group'] = "显示用户组";
$l['save_user'] = "保存用户";

$l['overview'] = "概览";
$l['profile'] = "个人资料";
$l['account_settings'] = "帐户设定";
$l['signature'] = "签名";
$l['avatar'] = "头像";
$l['general_account_stats'] = "一般帐户统计";
$l['local_time'] = "本地时间";
$l['posts'] = "发帖数";
$l['age'] = "年龄";
$l['posts_per_day'] = "平均每日发帖";
$l['percent_of_total_posts'] = "占总发帖数的百分比";
$l['user_overview'] = "用户概览";

$l['new_password'] = "新密码";
$l['new_password_desc'] = "留空不改变";
$l['confirm_new_password'] = "确认新密码";

$l['optional_profile_info'] = "选择性个人信息";
$l['custom_user_title'] = "自定义用户头衔";
$l['custom_user_title_desc'] = "如果留空，使用用户组头衔";
$l['website'] = "网站";
$l['icq_number'] = "ICQ";
$l['aim_handle'] = "AIM";
$l['yahoo_messanger_handle'] = "Yahoo!";
$l['msn_messanger_handle'] = "MSN";

$l['hide_from_whos_online'] = "不显示在“谁在线”列表";
$l['remember_login_details'] = "记住登陆信息";
$l['login_cookies_privacy'] = "登陆, Cookies &amp; 隐私";
$l['recieve_admin_emails'] = "接收管理员邮件";
$l['hide_email_from_others'] = "对其他用户隐藏Email地址";
$l['recieve_pms_from_others'] = "接收其他用户短信";
$l['alert_new_pms'] = "收到新短信时通知我";
$l['email_notify_new_pms'] = "收到新短信时发邮件给我";
$l['default_thread_subscription_mode'] = "默认主题订阅模式";
$l['do_not_subscribe'] = "不订阅";
$l['no_email_notification'] = "没有电子邮件通知";
$l['instant_email_notification'] = "即时电子邮件通知";
$l['messaging_and_notification'] = "消息和通知";
$l['use_default'] = "使用默认";
$l['date_format'] = "日期格式";
$l['time_format'] = "时间格式";
$l['time_zone'] = "时区";
$l['daylight_savings_time_correction'] = "DST(夏令时)更正";
$l['automatically_detect'] = "自动检测 DST 设置";
$l['always_use_dst_correction'] = "总是使用 DST 更正";
$l['never_use_dst_correction'] = "不使用 DST 更正";
$l['date_and_time_options'] = "日期和时间选项";
$l['show_threads_last_day'] = "显示昨天发布的主题";
$l['show_threads_last_5_days'] = "显示最近5天的主题";
$l['show_threads_last_10_days'] = "显示最近10天的主题";
$l['show_threads_last_20_days'] = "显示最近20天的主题";
$l['show_threads_last_50_days'] = "显示最近50天的主题";
$l['show_threads_last_75_days'] = "显示最近75天的主题";
$l['show_threads_last_100_days'] = "显示最近100天的主题";
$l['show_threads_last_year'] = "显示去年的主题";
$l['show_all_threads'] = "显示所有主题";
$l['threads_per_page'] = "每页主题数";
$l['default_thread_age_view'] = "默认主题查看";
$l['forum_display_options'] = "论坛显示选项";
$l['display_users_sigs'] = "在帖子中显示签名";
$l['display_users_avatars'] = "在帖子中显示头像";
$l['show_quick_reply'] = "显示快速回复框在主题下面";
$l['posts_per_page'] = "每页回帖数";
$l['default_thread_view_mode'] = "默认主题显示模式";
$l['linear_mode'] = "线性模式";
$l['threaded_mode'] = "交织模式";
$l['thread_view_options'] = "主题查看选项";
$l['show_redirect'] = "显示友好重定向页面";
$l['show_code_buttons'] = "在发帖页显示 MyCode 格式化选项";
$l['theme'] = "主题";
$l['board_language'] = "全局语言";
$l['other_options'] = "其它选项";
$l['signature_desc'] = "格式化选项: MyCode 是 {1}, 表情是 {2}, IMG 代码是 {3}, HTML 是 {4}";
$l['enable_sig_in_all_posts'] = "在所有帖子中允许签名";
$l['disable_sig_in_all_posts'] = "在所有帖子中禁止签名";
$l['do_nothing'] = "不改变签名偏好";
$l['signature_preferences'] = "签名偏好";

$l['username'] = "用户名";
$l['email'] = "Email";
$l['primary_group'] = "主组";
$l['additional_groups'] = "附加组";
$l['registered'] = "注册时间";
$l['last_active'] = "最后活动";
$l['post_count'] = "发帖数";
$l['reputation'] = "声望";
$l['warning_level'] = "警告级别";
$l['registration_ip'] = "注册IP";
$l['last_known_ip'] = "最后登陆IP";
$l['registration_date'] = "注册日期";

$l['avatar_gallery'] = "头像图集";
$l['current_avatar'] = "当前头像";
$l['user_current_using_uploaded_avatar'] = "此用户当前使用的是上传的头像。";
$l['user_current_using_gallery_avatar'] = "此用户当前使用的是头像图集中的头像。";
$l['user_currently_using_remote_avatar'] = "此用户当前使用的是远程链接的头像。";
$l['max_dimensions_are'] = "头像最大尺寸是";
$l['avatar_max_size'] = "头像最大可以为";
$l['remove_avatar'] = "删除当前头像?";
$l['avatar_desc'] = "在下面您可以管理此用户的头像。作者用户名下方的头像是用来供识别的小图片。";
$l['avatar_auto_resize'] = "如果图片过大，它们将会自动改变大小。";
$l['attempt_to_auto_resize'] = "如果头像过大尝试自动改变大小?";
$l['specify_custom_avatar'] = "指定自定义头像";
$l['upload_avatar'] = "上传头像";
$l['or_specify_avatar_url'] = "或者指定远程头像URL";
$l['or_select_avatar_gallery'] = "或者从头像图集中选择";

$l['ip_addresses'] = "IP地址";
$l['ip_address'] = "IP地址";
$l['show_users_regged_with_ip'] = "显示使用此IP地址注册的用户";
$l['show_users_posted_with_ip'] = "显示使用此IP地址发帖的用户";
$l['ban_ip'] = "禁用IP";
$l['ip_address_for'] = "IP 地址：";

$l['source_account'] = "来源账户";
$l['source_account_desc'] = "此账户将被合并到目标账户，并在合并完毕后删除";
$l['destination_account'] = "目标账户";
$l['destination_account_desc'] = "此账户是合并后保留的账户。";
$l['merge_user_accounts'] = "合并账户";

$l['display_options'] = "显示选项";
$l['ascending'] = "顺序";
$l['descending'] = "倒序";
$l['sort_results_by'] = "排序方式";
$l['in'] = "按照";
$l['results_per_page'] = "每页显示结果数";
$l['display_results_as'] = "显示方式";
$l['business_card'] = "名片";
$l['views'] = "快速查看";
$l['views_desc'] = "快速查看管理器允许您建立不同种类的查看方式显示在这一特定领域。不同的查看方式对于生成各种报告非常有用。";
$l['manage_views'] = "管理";
$l['none'] = "无";
$l['search'] = "搜索";

$l['edit_profile_and_settings'] = "编辑个人资料和设置";
$l['ban_user'] = "封禁用户";
$l['approve_coppa_user'] = "激活 COPPA 用户";
$l['approve_user'] = "激活用户";
$l['delete_user'] = "删除用户";
$l['show_referred_users'] = "查看引用用户";
$l['show_attachments'] = "显示附件";
$l['table_view'] = "列表模式";
$l['card_view'] = "名片模式";

$l['find_users_where'] = "查找用户...";
$l['username_contains'] = "用户名包括";
$l['email_address_contains'] = "Email地址包括";
$l['is_member_of_groups'] = "用户属于这里的一个或多个组";
$l['website_contains'] = "网站包括";
$l['icq_number_contains'] = "ICQ包括";
$l['aim_handle_contains'] = "AIM包括";
$l['yahoo_contains'] = "Yahoo!包括";
$l['msn_contains'] = "MSN包括";
$l['signature_contains'] = "签名包括";
$l['user_title_contains'] = "自定义头衔包括";
$l['greater_than'] = "大于";
$l['is_exactly'] = "等于";
$l['less_than'] = "小于";
$l['post_count_is'] = "发帖数是";
$l['reg_ip_matches'] = "注册IP地址";
$l['wildcard'] = "* 代表通配符";
$l['last_known_ip'] = "最后登陆IP地址";
$l['posted_with_ip'] = "发帖IP地址";

$l['view'] = "快速查看";
$l['create_new_view'] = "添加快速查看";
$l['create_new_view_desc'] = "在这里您可以自定义一个新的快速查看。您可以自定义要显示的字段、搜索参数和排序方式。";
$l['view_manager'] = "快速查看管理器";
$l['set_as_default_view'] = "设为默认?";
$l['enabled'] = "启用";
$l['disabled'] = "禁用";
$l['fields_to_show'] = "显示的字段";
$l['fields_to_show_desc'] = "请选择需要显示的字段";
$l['edit_view'] = "编辑";
$l['edit_view_desc'] = "在这里您可以编辑快速查看。您可以自定义要显示的字段、搜索参数和排序方式。";
$l['private'] = "私有";
$l['private_desc'] = "只有您能看得见。";
$l['public'] = "公开";
$l['public_desc'] = "其它管理员也可以看到。";
$l['visibility'] = "可见";
$l['save_view'] = "保存";
$l['created_by'] = "创建者：";
$l['default'] = "默认";
$l['this_is_a_view'] = "这是一个 {1} 快速查看";
$l['set_as_default'] = "设为默认";
$l['delete_view'] = "删除";
$l['default_view_desc'] = "默认快速查看由MyBB创建。无法编辑或删除。";
$l['public_view_desc'] = "公开的快速查看所有管理员都可以看到。";
$l['private_view_desc'] = "私有的快速查看只有你自己能看到。";
$l['table'] = "列表";
$l['title'] = "标题";

$l['view_title_1'] = "所有用户";

?>