<?php
/**
 * 声明：该文件为默认配置，不要修改这个文件，要修改配置请新建文件来覆盖配置名称
 */

return array(
    /**
     * 网站配置
     */
    'site'          => array(
        // 网站标题，会出现在标题和网站Home菜单
        'title'        => 'iNews',
        // SEO标题后缀
        'title_suffix' => '- Mac/iOS news',
        // 非文章页面的META
        'default_meta' => 'Upcoming Mac/iOS news for you, Daily Mac/iOS tips to live life easy.',
        // SEO关键字
        'keywords'     => 'Mac, iOS, iPhone tips, Mac tips, iOS tips, inews.io, inews',
        // 页面底部配置，HTML代码
        'footer'       => '',
        // 搜索栏配置
        'search_bar'   => '<a href="/p/406">简介</a> | <a href="https://github.com/Trimidea/inews-community/issues" target="_blank">反馈</a> | ',
        // 菜单配置
        'menus'        => array(
            array('Latest', '/latest', 'clock'),
            array('Leaders', '/leaders', 'user'),
        ),
        // 分享模板
        'share_text'   => '我在 {site_title} 分享了 {title}'
    ),

    /**
     * Google统计的配置
     */
    'ga'            => false,

    /**
     * 时区配置
     */
    'timezone'      => 'Asia/Shanghai',

    /**
     * 密码种子
     */
    'password_salt' => 'D#FA#!#%Nz',

    /**
     * COOKIE配置
     */
    'cookie'        => array(
        'path'     => '/',
        'domain'   => null,
        'secure'   => false,
        'httponly' => false,
        'timeout'  => 3600,
        'sign'     => false,
        'secret'   => 'DF@#dda#F^!',
        'encrypt'  => false,
    ),

    /**
     * 加密密钥配置
     */
    'crypt'         => array(
        'key' => 'sdF!#$FDA'
    ),

    /**
     * 是否开启邮件验证，如果开始，需要配置邮件，否则将无法使用
     */
    'verify_user'   => false,

    /**
     * 第三方登陆配置，目前仅支持Github和微博
     */
    /*'passport'      => array(
        'weibo'  => array(
            'key'            => '4001143741',
            'secret'         => 'ae6c0c7599e22f2fe0eb7726666cee32',
            'strategy_class' => 'SinaWeibo'
        ),
        'github' => array(
            'client_id'      => '48e6e90a1f919cbaeef5',
            'client_secret'  => 'a10c12531e6087ca056c3a9e50cb71c574f7c870',
            'strategy_class' => 'GitHub'
        )
    ),*/

    /**
     * 邮件配置，需要服务器配置好/usr/sbin/sendmail
     */
    /*'mail'          => array(
        'from'     => 'hfcorriez@gmail.com',
        'fromName' => 'iNews.io'
    )*/
    'url_write'     => false
);