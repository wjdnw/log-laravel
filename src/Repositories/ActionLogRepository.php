<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/5
 * Time: 15:42
 */

namespace Wjdnw\LogLaravel\Repositories;


class ActionLogRepository
{

    /**
     * 记录用户操作日志
     * @param $type
     * @param $content
     * @param ActionLog $actionLog
     * @return bool
     */
    public function createActionLog( $type,$content )
    {
        dd( 'aaa ' );
    }
}