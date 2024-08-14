<?php

return [
    'fields' => [
        'code' => 'Code',
        'current_password' => '当前密码',
        'email' => 'Email',
        'name' => '名称',
        'password' => '密码',
        'recovery_code' => '恢复Code',
    ],

    'buttons' => [
        'add' => '添加',
        'cancel' => '取消',
        'close' => '关闭',
        'connect' => '连接',
        'confirm' => '确认',
        'create' => '创建',
        'create_token' => '创建个人访问令牌',
        'delete' => '删除',
        'delete_account' => '删除账户',
        'delete_company' => '删除公司',
        'disable' => '禁用',
        'done' => '完成',
        'edit' => '编辑',
        'email_password_reset_link' => '密码重置链接',
        'enable' => '启用',
        'leave' => '离开',
        'login' => '登录',
        'logout' => '登出',
        'logout_browser_sessions' => '登出其他浏览器会话',
        'new_photo' => '新照片',
        'permissions' => '权限',
        'register' => '注册',
        'regenerate_recovery_codes' => '重新生成恢复Code',
        'remember_me' => '记住我',
        'remove' => '移除',
        'remove_connected_account' => '移除连接账户',
        'remove_photo' => '移除照片',
        'reset_password' => '重置密码',
        'resend_verification_email' => '重新发送验证邮件',
        'revoke' => '撤销',
        'save' => '保存',
        'show_recovery_codes' => '显示恢复Code',
        'use_authentication_code' => '使用验证码',
        'use_avatar_as_profile_photo' => '使用头像作为个人资料照片',
        'use_recovery_code' => '使用恢复Code',
    ],

    'labels' => [
        'company_name' => '公司名称',
        'company_owner' => '公司所有者',
        'connected' => '已连接',
        'created_at' => '创建于',
        'last_active' => '最后活跃',
        'last_used' => '最后使用',
        'last_used_at' => '最后使用于',
        'new_password' => '新密码',
        'not_connected' => '未连接',
        'password_confirmation' => '密码确认',
        'permissions' => '权限',
        'photo' => '照片',
        'role' => '角色',
        'setup_key' => '设置Key',
        'this_device' => '此设备',
        'token_name' => '令牌名称',
        'unknown' => '未知',
        'updated_at' => '更新于',
    ],

    'links' => [
        'already_registered' => 'Already registered?',
        'edit_profile' => 'Edit Profile',
        'forgot_your_password' => 'Forgot your password?',
        'privacy_policy' => 'Privacy Policy',
        'register_an_account' => 'Register an account',
        'terms_of_service' => 'Terms of Service',
    ],

    'errors' => [
        'cannot_leave_company' => 'You may not leave a company that you created.',
        'company_deletion' => 'You may not delete your personal company.',
        'email_already_associated' => 'An account with that email address already exists. Please login to connect your :Provider account.',
        'email_not_found' => 'We were unable to find a registered user with this email address.',
        'employee_already_belongs_to_company' => 'This employee already belongs to the company.',
        'employee_already_invited' => 'This employee has already been invited to the company.',
        'generic_error' => 'An error occurred while processing your request.',
        'invalid_password' => 'The password you entered is invalid.',
        'no_email_with_account' => 'No email address is associated with this :Provider account. Please try a different account.',
        'password_does_not_match' => 'The provided password does not match your current password.',
        'already_associated_account' => 'An account with that :Provider sign in already exists, please login.',
        'already_connected' => 'An account with that email address already exists. Please login to connect your :Provider account.',
        'signin_not_found' => 'An account with this :Provider sign in was not found. Please register or try a different sign in method.',
        'user_belongs_to_company' => 'This user already belongs to the company.',
        'valid_role' => 'The :attribute must be a valid role.',
        'terms' => 'Terms of Service and Privacy Policy',
    ],

    'descriptions' => [
        'token_created_state' => '已创建 :time_ago by :user_name.',
        'token_last_used_state' => '最后使用于 :time_ago',
        'token_never_used' => '从未使用',
        'token_updated_state' => '更新于 :time_ago',
    ],

    'banner' => [
        'company_invitation_accepted' => 'Great! You have accepted the invitation to join **:company**.',
    ],

    'notifications' => [
        'token_created' => [
            'title' => 'Personal Access Token created',
            'body' => 'A new Personal Access Token has been created with the name **:name**.',
        ],

        'token_updated' => [
            'title' => 'Personal Access Token updated',
            'body' => 'The Personal Access Token has been updated successfully.',
        ],

        'browser_sessions_terminated' => [
            'title' => 'Browser sessions terminated',
            'body' => 'Your account has been logged out of other browser sessions for security purposes.',
        ],

        'company_created' => [
            'title' => 'Company created',
            'body' => 'A new company has been created with the name **:name**.',
        ],

        'company_deleted' => [
            'title' => 'Company deleted',
            'body' => 'The company **:name** has been deleted.',
        ],

        'company_invitation_sent' => [
            'title' => 'Invitation sent',
            'body' => 'An invitation has been sent to **:email** to join your company.',
        ],

        'company_name_updated' => [
            'title' => 'Company updated',
            'body' => 'Your company name has been updated to **:name**.',
        ],

        'connected_account_removed' => [
            'title' => 'Connected account removed',
            'body' => 'The connected account has been removed successfully.',
        ],

        'password_set' => [
            'title' => 'Password set',
            'body' => 'Your account is now password protected. The page will automatically refresh in a moment to update your settings.',
        ],

        'password_updated' => [
            'title' => 'Password updated',
            'body' => 'Your password has been updated successfully.',
        ],

        'profile_information_updated' => [
            'title' => 'Profile information updated',
            'body' => 'Your profile information has been updated successfully.',
        ],

        'already_associated' => [
            'title' => 'Oops!',
            'body' => 'This :Provider sign in account is already associated with your user.',
        ],

        'belongs_to_other_user' => [
            'title' => 'Oops!',
            'body' => 'This :Provider sign in account is already associated with another user. Please try a different account.',
        ],

        'successfully_connected' => [
            'title' => 'Success!',
            'body' => 'You have successfully connected :Provider to your account.',
        ],

        'verification_link_sent' => [
            'title' => 'Verification link sent',
            'body' => 'A new verification link has been sent to the email address provided.',
        ],
    ],

    'navigation' => [
        'headers' => [
            'manage_company' => '管理公司',
            'switch_companies' => '切换公司',
        ],

        'links' => [
            'tokens' => '个人访问令牌',
            'company_settings' => '公司设置',
            'create_company' => '创建公司',
        ],
    ],

    'pages' => [
        'titles' => [
            'tokens' => '个人访问令牌',
            'create_company' => '创建公司',
            'company_settings' => '公司设置',
            'profile' => '个人资料',
        ],
    ],

    'grid_section_titles' => [
        'add_company_employee' => '添加员工',
        'browser_sessions' => '浏览器会话',
        'company_name' => '公司名称',
        'create_token' => '创建个人访问令牌',
        'create_company' => '创建公司',
        'delete_account' => '删除账户',
        'profile_information' => '个人资料信息',
        'set_password' => '设置密码',
        'two_factor_authentication' => '两步验证',
        'update_password' => '更新密码',
    ],

    'grid_section_descriptions' => [
        'add_company_employee' => 'Add a new company employee to your company, allowing them to collaborate with you.',
        'browser_sessions' => 'Manage and log out your active sessions on other browsers and devices.',
        'company_name' => "The company's name and owner information.",
        'create_token' => 'Personal Access Tokens allow third-party services to authenticate with our application on your behalf.',
        'create_company' => 'Create a new company to collaborate with others on projects.',
        'delete_account' => 'Permanently delete your account.',
        'profile_information' => "Update your account's profile information and email address.",
        'set_password' => 'Ensure your account is using a long, random password to stay secure.',
        'two_factor_authentication' => 'Add additional security to your account using two factor authentication.',
        'update_password' => 'Ensure your account is using a long, random password to stay secure.',
    ],

    'action_section_titles' => [
        'company_employees' => '公司员工',
        'connected_accounts' => '连接账户',
        'delete_company' => '删除公司',
        'pending_company_invitations' => '待定公司邀请',
    ],

    'action_section_descriptions' => [
        'company_employees' => '所有人员都属于该公司员工。',
        'connected_accounts' => 'Manage and remove your connected accounts.',
        'delete_company' => '永久删除该公司信息。',
        'pending_company_invitations' => 'These people have been invited to your company and have been sent an invitation email. They may join the company by accepting the email invitation.',
    ],

    'modal_titles' => [
        'token' => 'Personal Access Token',
        'token_permissions' => 'Personal Access Token Permissions',
        'confirm_password' => 'Confirm Password',
        'delete_token' => 'Delete Personal Access Token',
        'delete_account' => 'Delete Account',
        'delete_company' => 'Delete Company',
        'leave_company' => 'Leave Company',
        'logout_browser_sessions' => 'Log Out Other Browser Sessions',
        'manage_role' => 'Manage Role',
        'remove_company_employee' => 'Remove Company Employee',
        'remove_connected_account' => 'Remove Connected Account',
        'revoke_tokens' => 'Revoke Tokens',
    ],

    'modal_descriptions' => [
        'copy_token' => "Please copy your new Personal Access Token. For your security, it won't be shown again.",
        'confirm_password' => 'For your security, please confirm your password to continue.',
        'delete_account' => 'Please enter your password to confirm you would like to delete your account.',
        'delete_token' => 'Are you sure you would like to delete this Personal Access Token?',
        'delete_company' => 'Are you sure you want to delete this company?',
        'leave_company' => 'Are you sure you would like to leave this company?',
        'logout_browser_sessions' => 'Please enter your password to confirm you would like to log out of your other browser sessions.',
        'remove_company_employee' => 'Are you sure you would like to remove this person from the company?',
        'remove_connected_account' => 'Please confirm your removal of this account - this action cannot be undone.',
        'revoke_tokens' => 'Please enter your password to confirm.',
    ],

    'headings' => [
        'auth' => [
            'confirm_password' => 'This is a secure area of the application. Please confirm your password before continuing.',
            'forgot_password' => 'Forgot your password?',
            'login' => 'Log in to your account',
            'register' => 'Register an account',
            'two_factor_challenge' => [
                'authentication_code' => 'Please confirm access to your account by entering the authentication code provided by your authenticator application.',
                'emergency_recovery_code' => 'Please confirm access to your account by entering one of your emergency recovery codes.',
            ],
            'verify_email' => [
                'verification_link_not_sent' => "Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.",
                'verification_link_sent' => 'A new verification link has been sent to the email address you provided in your profile settings.',
            ],
        ],

        'profile' => [
            'connected_accounts' => [
                'has_connected_accounts' => 'Your connected accounts.',
                'no_connected_accounts' => 'You have no connected accounts.',
            ],

            'two_factor_authentication' => [
                'enabled' => 'You have enabled two factor authentication!',
                'finish_enabling' => 'Finish enabling two factor authentication.',
                'not_enabled' => 'You have not enabled two factor authentication.',
            ],

            'update_profile_information' => [
                'verification_link_not_sent' => 'Before your email can be updated, you must verify your current email address.',
                'verification_link_sent' => 'A new verification link has been sent to your email address.',
            ],
        ],

        'tokens' => [
            'token_manager' => [
                'manage_tokens' => 'Manage Personal Access Tokens',
            ],
        ],

        'companies' => [
            'company_employee_manager' => [
                'manage_employees' => '管理员工',
                'pending_invitations' => '待定邀请',
            ],
        ],
    ],

    'subheadings' => [
        'auth' => [
            'forgot_password' => 'Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
            'login' => 'Or',
            'register' => 'I agree to the :terms_of_service and :privacy_policy',
        ],

        'profile' => [
            'two_factor_authentication' => [
                'enabled' => "Two factor authentication is now enabled. Scan the following QR code using your phone's authenticator application or enter the setup key.",
                'finish_enabling' => "To finish enabling two factor authentication, scan the following QR code using your phone's authenticator application or enter the setup key and provide the generated OTP code.",
                'store_codes' => 'Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.',
                'summary' => "When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.",
            ],

            'connected_accounts' => 'You are free to connect any social accounts to your profile and may remove any connected accounts at any time. If you feel any of your connected accounts have been compromised, you should disconnect them immediately and change your password.',
            'delete_user' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.',
            'logout_other_browser_sessions' => 'If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.',
        ],

        'companies' => [
            'company_employee_manager' => 'Please provide the email address of the person you would like to add to this company.',
            'delete_company' => 'Once a company is deleted, all of its resources and data will be permanently deleted. Before deleting this company, please download any data or information regarding this company that you wish to retain.',
        ],
    ],
];
