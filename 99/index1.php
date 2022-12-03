<?php ?><?php if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}

    function MLTools_ErrorHandler_ee311df6a65bf53eed0d03a8c05f92b9($e,$m){

    switch ($e) {
        case 01:
            die('此脚本未被授权在此机器上运行:IP');
            break;
        case 02:
            die('此脚本未被授权在此机器上运行:域名');
            break;
        case 03:
            die('此脚本未被授权在此机器上运行:MAC');
            break;
        case 04:
            die('此脚本未被授权在此机器上运行:ID');
            break;
        case 05:
            die('此脚本未被授权在此机器上运行:URL');
            break;
        case 06:
            die('许可证文件无效');
            break;
        case 07:
            die('PHP版本运行无效,请确认你运行的PHP版本！');
            break;
        case 12:
            die('许可证文件内容不匹配！');
            break;
        case 13:
            die('许可证文件获取失败！');
            break;
        case 17:
            die('文件被修改了！');
            break;
        default:
            die('文件损坏，请联系作者！');
            break;
    }
    
} error_reporting(0); ?><?php
return sg_load('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');
