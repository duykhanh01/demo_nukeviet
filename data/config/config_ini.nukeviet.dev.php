<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2022 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$sys_info['disable_classes'] = [];
$sys_info['disable_functions'] = ['pcntl_alarm', 'pcntl_fork', 'pcntl_waitpid', 'pcntl_wait', 'pcntl_wifexited', 'pcntl_wifstopped', 'pcntl_wifsignaled', 'pcntl_wifcontinued', 'pcntl_wexitstatus', 'pcntl_wtermsig', 'pcntl_wstopsig', 'pcntl_signal', 'pcntl_signal_get_handler', 'pcntl_signal_dispatch', 'pcntl_get_last_error', 'pcntl_strerror', 'pcntl_sigprocmask', 'pcntl_sigwaitinfo', 'pcntl_sigtimedwait', 'pcntl_exec', 'pcntl_getpriority', 'pcntl_setpriority', 'pcntl_async_signals', 'pcntl_unshare', ''];
$sys_info['ini_set_support'] = true;
$sys_info['supports_rewrite'] = 'nginx';
$sys_info['zlib_support'] = true;
$sys_info['mb_support'] = true;
$sys_info['iconv_support'] = true;
$sys_info['allowed_set_time_limit'] = true;
$sys_info['os'] = 'LINUX';
$sys_info['fileuploads_support'] = true;
$sys_info['curl_support'] = true;
$sys_info['ftp_support'] = true;
$sys_info['string_handler'] = 'mb';
$sys_info['support_cache'] = [];
$sys_info['php_compress_methods'] = ['deflate' => 'gzdeflate', 'gzip' => 'gzencode', 'x-gzip' => 'gzencode', 'compress' => 'gzcompress', 'x-compress' => 'gzcompress'];
$sys_info['server_headers'] = ['server' => 'nginx/1.18.0 (Ubuntu)','content-type' => 'text/html; charset=UTF-8','x-frame-options' => 'SAMEORIGIN','x-content-type-options' => 'nosniff'];
$sys_info['is_http2'] = false;
$sys_info['http_only'] = true;
$sys_info['https_only'] = false;
$sys_info['ip6_support'] = true;

ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
ini_set('log_errors', '0');
ini_set('memory_limit', '64M');
ini_set('session.cookie_httponly', '1');
ini_set('session.gc_maxlifetime', '3600');
ini_set('session.gc_probability', '1');
ini_set('track_errors', '1');
ini_set('user_agent', 'NV4');

$serverInfoUpdated = true;
$iniSaveTime = 1670216825;
